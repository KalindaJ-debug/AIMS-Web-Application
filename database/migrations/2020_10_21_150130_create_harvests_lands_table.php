<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHarvestsLandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harvests_lands', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('harvest_id');
            $table->foreign('harvest_id')->references('id')->on('harvests');
            $table->unsignedBigInteger('land_id');
            $table->foreign('land_id')->references('id')->on('lands');
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
        Schema::dropIfExists('harvests_lands');
    }
}
