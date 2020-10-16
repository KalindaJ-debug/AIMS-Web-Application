<?php

use Illuminate\Database\Seeder;

class CultivationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cultivation')->insert([
            [ 
                'land_id' => '1',
                'category_id' => '1',
                'crop_id' => '3',
                'variety_id' => '4',
                'province_id' => '2',
                'district_id' => '4',
                'region_id' => '2',
                'season' => 'Maha',
                'startDate' => '2020-10-07',
                'endDate' => '2020-11-08',
                'harvestedAmount' => 543,
                'cultivatedLand' => 76,
            ]
        ]);
    }
}
