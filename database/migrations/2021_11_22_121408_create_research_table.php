<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research', function (Blueprint $table) {
            $table->id();
            $table->integer('player');
            $table->integer('chemistry_level');
            $table->integer('forestry_level');
            $table->integer('metallurgy_level');
            $table->integer('logistics_level');
            $table->integer('economics_level');
            $table->integer('spatial_planning_level');
            $table->integer('military_defensive_level');
            $table->integer('military_offensive_level');
            $table->integer('aeronautics_level');
            $table->integer('automotive_level');
            $table->integer('balistics_level');
            $table->integer('intelligence_level');
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
        Schema::dropIfExists('research');
    }
}
