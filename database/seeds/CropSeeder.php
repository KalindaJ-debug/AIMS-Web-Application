<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CropSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crop_categories')->insert([
            'name' => 'Potato'
        ]);

        DB::table('crop_categories')->insert([
            'name' => 'Paddy'
        ]);

        $cropCategory = App\CropCategory::where('name', 'Potato')->first();

        DB::table('crops')->insert([
            'name' => 'Potato',
            'type_id' => $cropCategory->id
        ]);

        $cropCategory = App\CropCategory::where('name', 'Paddy')->first();

        DB::table('crops')->insert([
            'name' => 'Paddy',
            'type_id' => $cropCategory->id
        ]);

        $crop = App\Crop::where('name', 'Paddy')->first();

        DB::table('varieties')->insert([
            'name' => 'Potato',
            'crop_id' => $crop->id
        ]);

        $crop = App\Crop::where('name', 'Potato')->first();

        DB::table('varieties')->insert([
            'name' => 'Paddy',
            'crop_id' => $crop->id
        ]);
    }
}
