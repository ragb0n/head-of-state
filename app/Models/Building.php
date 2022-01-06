<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id',
        'type',
        'level',
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

    // public static $basic_building_prices = [
    //     '1' => ['money' => 10, 'stone' => 10, 'wood' => 10],
    //     '2' => ['money' => 10, 'stone' => 10, 'wood' => 10],
    //     '3' => ['money' => 10, 'stone' => 10, 'wood' => 10],
    //     '4' => ['money' => 10, 'stone' => 10, 'wood' => 10],
    //     '5' => ['money' => 10, 'stone' => 10, 'wood' => 10],
    //     '6' => ['money' => 10, 'stone' => 10, 'wood' => 10],
    //     '7' => ['money' => 10, 'stone' => 10, 'wood' => 10],
    //     '8' => ['money' => 10, 'stone' => 10, 'wood' => 10],
    //     '9' => ['money' => 10, 'stone' => 10, 'wood' => 10]
    // ];

    public static $building_times = [
        '1' => 60,
        '2' => 60,
        '3' => 60,
        '4' => 60,
        '5' => 60,
        '6' => 60,
        '7' => 60,
        '8' => 60,
        '9' => 60
    ];

    public function task()
    {
        return $this->hasMany('App\Task', 'building_id');
    }

    public function city()
    {
        return $this->belongsTo('App\City', 'city_id');
    }
}