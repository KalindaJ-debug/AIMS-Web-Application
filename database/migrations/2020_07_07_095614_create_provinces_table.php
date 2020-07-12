<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Artisan::call('db:seed', [
            '--class' => ProvinceSeeder::class
        ]);

        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('province_id');
            $table->timestamps();
            $table->foreign('province_id')->references('id')->on('provinces');
        });

        // Artisan::call('db:seed', [
        //     '--class' => ProvinceSeeder::class
        // ]);

        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('district_id');
            $table->timestamps();
            $table->foreign('district_id')->references('id')->on('districts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions');
        Schema::dropIfExists('districts');
        Schema::dropIfExists('provinces');
    }
}
