<?php

namespace Database\Seeders;

use App\Models\Designer;
use Carbon\Carbon;
use Faker\Provider\Lorem;
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
        $users = [
        [
            'name' => 'Abdelkarim Oucif',
            'email' => 'oucifkarimo17@gmail.com',
            'descreption' => 'A computer sciense student , curerently I am completing my Master Degree.. so nothing yet.',
            'picture' => 'painters/karim.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
            [
            'name' => 'Walid Belaabed',
            'email' => 'walbel@gmail.com',
            'descreption' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard'",
            'picture' => 'painters/karim.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
        'name' => 'Painter Name',
        'email' => 'painter@mail.com',
        'descreption' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard'",
        'picture' => 'painters/karim.jpg',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ],
        ];
      
        foreach ($users as $user) {
            DB::table('designer')->insert($user);
        } 
    }
}