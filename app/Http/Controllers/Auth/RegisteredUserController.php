<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Army;
use App\Models\User;
use App\Models\City;
use App\Models\Resource;
use App\Models\Research;
use App\Models\Grid;
use App\Models\Ranking;
use App\Models\Unit;
use App\Models\Building;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'min:5', 'max:20', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        $cityLocation = Grid::create([
            'x' => 1,
            'y' => 1
        ]);

       $newCity = City::create([
            'player_id' => $user->id,
            'field_id' => $cityLocation->id
        ]);

        $buildingCounter = 1;

        while($buildingCounter <= 9){
            Building::create([
                'city_id' => $newCity->id,
                'type' => $buildingCounter
            ]);
            $buildingCounter++;
        }

        Resource::create([
            'city_id' => $newCity->id
        ]);

        $researchCounter = 1;

        while($researchCounter <= 9){
            Research::create([
                'city_id' => $newCity->id,
                'type' => $researchCounter
            ]);
            $researchCounter++;
        }

        $unitCounter = 1;

        while($unitCounter <= 9){
            Unit::create([
                'city_id' => $newCity->id,
                'type' => $unitCounter
            ]);
            $unitCounter++;
        }

        Ranking::create([
            'player_id' => $user->id
        ]);

        // Army::create([
        //     'militia_count' => 0,
        //     'walkers_count' => 0,
        //     'slingers_count' => 0,
        //     'archers_count' => 0,
        //     'hoplites_count' => 0,
        //     'cavalrymen_count' => 0,
        //     'chariots_count' => 0,
        //     'catapults_count' => 0,
        //     'city_id' => $newCity->id,
        //     'current_field_id' => $cityLocation->id
        // ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
