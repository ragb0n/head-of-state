<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use App\Models\Resource;
use Carbon\Carbon;

class ResourceController extends Controller
{
    public static function index(){

        $resources = Resource::where('id', Auth::id())->get();

        return [$resources];
    }

    /**
    * Wyliczenie i zapisanie wyprodukowanych przez miasto surowców w danym przedziale czasowym,
    * tj. czasem obecnym (now), a czasem poprzedniej modyfikacji zasobów danego miasta,
    */
    public static function executeProduction(User $user)
    {
        $resources = $user->resources;
        $now = Carbon::now();

        $production = self::calculateProduction($user); // wyliczenie produkcji na godzinę

        $time = $resources->updated_at->diffInSeconds($now);

        $time_prod = []; // the overall production

        foreach ($production as $key => $prod) {
            if ($prod == 0) { // jeżeli produkcja = 0, omiń i leć dalej
                continue;
            }
            $time_prod[$key] = number_format(($prod * ($time / 3600)), 2);
        }

        // sprawdzenie wolnego miejsca w magazynu danym mieście
        $storage = self::calculateStorage($city);

        $production['population'] = 0;

        foreach ($time_prod as $key => $value) {
            $new_resource_value = $resources->$key + $value;

            // porównanie wolnego miejsca w magazynie danego surowca z ilością produkowanych surowców
            // jeżeli surowców jest więcej niż miejsca w magazynie, stan surowców w mieście jest równy max pojemności magazynu
            if ($new_resource_value >= $storage) {
                $resources->$key = $storage;
            } else {
            // jeżeli surowców jest mniej niż miejsca w magazynie, stan surowców w mieście jest równy wyliczonej ilości
                $resources->$key = $new_resource_value;
            }
        }

        $resources->save();
        return $production;
    }

    /**
    * Obliczenie godzinowej produkcji surowców w danym mieście na podstawie poziomów poszczególnych budynków produkcyjnych
    * produkcja = (poziom budynku/2) * 330
    */

    public static function calculateProduction(User $user)
    {
        $production = [
            'money' => 0,
            'steel' => 0,
            'wood' => 0,
            'oil' => 0,
        ];

        foreach ($user->workingBuildings() as $building) {
            $profit = number_format((($building->level / 2) * 330), 2);

            switch ($building->type) {
                case 1:
                    $production['money'] += $profit;
                    break;
                case 2:
                    $production['steel'] += $profit;
                    break;
                case 3:
                    $production['wood'] += $profit;
                    break;
                case 4:
                    $production['oil'] += $profit;
                    break;
            }
        }

        return $production;

    }

    /**
     * Obliczenie pojemności poszczególnych skłądów w danym mieście
     */
    public static function calculateStorage(User $user)
    {
        $now = Carbon::now();
        $storage = 0;

        $stores = $user->buildings->where('type', 4)->filter(function($building) use ($now){
            return (($building->finished_at <= $now));
        });

        if (!$stores->isEmpty()) {
            $stores->toArray();
            foreach ($stores as $store) {
                $storage += ($store['level'] * 100);
            }
        }

        $storage += User::$user_storage[$user->nation];

        return $storage;
    }
    
}
