<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApprovalDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $approval = App\Approval::where('id', 1)->first();
        // $cropCategory = App\CropCategory::where('name', 'Potato')->first();
        // $crop = App\Crop::where('name', 'Paddy')->first();
        // $variety = App\Variety::where('name', 'Potato')->first();
        // $province = App\Province::where('name', 'North Western')->first();
        // $district = App\District::where('name', 'Kurunegala')->first();
        // $region = App\Region::where('name', 'Region 1')->first();

        DB::table('approval_data')->insert([
            'approval_id' => 1,
            'category_id' => 1,
            'crop_id' => 1,
            'variety_id' => 1,
            'province_id' => 1,
            'district_id' => 1,
            'region_id' => 1,
            'cultivatedLand' => 1668.9864,
            'season' => 'Yala',
            'submitedDate' => '2020-04-15',
            'harvestedAmount' => 456
        ]);

        // $approval = App\Approval::where('id', 2)->first();
        // $cropCategory = App\CropCategory::where('name', 'Paddy')->first();
        // $crop = App\Crop::where('name', 'Potato')->first();
        // $variety = App\Variety::where('name', 'Paddy')->first();
        // $province = App\Province::where('name', 'Sabaragamuwa')->first();
        // $district = App\District::where('name', 'Kegalle')->first();
        // $region = App\Region::where('name', 'Region 2')->first();

        DB::table('approval_data')->insert([
            'approval_id' => 2,
            'category_id' => 2,
            'crop_id' => 2,
            'variety_id' => 2,
            'province_id' => 2,
            'district_id' => 2,
            'region_id' => 2,
            'cultivatedLand' => 154.32456,
            'season' => 'Maha',
            'submitedDate' => '2020-06-15',
            'harvestedAmount' => 456
        ]);
    }
}
