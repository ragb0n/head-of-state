<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildings = Building::where('city_id', 1)->get();

        $prices = $this->calculateBuildingPrice($buildings);
        $building_times = $this->calculateBuildingTime($buildings);
    
        return view('buildings', [
            'buildings' => $buildings,
            'prices' => $prices,
            'building_times' => $building_times,
        ]);

    }

    public function calculateBuildingPrice($buildings){
        $prices = [
            '1' => ['money' => 40, 'stone' => 50, 'wood' => 65],
            '2' => ['money' => 50, 'stone' => 77, 'wood' => 50],
            '3' => ['money' => 70, 'stone' => 65, 'wood' => 75],
            '4' => ['money' => 40, 'stone' => 50, 'wood' => 60],
            '5' => ['money' => 30, 'stone' => 40, 'wood' => 45],
            '6' => ['money' => 70, 'stone' => 80, 'wood' => 90],
            '7' => ['money' => 90, 'stone' => 170, 'wood' => 200],
            '8' => ['money' => 240, 'stone' => 180, 'wood' => 220],
            '9' => ['money' => 20, 'stone' => 100, 'wood' => 50]
        ];

        $counter = 0;

        foreach($prices as &$price){
            foreach($price as &$resources){
                $resources = $resources * $buildings[$counter]['level'];
            }
            $counter++;
        }

        return $prices;
    }

    public function calculateBuildingTime($buildings){
        $building_times = [
            '1' => 450,
            '2' => 450,
            '3' => 540,
            '4' => 510,
            '5' => 450,
            '6' => 600,
            '7' => 900,
            '8' => 3000,
            '9' => 1800
        ];

        $counter = 0;

        foreach($building_times as &$time){
            if($buildings[$counter]['level'] > 0){
                for($i = 1; $i <= $buildings[$counter]['level']; $i++){
                    $time = $time * 1.2;
                }
            }
                        
            $time_base = $time;
            $hours = floor($time_base / 3600);
            $minutes = floor(($time_base / 60) % 60);
            $seconds = $time_base % 60;

            $time = "$hours:$minutes:$seconds";
            $counter++;
        }

        return $building_times;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function show(Building $building)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function edit(Building $building)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Building $building)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function destroy(Building $building)
    {
        //
    }
}
