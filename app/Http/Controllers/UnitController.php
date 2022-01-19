<?php

namespace App\Http\Controllers;

use App\Models\Research;
use App\Models\City;
use App\Models\Resource;
use App\Models\Task;
use App\Models\Unit;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class UnitController extends Controller
{
    public function index()
    {
        TaskController::checkTasks();

        $units = Unit::where('city_id', Auth::id())->get();
        $city = City::find(Auth::id());
        $production = ResourceController::executeProduction($city);
        $prices = $this->calculateRecruitPrice();
        $recruit_times = $this->calculateRecruitTime();
        $times_to_end = $this->calculateTimeToEnd($units);

        return view('units', [
            'units' => $units,
            'prices' => $prices,
            'recruit_times' => $recruit_times,
            'times_to_end' => $times_to_end
        ]);
    }

    public function calculateRecruitPrice(){
        return Unit::$recruit_prices;
    }

    public function calculateRecruitTime(){
        $recruitment_times = Unit::$recruit_times;

        foreach($recruitment_times as &$time){            
            $time_base = $time;
            $hours = floor($time_base / 3600);
            $minutes = floor(($time_base / 60) % 60);
            $seconds = $time_base % 60;

            $time = "$hours:$minutes:$seconds";
        }

        return $recruitment_times;
    }

    public function recruitUnit($city_id, $unit_id, $count){
        $recruit = Unit::where('id', $unit_id)->first();
        $recruit_type = $recruit->type;
        $recruit_count = $recruit->count;

        $prices = Unit::$recruit_prices[$recruit_type];

        foreach($prices as $price){
            $price *= $recruit_count;
        }

        $lack_resources = City::where('id', $city_id)->first()->enoughResources($prices);
        if(empty($lack_resources)){
            $finish_time = Carbon::now()->addSeconds(2);
            $resources = Resource::where('city_id', $city_id)->first();

            $resources->wood -= Unit::$recruit_prices[$recruit_type]['wood'] * $recruit_count;
            $resources->silver -= Unit::$recruit_prices[$recruit_type]['silver'] * $recruit_count;
            $resources->stone -= Unit::$recruit_prices[$recruit_type]['stone'] * $recruit_count;

            $resources->save();

            TaskController::createTask($recruit, 2, $finish_time);

            return redirect('/units');
        }
        else{
            return redirect('/units');
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

            $times_to_end[$research->id] = $time;
        }
        return array_values($times_to_end);
    }
}
