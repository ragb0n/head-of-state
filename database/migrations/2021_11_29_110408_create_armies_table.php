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
            $table->integer('unit_1');
            $table->integer('unit_2');
            $table->integer('unit_3');
            $table->integer('unit_4');
            $table->integer('unit_5');
            $table->integer('unit_6');
            $table->integer('unit_7');
            $table->integer('unit_8');
            $table->integer('unit_9');
            $table->integer('unit_10');
            $table->integer('unit_11');
            $table->integer('unit_12');
            $table->integer('unit_13');
            $table->integer('user_id');
            $table->integer('current_field_id');
            $table->integer('path_id');
            $table->integer('task_id');
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
