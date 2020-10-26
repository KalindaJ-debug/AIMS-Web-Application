<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProvincesTableSeeder::class, 
            CropSeeder::class, 
            DistrictTableSeeder::class, 
            UserSeeder::class, 
            RegionSeeder::class, 
            FarmerSeeder::class, 
            LandTypeSeeder::class, 
            LandSeeder::class,
            CultivationSeeder::class,
            ApprovalHarvestSeeder::class,
            ApprovalCultivationSeeder::class,
            HarvestSeeder::class,
            HarvestLandSeeder::class,
            ExternalFactorsSeeder::class
        ]);
        //$this->call(ProvincesTableSeeder::class);
    }
}
