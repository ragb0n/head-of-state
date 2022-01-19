<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ranking;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{
    public function index(){
        TaskController::checkTasks();

        $rankings = DB::table('ranking')
        ->join('users', 'users.id', '=', 'ranking.player_id')
        ->join('cities', 'cities.player_id', '=', 'users.id')
        ->orderBy('score', 'DESC')
        ->get();

            return view('ranking', [
                'rankings' => $rankings
            ]);
    }
}
