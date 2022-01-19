<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    use HasFactory;

    protected $table = 'ranking';

    protected $fillable = [
        'id',
        'player_id',
        'score'
    ];

    public static $building_points = [
        '1' => 6,
        '2' => 6,
        '3' => 6,
        '4' => 6,
        '5' => 5,
        '6' => 10,
        '7' => 16,
        '8' => 19,
        '9' => 8
    ];

    public static $research_points = [
        '1' => 12,
        '2' => 12,
        '3' => 12,
        '4' => 12,
        '5' => 10,
        '6' => 20,
        '7' => 32,
        '8' => 38,
        '9' => 16
    ];
}
