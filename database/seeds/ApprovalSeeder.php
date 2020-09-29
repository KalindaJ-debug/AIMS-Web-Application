<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApprovalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $province = App\Province::where('name', 'North Western')->first();
        // $district = App\District::where('name', 'Kurunegala')->first();
        // $region = App\Region::where('name', 'Region 1')->first();

        // dd($province->id);
        DB::table('approvals')->insert([
            'farmer_id' => 2,
            'province_id' => 1,
            'district_id' => 3,
            'region_id' => 1,
            'status' => 0
        ]);

        // $province = App\Province::where('name', 'Sabaragamuwa')->first();
        // $district = App\District::where('name', 'Kegalle')->first();
        // $region = App\Region::where('name', 'Region 2')->first();

        DB::table('approvals')->insert([
            'farmer_id' => 3,
            'province_id' => 1,
            'district_id' => 4,
            'region_id' => 2,
            'status' => 0
        ]);
    }
}
