<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('banners')->insert([
            [
                'id' => 1, 
                'created_at' => '2025-03-28 12:03:35', 
                'updated_at' => '2025-03-28 12:03:35', 
                'banner_title' => 'fruit_1', 
                'banner_url' => 'fruit-1', 
                'banner_image' => '1743188615_sli1.png'
            ],
            [
                'id' => 2, 
                'created_at' => '2025-03-28 12:04:09', 
                'updated_at' => '2025-03-28 12:04:09', 
                'banner_title' => 'fruit_2', 
                'banner_url' => 'fruit-2', 
                'banner_image' => '1743188649_sli2.png'
            ]
        ]);
    }
}