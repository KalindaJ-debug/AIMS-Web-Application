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

        $province = App\Province::where('name', 'North Western')->first();

        DB::table('districts')->insert([
            'name' => 'Kurunegala',
            'province_id' => $province->id
        ]);

        $province = App\Province::where('name', 'Sabaragamuwa')->first();

        DB::table('districts')->insert([
            'name' => 'Kegalle',
            'province_id' => $province->id
        ]);

        $district = App\District::where('name', 'Kurunegala')->first();

        DB::table('regions')->insert([
            'name' => 'Region 1',
            'district_id' => $district->id
        ]);

        $district = App\District::where('name', 'Kegalle')->first();

        DB::table('regions')->insert([
            'name' => 'Region 2',
            'district_id' => $district->id
        ]);
    }
}
