<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCultivationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cultivation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('land_id');
            $table->foreign('land_id')->references('id')->on('lands');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('crop_categories');
            $table->unsignedBigInteger('crop_id');
            $table->foreign('crop_id')->references('id')->on('crops');
            $table->unsignedBigInteger('variety_id');
            $table->foreign('variety_id')->references('id')->on('varieties');
            $table->unsignedBigInteger('province_id');
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->unsignedBigInteger('district_id');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->unsignedBigInteger('region_id');
            $table->foreign('region_id')->references('id')->on('regions');
            $table->string('season');
            $table->date('startDate');
            $table->date('endDate');
            $table->integer('harvestedAmount');
            $table->double('cultivatedLand', 17, 10);
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
        Schema::dropIfExists('cultivation');
    }
}
