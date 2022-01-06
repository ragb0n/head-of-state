<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Path;
use App\Models\Task;
use Carbon\Carbon;

class TaskController extends Controller
{
    public static function createTask($owner, $type, $time)
    {
        $task = Task::create([
            'type' => $type,
            'finished_at' => Carbon::now()->addSeconds($time)
        ]);

        switch (get_class($owner)) {
            case 'App\Models\User':
                $task->user_id = $owner->id;
                break;
            case 'App\Building':
                $task->building_id = $owner->id;
                break;
            case 'App\Army':
                $task->army_id = $owner->id;
                break;
        }

        $task->save();

        return $task;

    }

    public static function checkTasks()
    {
        $finished_tasks = Task::where('finished_at', '<=', Carbon::now())
            ->orWhere('type', 20)
            ->orderBy('finished_at', 'asc')
            ->get();
        $finished_tasks->each(function ($task) {
            self::finishTask($task);
        });
    }

    public static function finishTask(Task $task)
    {
        switch ($task->type) {
            case 1: // create worker
                $task->building->city->human_resources->workers += 1;
                $task->building->city->human_resources->save();
                $task->delete();
                break;

            case 2: // create settler
                $task->building->city->human_resources->settlers += 1;
                $task->building->city->human_resources->save();
                $task->delete();
                break;

            case 3: // create a general
                if ($task->building->city->hex->army_id == 0) {
                    $army = Army::create([
                        'user_id' => $task->building->city->owner,
                        'current_hex_id' => $task->building->city->hex->id
                    ]);
                    $task->building->city->hex->army_id = $army->id;
                    $task->building->city->hex->save();
                }

                if($task->building->city->hex->army->general){
                    break;
                }

                $task->building->city->hex->army->update(['general' => true]);
                $task->delete();
                break;

            case 11: // create unit
            case 12:
            case 13:
            case 14:
            case 15:
            case 16:
            case 17:
            if ($task->building->city->hex->army_id == 0) {
                $army = Army::create([
                    'user_id' => $task->building->city->owner,
                    'current_hex_id' => $task->building->city->hex->id
                ]);
                $task->building->city->hex->army_id = $army->id;
                $task->building->city->hex->save();
            }

            $unit_type = 'unit' . ($task->type - 10);

                $task->building->city->hex->army->$unit_type += 1;
                $task->building->city->hex->army->save();
                $task->delete();
                break;

            case 20: // move army
                ArmyController::pathProgress($task);

                break;

        }
    }

    public static function undoTask(Task $task)
    {
        switch ($task->type) {
            case 1: // create worker
                $task->building->city->resources->add(HumanResource::$worker_price[$task->building->city->nation]);
                $task->building->city->human_resources->population += 1;
                $task->building->city->resources->save();
                $task->building->city->human_resources->save();

                break;
            case 2: // create settler
                $task->building->city->resources->add(HumanResource::$settler_price[$task->building->city->nation]);
                $task->building->city->human_resources->workers += 5;
                $task->building->city->resources->save();
                $task->building->city->human_resources->save();

                break;
            case 11: // create unit
            case 12:
            case 13:
            case 14:
            case 15:
            case 16:
            case 17:
                $task->building->city->resources->add(HumanResource::$worker_price[$task->building->city->nation]);
            $task->building->city->human_resources->population += 1;
                $task->building->city->resources->save();
            $task->building->city->human_resources->save();

            break;
        }
    }

    
}
