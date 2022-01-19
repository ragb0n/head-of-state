<?php

namespace App\Http\Controllers;

use App\Models\Research;
use App\Models\City;
use App\Models\Resource;
use App\Models\Task;
use App\Models\Building;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function index()
    {
        TaskController::checkTasks();

        $researches = Research::where('city_id', Auth::id())->get();
        $city = City::find(Auth::id());
        $production = ResourceController::executeProduction($city);
        $prices = $this->calculateResearchPrice($researches);
        $research_times = $this->calculateResearchTime($researches, Auth::user()->id);
        $times_to_end = $this->calculateTimeToEnd($researches);

        return view('researches', [
            'researches' => $researches,
            'prices' => $prices,
            'research_times' => $research_times,
            'times_to_end' => $times_to_end
        ]);
    }


    public function calculateResearchPrice($researches){
        $prices = Research::$research_prices;

        $counter = 0;
        if($researches[$counter]['level'] > 0){
            foreach($prices as &$price){
                foreach($price as &$resources){
                    $resources = $resources * $researches[$counter]['level'];
                }
                $counter++;
            }        
        }
        return $prices;
    }

    public function calculateResearchTime($researches, $city_id){
        $research_times = Research::$research_times;
        $counter = 0;

        foreach($research_times as &$time){
            if($researches[$counter]['level'] > 0){
                for($i = 1; $i <= $researches[$counter]['level']; $i++){
                    $time *=  1.2;
                }
            }
                 
            $building_bonus = Building::where('city_id', $city_id)
            ->where('type', 8)
            ->first()
            ->level;

            $time_bonus = 10 * $building_bonus;
            $time -= $time_bonus;

            $time_base = $time;
            $hours = floor($time_base / 3600);
            $minutes = floor(($time_base / 60) % 60);
            $seconds = $time_base % 60;

            $time = "$hours:$minutes:$seconds";
            $counter++;
        }

        return $research_times;
    }

    public function levelUpResearch($city_id, $research_id){
        $research = Research::where('id', $research_id)->first();
        $research_type = $research->type;
        $research_level = $research->level;

        $prices = Research::$research_prices[$research_type];

        foreach($prices as $price){
            $price *= $research_level;
        }

        $lack_resources = City::where('id', $city_id)->first()->enoughResources($prices);
        if(empty($lack_resources)){
            $basic_time = Research::$research_times[$research_type];
            for($i = 1; $i <= $research_level; $i++){
                $basic_time *= 1.2;
            }

            $building_bonus = Building::where('city_id', $city_id)
            ->where('type', 8)
            ->first()
            ->level;

            $time_bonus = 10 * $building_bonus;
            $basic_time -= $time_bonus;
            
            $finish_time = Carbon::now()->addSeconds($basic_time);
            $resources = Resource::where('city_id', $city_id)->first();

            $resources->wood -= Research::$research_prices[$research_type]['wood'] * $research_level;
            $resources->silver -= Research::$research_prices[$research_type]['silver'] * $research_level;
            $resources->stone -= Research::$research_prices[$research_type]['stone'] * $research_level;

            $resources->save();

            TaskController::createTask($research, 2, $finish_time);

            return redirect('/researches');
        }
        else{
            return redirect('/researches');
        }
    }

    public function calculateTimeToEnd($researches){
        $times_to_end = [];
        foreach($researches as $research){
            $tasks = Task::where('research_id', $research->id)->first();

            if($tasks == null || $tasks->finished_at->lt(Carbon::now())){
                $times_to_end[$research->id] = null;
                continue;
            }
            $time_left = $tasks->finished_at->diffInSeconds(Carbon::now());

            $hours = floor($time_left / 3600);
            $minutes = floor(($time_left / 60) % 60);
            $seconds = $time_left % 60;

            $time = "$hours:$minutes:$seconds";

            $times_to_end[$research->id] = $time_left;
        }
        return array_values($times_to_end);
    }
}
