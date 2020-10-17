<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExternalApprovalForiegnKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('external_approvals', function (Blueprint $table) {
            $table->unsignedBigInteger('approval_harvest_id')->nullable();
            $table->unsignedBigInteger('approval_cultivation_id')->nullable();
            $table->foreign('approval_harvest_id')->references('id')->on('approval_harvests');
            $table->foreign('approval_cultivation_id')->references('id')->on('approval_cultivations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('external_approval_foriegn_key');
    }
}
