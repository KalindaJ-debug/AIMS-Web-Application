<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Rishikeish',
                'lastname' => 'Nandakumar',
                'username' => 'rishi',
                'email' => 'rishi@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'Admin',
            ],
            [
                'name' => 'Indumini',
                'lastname' => 'Ranasinghe',
                'username' => 'ama',
                'email' => 'indumini.ama@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'FO',
            ],
            [
                'name' => 'Divyargavi',
                'lastname' => 'Gunaseelan',
                'username' => 'ragavi',
                'email' => 'dragavi404@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'AI',
            ]
            
        ]);
    }
}
