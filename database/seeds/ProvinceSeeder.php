<?php

use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([
            'name' => 'Central'
        ]); 

        DB::table('provinces')->insert([
            'name' => 'Eastern'
        ]);

        DB::table('provinces')->insert([
            'name' => 'Northern'
        ]);

        DB::table('provinces')->insert([
            'name' => 'Western'
        ]);

        DB::table('provinces')->insert([
            'name' => 'North Western'
        ]);

        DB::table('provinces')->insert([
            'name' => 'North Central'
        ]);

        DB::table('provinces')->insert([
            'name' => 'Uva'
        ]);

        DB::table('provinces')->insert([
            'name' => 'Sabaragamuwa'
        ]);
    }
}
