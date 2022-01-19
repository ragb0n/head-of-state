<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Building;
use Illuminate\Support\Facades\Auth;
use App\Models\Resource;
use App\Models\Research;
use Carbon\Carbon;

class ResourceController extends Controller
{
    public static function index(){

        $resources = Resource::where('city_id', Auth::id())->get();
        $city = City::find(Auth::id());
        ResourceController::executeProduction($city);
        return [$resources];
    }

    public static function checkEnoughResources($price){
        $resources = self::index();
        if($resources[0][0]['wood'] >=  $price['wood'] && $resources[0][0]['silver'] >= $price['silver'] && $resources[0][0]['stone'] >= $price['stone'] ){
            return true;
        }else{
            return false;
        }
    }

    public static function executeProduction(City $city)
    {
        $resources = $city->resources;
        $now = Carbon::now();

        $production = self::calculateProduction($city);

        $time = $resources->updated_at->diffInSeconds($now);
        $time_prod = []; 

        foreach ($production as $key => $prod) {
            $time_prod[$key] = ($prod / 3600) * $time;
        }

        $storage = self::calculateStorage($city);

        foreach ($time_prod as $key => $value) {
            $new_resource_value = $resources->$key + $value;

            if ($new_resource_value >= $storage) {
                $resources->$key = $storage;
            } else {
                $resources->$key = $new_resource_value;
            }
        }

        $resources->save();

        return $production;
    }

    public static function calculateProduction(City $city)
    {
        $production = [
            'silver' => 60,
            'wood' => 60,
            'stone' => 60
        ];

        $researches = Research::where('city_id', $city->id)->get();

        foreach ($city->workingBuildings() as $building) {

            switch ($building->type) {
                case 1:
                    $research_bonus = $researches[2]['level'] / 10;
                    $profit = (($building->level / 2) + $research_bonus) * 330;
                    $production['silver'] += $profit;
                    break;
                case 2:
                    $research_bonus = $researches[1]['level'] / 10;
                    $profit = (($building->level / 2) + $research_bonus) * 330;
                    $production['wood'] += $profit;
                    break;
                case 3:
                    $research_bonus = $researches[2]['level'] / 10;
                    $profit = (($building->level / 2) + $research_bonus) * 330;
                    $production['stone'] += $profit;
                    break;
            }
        }
        
        return $production;

    }


    public static function calculateStorage(City $city)
    {
        $storage_level = Building::where('city_id', $city->id)->where('type', 4)->first()->level;
        $now = Carbon::now();
        $research_bonus = Research::where('city_id', $city->id)->where('type', 4)->first()->level * 20;

        $storage = 500 * 1.5 * $storage_level + $research_bonus;

        $stores = $city->buildings->where('type', 4)->filter(function($building) use ($now){
            return (($building->finished_at <= $now));
        });

        if (!$stores->isEmpty()) {
            $stores->toArray();
            foreach ($stores as $store) {
                $storage += ($store['level'] * 100);
            }
        }
        return $storage;
    }
    
}
