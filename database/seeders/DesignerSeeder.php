<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DesignerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run()
    {
        $users = [[
            'full_name' => 'Walid Bel',
            'email' => 'walbel@gmail.com'
        ],[
            'full_name' => 'KARIM',
            'email' => 'karimdz@gmail.com'
        ]];
        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }
    }
}