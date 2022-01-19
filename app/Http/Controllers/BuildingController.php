<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\City;
use App\Models\Research;
use App\Models\Task;
use App\Http\Controllers\TaskController;
use Carbon\Carbon;
use App\Http\Controllers\ResourceController;
use App\Models\Resource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        TaskController::checkTasks();

        $buildings = Building::where('city_id', Auth::id())->get();
        $city = City::find(Auth::id());
        ResourceController::executeProduction($city);
        $prices = $this->calculateBuildingPrice($buildings);
        $building_times = $this->calculateBuildingTime($buildings, Auth::user()->id);
        $times_to_end = $this->calculateTimeToEnd($buildings);
        
        return view('buildings', [
            'buildings' => $buildings,
            'prices' => $prices,
            'building_times' => $building_times,
            'times_to_end' => $times_to_end
        ]);

    }

    public function calculateBuildingPrice($buildings){
        $prices = Building::$building_prices;

        $counter = 0;
        if($buildings[$counter]['level'] > 0){
            foreach($prices as &$price){
                foreach($price as &$resources){
                    $resources = $resources * $buildings[$counter]['level'];
                }
                $counter++;
            }
        }

        return $prices;
    }

    public function calculateBuildingTime($buildings, $city_id){
        $building_times = Building::$building_times;
        $counter = 0;

        foreach($building_times as &$time){

            if($buildings[$counter]['level'] > 0){
                for($i = 1; $i <= $buildings[$counter]['level']; $i++){
                    $time *= 1.2;
                }
            }

            $research_bonus = Research::where('id', $city_id)
            ->where('type', 1)
            ->first()
            ->level;

            $building_bonus = Building::where('city_id', $city_id)
            ->where('type', 6)
            ->first()
            ->level;

            $time_bonus = (10 * $research_bonus) + (10 * $building_bonus);
            $time -= $time_bonus;

            $time_base = $time;
            $hours = floor($time_base / 3600);
            $minutes = floor(($time_base / 60) % 60);
            $seconds = $time_base % 60;

            $time = "$hours:$minutes:$seconds";
            $counter++;
        }

        return $building_times;
    }
    
    public function levelUpBuilding($city_id, $building_id){
        $building = Building::where('id', $building_id)->first();
        $building_type = $building->type;
        $building_level = $building->level;

        $prices = Building::$building_prices[$building_type];

        foreach($prices as $price){
            $price *= $building_level;
        }
        
        $lack_resources = City::where('id', $city_id)->first()->enoughResources($prices);
        if(empty($lack_resources)){
            $basic_time = Building::$building_times[$building_type];

            for($i = 1; $i <= $building_level; $i++){
                $basic_time *= 1.2;
            }        
            $research_bonus = Research::where('id', $city_id)
            ->where('type', 1)
            ->first()
            ->level;

            $building_bonus = Building::where('city_id', $city_id)
            ->where('type', 6)
            ->first()
            ->level;

            $time_bonus = (10 * $research_bonus) + (10 * $building_bonus);
            $basic_time -= $time_bonus;
            $finish_time = Carbon::now()->addSeconds($basic_time);

            $resources = Resource::where('city_id', $city_id)->first();
    
            $resources->wood -= Building::$building_prices[$building_type]['wood'] * $building_level;
            $resources->silver -= Building::$building_prices[$building_type]['silver'] * $building_level;
            $resources->stone -= Building::$building_prices[$building_type]['stone'] * $building_level;
    
            $resources->save();
            TaskController::createTask($building, 1, $finish_time);
    
            return redirect('/buildings');
        }
        else{
            return redirect('/buildings');

        }
    }



    public function calculateTimeToEnd($buildings){
        $times_to_end = [];
        foreach($buildings as $building){
            $tasks = Task::where('building_id', $building->id)->first();

            if($tasks == null || $tasks->finished_at->lt(Carbon::now())){
                $times_to_end[$building->id] = null;
                continue;
            }
            $time_left = $tasks->finished_at->diffInSeconds(Carbon::now());

            $hours = floor($time_left / 3600);
            $minutes = floor(($time_left / 60) % 60);
            $seconds = $time_left % 60;

            $time = "$hours:$minutes:$seconds";

            $times_to_end[$building->id] = $time_left;
        }

        return array_values($times_to_end);
    }

}
