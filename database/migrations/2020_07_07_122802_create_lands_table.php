<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lands', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('farmer_id');
            $table->string('addressNo');
            $table->string('streetName');
            $table->string('laneName');
            $table->string('town');
            $table->unsignedBigInteger('land_type_id');
            $table->unsignedBigInteger('region_id');
            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('district_id');
            $table->integer('postalCode')->nullable();
            $table->integer('planningNumber')->nullable();
            $table->string('landRegistration')->nullable();
            $table->bigInteger('landExtend');
            $table->timestamps();
            $table->foreign('farmer_id')->references('id')->on('farmers');
            $table->foreign('land_type_id')->references('id')->on('land_type');
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('region_id')->references('id')->on('regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lands');
    }
}
