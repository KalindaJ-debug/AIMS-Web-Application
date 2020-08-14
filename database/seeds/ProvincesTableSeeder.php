<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeder infomariton
        DB::table('provinces')->insert([
            [
                'name' => 'Western '
            ],
            [
                'name' => 'Eastern '
            ],
            [
                'name' => 'Southern '
            ],
            [
                'name' => 'Northern '
            ],
            [
                'name' => 'Central '
            ],
            [
                'name' => 'Uva '
            ],
            [
                'name' => 'Sabaragamuwa '
            ],
            [
                'name' => 'North-Western '
            ],
            [
                'name' => 'North-Central '
            ]
        ]);
    }
}
