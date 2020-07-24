<?php

use Illuminate\Database\Seeder;

class ApprovalDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $approval = App\Approval::where('id', 1)->first();
        $cropCategory = App\CropCategory::where('name', 'Potato')->first();
        $crop = App\Crop::where('name', 'Paddy')->first();
        $variety = App\Variety::where('name', 'Potato')->first();
        $province = App\Province::where('name', 'North Western')->first();
        $district = App\District::where('name', 'Kurunegala')->first();
        $region = App\Region::where('name', 'Region 1')->first();

        DB::table('approval_data')->insert([
            'approval_id' => $approval->id,
            'category_id' => $cropCategory->id,
            'crop_id' => $crop->id,
            'variety_id' => $variety->id,
            'province_id' => $province->id,
            'district_id' => $district->id,
            'region_id' => $region->id,
            'cultivatedLand' => 1668.9864
        ]);

        $approval = App\Approval::where('id', 2)->first();
        $cropCategory = App\CropCategory::where('name', 'Paddy')->first();
        $crop = App\Crop::where('name', 'Potato')->first();
        $variety = App\Variety::where('name', 'Paddy')->first();
        $province = App\Province::where('name', 'Sabaragamuwa')->first();
        $district = App\District::where('name', 'Kegalle')->first();
        $region = App\Region::where('name', 'Region 2')->first();

        DB::table('approval_data')->insert([
            'approval_id' => $approval->id,
            'category_id' => $cropCategory->id,
            'crop_id' => $crop->id,
            'variety_id' => $variety->id,
            'province_id' => $province->id,
            'district_id' => $district->id,
            'region_id' => $region->id,
            'cultivatedLand' => 154.32456
        ]);
    }
}
