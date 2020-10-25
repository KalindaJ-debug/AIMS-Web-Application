<?php

use Illuminate\Database\Seeder;

class ExternalFactorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('external_factors')->insert([
            [ 
                'reason' => 'Rainfall'
            ]
        ]);
    }
}
