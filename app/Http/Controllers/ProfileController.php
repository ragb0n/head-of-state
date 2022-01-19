<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;
use App\Models\Army;
use App\Models\Building;
use App\Models\City;
use App\Models\Research;
use App\Models\Resource;
use App\Models\User;
use Auth;


class ProfileController extends Controller
{
    public function update(UpdateProfileRequest $request){
        auth()->user()->update($request->only('username'));

        if ($request->input('password')) {
            auth()->user()->update([
                'password' => bcrypt($request->input('password'))
            ]);
        }

        return redirect()->route('profile')->with('message', 'Zmiany zostały pomyslnie zapisane');
    }

    public function destroy(Request $request){
        $user_id = $request->user()->id;
        $city_id = City::where('player_id', $user_id)->first()->id;
        Army::where('city_id', $city_id)->delete();
        Research::where('city_id', $city_id)->delete();
        Resource::where('city_id', $city_id)->delete();
        Building::where('city_id', $city_id)->delete();
        City::where('player_id', $user_id)->delete();
        User::where('id', $user_id)->delete();

        return redirect()->route('hello');
    }
}
