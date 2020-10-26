<?php

use Illuminate\Database\Seeder;

class ApprovalCultivationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('approval_cultivations')->insert([
            [ 
                'land_id' => '1',
                'variety_id' => '4',
                'season' => 'Maha',
                'startDate' => '2020-10-07',
                'endDate' => '2020-11-08',
                'harvestedAmount' => 543,
                'cultivatedLand' => 76,
                'status' => 0
            ]
        ]);
    }
}
