<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();
            $table->integer('player');
            $table->integer('steelworks_level');
            $table->integer('steel_storage_level');
            $table->integer('sawmill_level');
            $table->integer('wood_storage_level');
            $table->integer('refinery_level');
            $table->integer('oil_storage_level');
            $table->integer('residential_level');
            $table->integer('bank_level');
            $table->integer('garrison_level');
            $table->integer('laboratory_level');
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
        Schema::dropIfExists('buildings');
    }
}
