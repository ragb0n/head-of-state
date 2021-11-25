<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;

class ResourceController extends Controller
{
    public static function index(){
        $resources = Resource::where('id', '2')->get();

        return [$resources];
    }
    
}
