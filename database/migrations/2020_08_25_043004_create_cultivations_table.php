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
            $table->string('name'); 
            $table->string('variety');
            $table->string('region');
            $table->string('district');
            $table->string('hect');
            $table->string('seasson');
            $table->string('province');
            $table->string('amount');
            $table->date('sDate');
            $table->date('eDate');
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
