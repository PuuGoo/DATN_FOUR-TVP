<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('site_settings')->insert([
            [

                'id' => 1,
            
                'logo' => 'default_logo.png',
            
                'support_phone' => '1111111111',
            
                'phone_one' => '0987654321',
            
                'email' => 'new@example.com',
            
                'company_address' => '123 Street Name',
            
                'facebook' => 'https://facebook.com/example',
            
                'zalo' => 'https://zalo.me/example',
            
                'youtube' => 'https://youtube.com/example',
            
                'copyright' => 'Copyright © 2025',
            
                'created_at' => '2025-03-28 14:27:56',
            
                'updated_at' => '2025-03-28 14:27:56',
            
            ],
        ]);
    }
}