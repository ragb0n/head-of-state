<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'cities';

    protected $fillable = [
        'name',
        'player_id',
        'field_id'
    ];

    public function buildings()
    {
        return $this->hasMany('App\Models\Building', 'city_id');
    }

    public function resources()
    {
        return $this->hasOne('App\Models\Resource', 'city_id');
    }

    public function workingBuildings(){
        $now = Carbon::now();
        return $this->buildings->filter(function($building) use ($now){

               return true;

        });
    }

    public function enoughResources(array $price)
    {
        $resources = [];
        foreach ($price as $key => $value) {
            if ($this->resources->$key < $value) {
                $resources[$key] = $value - $this->resources->$key;
            }
        }
        return $resources;
    }
}