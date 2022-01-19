<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Building;
use App\Models\Research;
use App\Models\Unit;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Path;
use App\Models\Ranking;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TaskController extends Controller
{
    public static function createTask($owner, $type, $time)
    {
        switch (get_class($owner)) {
            case 'App\Models\User':
                $task = Task::create([
                    'type' => $type,
                    'player_id' => Auth::user()->id,
                    'city_id' => Auth::user()->id,
                    'finished_at' => $time,
                    'user_id' => $owner->id
                ]);
                break;
            case 'App\Models\Building':
                $task = Task::create([
                    'type' => $type,
                    'player_id' => Auth::user()->id,
                    'city_id' => Auth::user()->id,
                    'finished_at' => $time,
                    'building_id' => $owner->id
                ]);
                break;
            case 'App\Models\Unit':
                $task = Task::create([
                    'type' => $type,
                    'player_id' => Auth::user()->id,
                    'city_id' => Auth::user()->id,
                    'finished_at' => $time,
                    'unit_id' => $owner->id
                ]);
                break;
            case 'App\Models\Research':
                $task = Task::create([
                    'type' => $type,
                    'player_id' => Auth::user()->id,
                    'city_id' => Auth::user()->id,
                    'finished_at' => $time,
                    'research_id' => $owner->id
                ]);
                break;
        }
        $task->save();
        return $task;

    }

    public static function checkTasks()
    {
        $finished_tasks = Task::where('finished_at', '<=', Carbon::now())
            ->orderBy('finished_at', 'asc')
            ->get();
        $finished_tasks->each(function ($task) {
            self::finishTask($task);
        });
    }

    public static function finishTask(Task $task)
    {
        switch ($task->type) {
            case 1: // Rozbuduj budynek
                $building_id = $task->building_id;
                $building = Building::where('id', $building_id)->first();

                $points = Ranking::$building_points[$building->type];
                $points *= $building->level;

                $building->level++;
                $building->save();

                $task->delete();

                $ranking = Ranking::where('player_id', Auth::id())->first();
                $ranking->score += $points;
                $ranking->save();

                break;
            case 2: // Przeprowadź badanie
                $research_id = $task->research_id;
                $research = Research::where('id', $research_id)->first();
                
                $points = Ranking::$research_points[$research->type];
                $points *= $research->level;

                $research->level++;
                $research->save();
                
                $task->delete();

                $ranking = Ranking::where('player_id', Auth::id())->first();
                $ranking->score + $points;
                $ranking->save();

                break;
            case 3: // Zrekrutuj jednostkę
                $unit_id = $task->unit_id;
                $unit = Unit::where('id', $unit_id)->first();
                $count = $task->value;
                $unit->count + $count ;

                $unit->save();
                $task->delete();

                break;
        }
    }
}
