<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'user_id', 'city_id', 'building_id', 'research_id', 'completed', 'finished_at'];

    protected $dates = array('finished_at');


    public function city()
    {
        return $this->belongsTo('App\Models\City', 'city_id');
    }

    public function building()
    {
        return $this->belongsTo('App\Models\Building', 'building_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function army()
    {
        return $this->belongsTo('App\Models\Army', 'army_id');
    }

    public function path()
    {
        return $this->hasMany('App\Path', 'path_id', 'path_id');
    }
}
