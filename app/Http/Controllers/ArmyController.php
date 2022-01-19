<?php

namespace App\Http\Controllers;

use App\Models\Army;
use App\Models\City;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ArmyController extends Controller
{
    public function index()
    {
        TaskController::checkTasks();

        $armies = Army::where('city_id', Auth::id())->get();
        $city = City::find(Auth::id());
        $production = ResourceController::executeProduction($city);
        $prices = $this->calculateUnitPrice($armies->toArray());
        $recruit_times = $this->calculateRecruitmentTime($armies->toArray());

        return view('units', [
            'armies' => $armies,
            'prices' => $prices,
            'recruit_times' => $recruit_times
        ]);

    }

    public function calculateUnitPrice($armies){

        $prices = [
            '1' => ['silver' => 40, 'stone' => 0, 'wood' => 50],
            '2' => ['silver' => 85, 'stone' => 0, 'wood' => 95],
            '3' => ['silver' => 40, 'stone' => 100, 'wood' => 55],
            '4' => ['silver' => 75, 'stone' => 0, 'wood' => 120],
            '5' => ['silver' => 150, 'stone' => 75, 'wood' => 0],
            '6' => ['silver' => 360, 'stone' => 120, 'wood' => 240],
            '7' => ['silver' => 320, 'stone' => 440, 'wood' => 200],
            '8' => ['silver' => 700, 'stone' => 700, 'wood' => 700]
        ];

        return $prices;
    }

    public function calculateRecruitmentTime ($armies){

        $recruit_times = [
            '1' => 510,
            '2' => 750,
            '3' => 450,
            '4' => 660,
            '5' => 900,
            '6' => 1800,
            '7' => 2000,
            '8' => 10800
        ];

        $counter = 2;

        foreach($recruit_times as &$time){     
            $time_base = $time;
            $hours = floor($time_base / 3600);
            $minutes = floor(($time_base / 60) % 60);
            $seconds = $time_base % 60;

            $time = "$hours:$minutes:$seconds";
            $counter++;
        }

        return $recruit_times;
    }
}
