<?php

use Illuminate\Database\Seeder;

class ApprovalHarvestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('approval_harvests')->insert([
            [ 
                'cultivation_id' => '1',
                'land_id' => '1',
                'category_id' => '1',
                'crop_id' => '3',
                'variety_id' => '4',
                'season' => 'Maha',
                'endDate' => '2020-12-08',
                'harvestedAmount' => 543,
                'cultivatedLand' => 76,
                'status' => 0
            ]
        ]);
    }
}
