<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id',
        'chemistry_level',
        'forestry_level',
        'metallurgy_level',
        'logistics_level',
        'economics_level',
        'spatial_planning_level',
        'military_defensive_level',
        'military_offensive_level',
        'aeronautics_level',
        'automotive_level',
        'balistics_level',
        'intelligence_level'
    ];
}
