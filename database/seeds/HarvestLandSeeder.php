<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HarvestLandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('harvests_lands')->insert([
            [
                'harvest_id' => 1,
                'land_id' => 1
            ]
        ]);
    }
}
