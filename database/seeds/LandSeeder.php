<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class LandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //Region Id
    public function run() {
        $faker = Faker::create();
        DB::table('lands')->insert([
            [ 
                'farmer_id' => '1',
                'addressNo' => $faker->buildingNumber,
                'streetName' => $faker->streetName,
                'laneName' => $faker->streetName,
                'town' => $faker->state,
                'land_type_id' => '1',
                'province_id' => '1',
                'district_id' => '1',
                'region_id' => '1',
                'landExtend' => $faker->randomDigit,
            ]
        ]);
    }
}
