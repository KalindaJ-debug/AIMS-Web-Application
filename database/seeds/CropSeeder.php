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
        //seed crop categories

        DB::table('crop_categories')->insert([
            [
                'name' => 'Vegetables',
            ],
            [
                'name' => 'Fruits',
            ],
            [
                'name' => 'Leafy Vegetables',
            ],
            [
                'name' => 'Roots and Tubes',
            ],
            [
                'name' => 'Paddy',
            ],
            [
                'name' => 'Other Field Crops',
            ]
        ]);

        //seed crops

            //vegetables
        $cropCategory = App\CropCategory::where('name', 'Vegetables')->first();

        DB::table('crops')->insert([
            [
                'name' => 'Brinjol',
                'type_id' => $cropCategory->id
            ],
            [
                'name' => 'Capsicum',
                'type_id' => $cropCategory->id
            ],
            [
                'name' => 'Tomato',
                'type_id' => $cropCategory->id
            ],
            [
                'name' => 'Snake Gourd',
                'type_id' => $cropCategory->id
            ]
        ]);

            //fruits
        
        $cropCategory = App\CropCategory::where('name', 'Fruits')->first();

        DB::table('crops')->insert([
            [
                'name' => 'Mango',
                'type_id' => $cropCategory->id
            ],
            [
                'name' => 'Pineapple',
                'type_id' => $cropCategory->id
            ],
            [
                'name' => 'Apple',
                'type_id' => $cropCategory->id
            ]
        ]);

        //roots and tubers
        $cropCategory = App\CropCategory::where('name', 'Roots and Tubes')->first();

        DB::table('crops')->insert([
            [
                'name' => 'Potato',
                'type_id' => $cropCategory->id
            ],
            [
                'name' => 'Sweet Potato',
                'type_id' => $cropCategory->id
            ],
            [
                'name' => 'Turmeric',
                'type_id' => $cropCategory->id
            ]
        ]);

        //ofc
        $cropCategory = App\CropCategory::where('name', 'Other Field Crops')->first();

        DB::table('crops')->insert([
            [
                'name' => 'Cow Pea',
                'type_id' => $cropCategory->id
            ],
            [
                'name' => 'Green Gram',
                'type_id' => $cropCategory->id
            ]
        ]);

        //leafy vegetables
        $cropCategory = App\CropCategory::where('name', 'Leafy Vegetables')->first();

        DB::table('crops')->insert([
            [
                'name' => 'Spinach',
                'type_id' => $cropCategory->id
            ],
            [
                'name' => 'Lettuce',
                'type_id' => $cropCategory->id
            ]
        ]);

        //seed crop varieties

        //brinjol
        $crop = App\Crop::where('name', 'Brinjol')->first();

        DB::table('varieties')->insert([
            [
                'name' => 'Anjalee',
                'crop_id' => $crop->id
            ],
            [
                'name' => 'Amanda',
                'crop_id' => $crop->id
            ],
            [
                'name' => 'SM-64',
                'crop_id' => $crop->id
            ]
        ]);

        //tomato
        $crop = App\Crop::where('name', 'Tomato')->first();

        DB::table('varieties')->insert([
            [
                'name' => 'T-146',
                'crop_id' => $crop->id
            ],
            [
                'name' => 'Maheshi',
                'crop_id' => $crop->id
            ]
        ]);

        //snakegourd
        $crop = App\Crop::where('name', 'Capsicum')->first();

        DB::table('varieties')->insert([
            [
                'name' => 'Hungarian Yellow Wax',
                'crop_id' => $crop->id
            ],
            [
                'name' => 'CA-8',
                'crop_id' => $crop->id
            ]
        ]);

        //capsicum
        $crop = App\Crop::where('name', 'Snake Gourd')->first();

        DB::table('varieties')->insert([
            [
                'name' => 'TA-2',
                'crop_id' => $crop->id
            ],
            [
                'name' => 'M1-Short',
                'crop_id' => $crop->id
            ]
        ]);

        //apple
        $crop = App\Crop::where('name', 'Apple')->first();

        DB::table('varieties')->insert([
            [
                'name' => 'ANK-1',
                'crop_id' => $crop->id
            ],
            [
                'name' => 'ANK-2',
                'crop_id' => $crop->id
            ]
        ]);

        //mango
        $crop = App\Crop::where('name', 'Mango')->first();

        DB::table('varieties')->insert([
            [
                'name' => 'Willard',
                'crop_id' => $crop->id
            ],
            [
                'name' => 'Karutha Colomban',
                'crop_id' => $crop->id
            ]
        ]);

        //pineapple
        $crop = App\Crop::where('name', 'Pineapple')->first();

        DB::table('varieties')->insert([
            [
                'name' => 'Cayenne',
                'crop_id' => $crop->id
            ],
            [
                'name' => 'Queen',
                'crop_id' => $crop->id
            ]
        ]);

        //cow pea
        $crop = App\Crop::where('name', 'Cow Pea')->first();

        DB::table('varieties')->insert([
            [
                'name' => 'M1-35',
                'crop_id' => $crop->id
            ],
            [
                'name' => 'Maize-Bombay',
                'crop_id' => $crop->id
            ]
        ]);

        //green gram
        $crop = App\Crop::where('name', 'Green Gram')->first();

        DB::table('varieties')->insert([
            [
                'name' => 'M1-1',
                'crop_id' => $crop->id
            ],
            [
                'name' => 'Harsha',
                'crop_id' => $crop->id
            ]
        ]);

        //spinach
        $crop = App\Crop::where('name', 'Spinach')->first();

        DB::table('varieties')->insert([
            [
                'name' => 'Malebra Spinach',
                'crop_id' => $crop->id
            ]
        ]);

        //lettuce
        $crop = App\Crop::where('name', 'Lettuce')->first();

        DB::table('varieties')->insert([
            [
                'name' => 'Red Oak Leaf',
                'crop_id' => $crop->id
            ],
            [
                'name' => 'Blonde Oak Leaf',
                'crop_id' => $crop->id
            ],
            [
                'name' => 'Red Butterhead Leaf',
                'crop_id' => $crop->id
            ],
            [
                'name' => 'Little Gem Leaf',
                'crop_id' => $crop->id
            ]
        ]);

        //potato
        $crop = App\Crop::where('name', 'Potato')->first();

        DB::table('varieties')->insert([
            [
                'name' => 'Hillstar',
                'crop_id' => $crop->id
            ],
            [
                'name' => 'Granola',
                'crop_id' => $crop->id
            ],
            [
                'name' => 'Sita',
                'crop_id' => $crop->id
            ],
            [
                'name' => 'Krushi',
                'crop_id' => $crop->id
            ]
        ]);

        //sweet potato
        $crop = App\Crop::where('name', 'Sweet Potato')->first();

        DB::table('varieties')->insert([
            [
                'name' => 'CARI-9',
                'crop_id' => $crop->id
            ],
            [
                'name' => 'Wariyapola-white',
                'crop_id' => $crop->id
            ],
            [
                'name' => 'Ranabima',
                'crop_id' => $crop->id
            ],
            [
                'name' => 'BW-21',
                'crop_id' => $crop->id
            ]
        ]);

        //turmeric
        $crop = App\Crop::where('name', 'Turmeric')->first();

        DB::table('varieties')->insert([
            [
                'name' => 'Gunter',
                'crop_id' => $crop->id
            ],
            [
                'name' => 'Puna',
                'crop_id' => $crop->id
            ],
            [
                'name' => 'Madurasi Majal',
                'crop_id' => $crop->id
            ]
        ]);
    }
}
