<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCropsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crop_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('crops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('type_id');
            $table->timestamps();
            $table->foreign('type_id')->references('id')->on('crop_categories');
        });

        Schema::create('varieties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('crop_id');
            $table->timestamps();
            $table->foreign('crop_id')->references('id')->on('crops');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('varieties');
        Schema::dropIfExists('crops');
        Schema::dropIfExists('crop_categories');
    }
}
