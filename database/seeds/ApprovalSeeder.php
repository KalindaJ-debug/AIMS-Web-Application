<?php

use Illuminate\Database\Seeder;

class ApprovalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $province = App\Province::where('name', 'North Western')->first();
        $district = App\District::where('name', 'Kurunegala')->first();
        $region = App\Region::where('name', 'Region 1')->first();

        DB::table('approvals')->insert([
            'farmer_id' => 5,
            'province_id' => $province->id,
            'district_id' => $district->id,
            'region_id' => $region->id,
            'status' => 0
        ]);

        $province = App\Province::where('name', 'Sabaragamuwa')->first();
        $district = App\District::where('name', 'Kegalle')->first();
        $region = App\Region::where('name', 'Region 2')->first();

        DB::table('approvals')->insert([
            'farmer_id' => 8,
            'province_id' => $province->id,
            'district_id' => $district->id,
            'region_id' => $region->id,
            'status' => 1
        ]);
    }
}
