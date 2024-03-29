<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run()
    {
        
        DB::table('users')->insert([
            'name' => 'admin name',
            'email' => 'admin@mail.com',
            'password' => Hash::make('pass'),
        ]);
       }
}