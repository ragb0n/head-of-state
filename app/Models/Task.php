<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

      /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tasks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type', 'user_id', 'city_id', 'building_id', 'finished_at'];

    protected $dates = array('finished_at');


    public function city()
    {
        return $this->belongsTo('App\City', 'city_id');
    }

    public function building()
    {
        return $this->belongsTo('App\Building', 'building_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function army()
    {
        return $this->belongsTo('App\Army', 'army_id');
    }

    public function path()
    {
        return $this->hasMany('App\Path', 'path_id', 'path_id');
    }


    private $types = [
        1 => 'create a worker',
        2 => 'create a settler',
        3 => 'create a general',

        11 => 'train a light infantry',
        12 => 'train a heavy infantry, etc...',
        20 => 'moving'
    ];
}
