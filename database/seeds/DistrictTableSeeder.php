<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //distrcit seeder
        DB::table('districts')->insert([
            [ 
                'name' => 'Colombo',
                'province_id' => '1' //western
            ],
            [
                'name' => 'Gampaha ',
                'province_id' => '1'
            ],
            [
                'name' => 'Kalutara ',
                'province_id' => '1'
            ],
            [
                'name' => 'Trincomalee ',
                'province_id' => '2' //eastern
            ],
            [
                'name' => 'Batticaloa ',
                'province_id' => '2' //eastern
            ],
            [
                'name' => 'Ampara ',
                'province_id' => '2' //eastern
            ],
            [
                'name' => 'Hambantota ',
                'province_id' => '3' //southern
            ],
            [
                'name' => 'Matara ',
                'province_id' => '3' //southern
            ],
            [
                'name' => 'Galle ',
                'province_id' => '3' //southern
            ],
            [
                'name' => 'Jaffna ',
                'province_id' => '4' //nothern
            ],
            [
                'name' => 'Kilinochchi ',
                'province_id' => '4' //nothern
            ],
            [
                'name' => 'Mannar ',
                'province_id' => '4' //nothern
            ],
            [
                'name' => 'Mullaitivu ',
                'province_id' => '4' //nothern
            ],
            [
                'name' => 'Vavuniya ',
                'province_id' => '4' //nothern
            ],
            [
                'name' => 'Matale ',
                'province_id' => '5' //central
            ],
            [
                'name' => 'Kandy ',
                'province_id' => '5' //central
            ],
            [
                'name' => 'Nuwara Eliya ',
                'province_id' => '5' //central
            ],
            [
                'name' => 'Badulla ',
                'province_id' => '6' //uva
            ],
            [
                'name' => 'Monaragala ',
                'province_id' => '6' //uva
            ],
            [
                'name' => 'Kegalle ',
                'province_id' => '7' //sabaragamuwa
            ],
            [
                'name' => 'Ratnapura ',
                'province_id' => '7' //sabaragamuwa
            ],
            [
                'name' => 'Puttalam ',
                'province_id' => '8' //north-western
            ],
            [
                'name' => 'Kurunegala ',
                'province_id' => '8' //north-western
            ],
            [
                'name' => 'Anuradhapura ',
                'province_id' => '9' //north-central
            ],
            [
                'name' => 'Polonnaruwa ',
                'province_id' => '9' //north-central
            ]
        ]);
    }
}
