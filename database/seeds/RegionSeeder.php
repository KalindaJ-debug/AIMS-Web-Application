<?php

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Region Id
        DB::table('regions')->insert([
            [ 
                'name' => 'Region 1',
                'district_id' => '1' //western
            ],
            [
                'name' => 'Region 2',
                'district_id' => '2'
            ],
            [
                'name' => 'Region 3',
                'district_id' => '3'
            ],
            [
                'name' => 'Region 4',
                'district_id' => '4'
            ]
        ]);
    }
}
