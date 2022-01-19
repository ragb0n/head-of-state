<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->integer('player_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('building_id')->nullable();
            $table->integer('army_id')->nullable();
            $table->integer('research_id')->nullable();
            $table->integer('path_id')->nullable();
            $table->integer('value')->nullable();
            $table->timestamp('finished_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
