<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Rishikeish',
            'lastname' => 'Nandakumar',
            'username' => 'rishi',
            'email' => 'rishi@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'Admin',
            
        ]);
    }
}
