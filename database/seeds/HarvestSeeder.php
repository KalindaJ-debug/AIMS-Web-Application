<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class HarvestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('harvests')->insert([
            [
                'cultivation_id' => '1',
                'land_id' => '1',
                'external_id' => '1',
                'category_id' => '1',
                'crop_id' => '1',
                'variety_id' => '1',
                'province_id' => '1',
                'district_id' => '1',
                'region_id' => '1',
                'season' => 'Maha',
                'endDate' => null,
                'harvestedAmount' => '44',
                'cultivatedLand' => '30.33',

            ]
        ]);
    }
}
