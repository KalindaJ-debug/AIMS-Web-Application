<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExternalFactorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('external_factors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('harvest_id');
            $table->foreign('harvest_id')->references('id')->on('harvests');
            $table->string('reason'); 
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
        Schema::dropIfExists('external_factors');
    }
}
