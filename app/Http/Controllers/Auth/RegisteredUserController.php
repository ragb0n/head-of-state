<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\City;
use App\Models\Resource;
use App\Models\Research;
use App\Models\Grid;
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
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
            'city_id' => $newCity->id,
            'silver' => 1000,
            'stone' => 500,
            'wood' => 500
        ]);


        Research::create([
            'city_id' => $newCity->id,
            'chemistry_level' => 0,
            'forestry_level' => 0,
            'metallurgy_level' => 0,
            'logistics_level' => 0,
            'economics_level' => 0,
            'spatial_planning_level' => 0,
            'military_defensive_level' => 0,
            'military_offensive_level' => 0,
            'aeronautics_level' => 0,
            'automotive_level' => 0,
            'balistics_level' => 0,
            'intelligence_level' => 0
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
