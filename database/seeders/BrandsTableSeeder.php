<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            [

                'id' => 1,
            
                'brand_name' => 'phome',
            
                'brand_slug' => 'phome',
            
                'brand_image' => 'upload/brand/FHWGkQyBRCUXkXtK9gKEgT8DC6TqM7.jpg',
            
                'created_at' => '2025-03-28 11:01:09',
            
                'updated_at' => '2025-03-28 11:01:09',
            
            ],
            
            [
            
                'id' => 2,
            
                'brand_name' => 'kquat',
            
                'brand_slug' => 'kquat',
            
                'brand_image' => 'upload/brand/J1bMCQHs8IxDPJ4t8AZ8If22NsQmMI.jpg',
            
                'created_at' => '2025-03-28 11:01:31',
            
                'updated_at' => '2025-03-28 11:01:31',
            
            ],
            
            [
            
                'id' => 3,
            
                'brand_name' => 'leafqui',
            
                'brand_slug' => 'leafqui',
            
                'brand_image' => 'upload/brand/2JQaBuY3OXikXuFTjDkOLz1WVFccRZ.jpg',
            
                'created_at' => '2025-03-28 11:01:46',
            
                'updated_at' => '2025-03-28 11:01:46',
            
            ],
            
            [
            
                'id' => 4,
            
                'brand_name' => 'versace',
            
                'brand_slug' => 'versace',
            
                'brand_image' => 'upload/brand/Dq0PmTX2tCxparlloUnrffzO0kwyNB.webp',
            
                'created_at' => '2025-03-28 11:04:46',
            
                'updated_at' => '2025-03-28 11:04:46',
            
            ],
            
            [
            
                'id' => 5,
            
                'brand_name' => 'fashion',
            
                'brand_slug' => 'fashion',
            
                'brand_image' => 'upload/brand/tz4jleObB625kFslrlvU6S3cntoEyw.jpg',
            
                'created_at' => '2025-03-28 11:05:01',
            
                'updated_at' => '2025-03-28 11:05:01',
            
            ],
            
            [
            
                'id' => 6,
            
                'brand_name' => 'minhaus',
            
                'brand_slug' => 'minhaus',
            
                'brand_image' => 'upload/brand/t96tA4Eo6TUwQmGZrz4Ogy7sZhAPXt.png',
            
                'created_at' => '2025-03-28 11:05:18',
            
                'updated_at' => '2025-03-28 11:05:18',
            
            ],
            
            [
            
                'id' => 7,
            
                'brand_name' => 'hana',
            
                'brand_slug' => 'hana',
            
                'brand_image' => 'upload/brand/UjO7sa5117Db24M422nGPywppy5Jq0.jpg',
            
                'created_at' => '2025-03-28 11:05:34',
            
                'updated_at' => '2025-03-28 11:05:34',
            
            ],
            
            [
            
                'id' => 8,
            
                'brand_name' => 'repair',
            
                'brand_slug' => 'repair',
            
                'brand_image' => 'upload/brand/a4qgdrGXBjoxPAJDsOaZkRLvsrmxF5.png',
            
                'created_at' => '2025-03-28 11:05:51',
            
                'updated_at' => '2025-03-28 11:05:51',
            
            ],
            
            [
            
                'id' => 9,
            
                'brand_name' => 'beeque',
            
                'brand_slug' => 'beeque',
            
                'brand_image' => 'upload/brand/wgxI5bkp2ArPcSkGe0wtookeYJwgBI.jpg',
            
                'created_at' => '2025-03-28 11:06:12',
            
                'updated_at' => '2025-03-28 11:06:12',
            
            ],
        ]);
    }
}
