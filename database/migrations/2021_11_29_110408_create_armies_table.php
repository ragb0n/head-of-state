<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armies', function (Blueprint $table) {
            $table->id();
            $table->integer('militia_count');
            $table->integer('walkers_count');
            $table->integer('slingers_count');
            $table->integer('archers_count');
            $table->integer('hoplites_count');
            $table->integer('cavalrymen_count');
            $table->integer('chariots_count');
            $table->integer('catapults_count');
            $table->integer('city_id');
            $table->integer('current_field_id');
            $table->integer('path_id')->nullable();
            $table->integer('task_id')->nullable();
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
        Schema::dropIfExists('armies');
    }
}
