<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FarmerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
	        DB::table('farmers')->insert([
                'firstName' => $faker->firstName,
                'lastName' => $faker->lastName,
                'telephoneNo' => '773734324',
                'nic' => $faker->streetName,
                'nicImage' => $faker->image,
	            'password' => bcrypt('secret'),
	        ]);
	    }
    }
}
