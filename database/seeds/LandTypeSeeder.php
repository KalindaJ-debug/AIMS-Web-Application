<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('land_type')->insert([
            [
                'name' => 'Reddish Brown Earths'
            ],
            [
                'name' => 'Low Humic Gley'
            ],
            [
                'name' => 'Non-Calcic Brown'
            ],
            [
                'name' => 'Red and Yellow Latasols'
            ],
            [
                'name' => 'Immature Brown Loams'
            ],
            [
                'name' => 'Solodized Solonetz'
            ],
            [
                'name' => 'Grumusols'
            ],
            [
                'name' => 'Red Yellow Podzolic'
            ],
            [
                'name' => 'Reddish Brown Latasol'
            ],
            [
                'name' => 'Alluvials'
            ],
            [
                'name' => 'Regosols'
            ],
            [
                'name' => 'Bog and Half Bog'
            ],
            [
                'name' => 'Lithosols'
            ]
        ]);

    } //end of run 
}
