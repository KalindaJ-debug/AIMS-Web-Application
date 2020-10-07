<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHarvestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harvests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cultivation_id');
            $table->foreign('cultivation_id')->references('id')->on('cultivation');
            $table->string('season')->nullable();
            $table->date('endDate');
            $table->integer('harvestedAmount');
            $table->double('harvestedLand', 17, 10);
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
        Schema::dropIfExists('harvests');
    }
}
