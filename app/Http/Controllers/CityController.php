<?php

namespace App\Http\Controllers;

use App\Models\Grid;
use App\Http\Controllers\Buildings\BuildingController;
use App\Http\Requests;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\Controller;
use App\Models\Building;
use App\Models\City;
use App\Models\Task;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use ErrorException;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        $cities = DB::table('cities')
        ->join('users', 'users.id', '=', 'cities.player_id')
        ->join('grids', 'grids.id', '=', 'cities.field_id')
        ->get();

            return view('map', [
                'cities' => $cities
            ]);
    }
    
    public function getCity()
    {
        TaskController::checkTasks();

        
        $city = City::where('player_id', Auth::id())->first();
        $city_name = $city->name;
        $build_in_progress = DB::table('tasks')
        ->join('buildings', 'buildings.id', '=', 'tasks.building_id')
        ->where('tasks.city_id', Auth::id())
        ->get();

        $production = ResourceController::executeProduction($city);

            return view('dashboard', [
                'production' => $production,
                'city_name' => $city_name,
                'build_in_progress' => $build_in_progress
            ]);
    }

    public function renameCity(Request $request){
        $new_name = $request->input('city_name');
        $city = City::where('player_id', Auth::id())->first();

        $city->name = $new_name;
        $city->save();
        
        return redirect()->route('profile')->with('message', 'Nazwa miasta zmieniona pomyślnie');

    }
}
