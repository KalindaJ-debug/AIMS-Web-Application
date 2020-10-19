<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovalHarvestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approval_harvests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cultivation_id');
            $table->unsignedBigInteger('land_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('crop_id');
            $table->unsignedBigInteger('variety_id');
            $table->string('season');
            $table->date('endDate');
            $table->integer('harvestedAmount');
            $table->double('cultivatedLand', 17, 10);
            $table->integer('status');
            $table->unsignedBigInteger('external_id')->nullable();
            $table->timestamps();

            $table->foreign('cultivation_id')->references('id')->on('cultivation');
            $table->foreign('land_id')->references('id')->on('lands');
            $table->foreign('category_id')->references('id')->on('crop_categories');
            $table->foreign('crop_id')->references('id')->on('crops');
            $table->foreign('variety_id')->references('id')->on('varieties');
            $table->foreign('external_id')->references('id')->on('external_approvals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('approval_harvests');
    }
}
