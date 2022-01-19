<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    protected $dates = array('finished_at');

    protected $fillable = [
        'id',
        'city_id',
        'type',
        'level',
        'finished_at'
    ];

    public static $building_names =[
        '1' => 'Kamieniołom',
        '2' => 'Tartak',
        '3' => 'Kopalnia srebra',
        '4' => 'Magazyn',
        '5' => 'Osiedle',
        '6' => 'Siedziba',
        '7' => 'Koszary',
        '8' => 'Laboratorium',
        '9' => 'Fort'
    ];

    public static $building_prices = [
        '1' => ['silver' => 40, 'stone' => 50, 'wood' => 65],
        '2' => ['silver' => 50, 'stone' => 77, 'wood' => 50],
        '3' => ['silver' => 70, 'stone' => 65, 'wood' => 75],
        '4' => ['silver' => 40, 'stone' => 50, 'wood' => 60],
        '5' => ['silver' => 30, 'stone' => 40, 'wood' => 45],
        '6' => ['silver' => 70, 'stone' => 80, 'wood' => 90],
        '7' => ['silver' => 90, 'stone' => 170, 'wood' => 200],
        '8' => ['silver' => 240, 'stone' => 180, 'wood' => 220],
        '9' => ['silver' => 20, 'stone' => 100, 'wood' => 50]
    ];

    public static $building_times = [
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

    public function task()
    {
        return $this->hasMany('App\Models\Task', 'building_id');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City', 'city_id');
    }
}