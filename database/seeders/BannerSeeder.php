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
                'banner_title' => 'Banner 1',
                'banner_url' => 'https://example.com/banner1',
                'banner_image' => 'https://png.pngtree.com/thumb_back/fw800/background/20230617/pngtree-fruits-and-vegetables-image_2974971.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'banner_title' => 'Banner 2',
                'banner_url' => 'https://example.com/banner2',
                'banner_image' => 'https://png.pngtree.com/thumb_back/fw800/background/20230617/pngtree-fruits-and-vegetables-image_2974971.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'banner_title' => 'Banner 3',
                'banner_url' => 'https://example.com/banner3',
                'banner_image' => 'https://png.pngtree.com/thumb_back/fw800/background/20230617/pngtree-fruits-and-vegetables-image_2974971.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}