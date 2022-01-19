<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Army extends Model
{
    use HasFactory;

    protected $table = 'armies';

    protected $fillable = [
        'militia_count',
        'walkers_count',
        'slingers_count',
        'archers_count',
        'hoplites_count',
        'cavalrymen_count',
        'chariots_count',
        'catapults_count',
        'city_id',
        'current_field_id'
    ];
}
