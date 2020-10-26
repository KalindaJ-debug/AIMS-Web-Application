<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ],
            [ 
                'reason' => 'Land Slides'
            ],
            [ 
                'reason' => 'Insect Infections'
            ],
            [ 
                'reason' => 'Plant Disease'
            ],
            [ 
                'reason' => 'Other'
            ]

        ]);
    }
}
