<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('farmers')->insert([
            'firstName' => $faker->firstName,
            'otherName' => $faker->firstNameMale,
            'lastName' => $faker->lastName,
            'userName' => $faker->firstName,
            'email' => $faker->email,
            'telephoneNo' => '773734324',
            'nic' => '981610954V',
            'nicImage' => $faker->image,
            'password' => bcrypt('secret'),
        ]);
    }
}
