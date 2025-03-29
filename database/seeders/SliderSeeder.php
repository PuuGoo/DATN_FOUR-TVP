<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('site_settings')->insert([
            [

                'id' => 1,
            
                'title' => 'Clothes Green',
            
                'short_title' => 'clothes_1',
            
                'image' => 'upload/slider/TncDpjl75xoS2qZTl7c2ZWkfaE1yJn.png',
            
                'created_at' => '2025-03-28 12:05:57',
            
                'updated_at' => '2025-03-28 12:16:12',
            
            ],
            
            [
            
                'id' => 2,
            
                'title' => 'Clothes Yellow',
            
                'short_title' => 'clothes_2',
            
                'image' => 'upload/slider/zwK77fknaeaBlG67A4nqh8IruVR7BM.png',
            
                'created_at' => '2025-03-28 12:06:26',
            
                'updated_at' => '2025-03-28 12:16:25',
            
            ],
            
            [
            
                'id' => 3,
            
                'title' => 'Electronics',
            
                'short_title' => 'electronics_1',
            
                'image' => 'upload/slider/prlxdc60VCzDKfC8YQcv0FCUKuddYV.png',
            
                'created_at' => '2025-03-28 12:15:20',
            
                'updated_at' => '2025-03-28 12:15:20',
            
            ],
        ]);
    }
}
