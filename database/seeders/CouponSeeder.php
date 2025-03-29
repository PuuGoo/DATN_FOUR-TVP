<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('coupons')->insert([
            [

                'id' => 1,
            
                'coupon_name' => 'maone',
            
                'coupon_discount' => 2,
            
                'coupon_validity' => '2025-04-16',
            
                'status' => 1,
            
                'created_at' => '2025-03-28 12:25:05',
            
                'updated_at' => '2025-03-28 12:25:05',
            
            ],
            
            [
            
                'id' => 2,
            
                'coupon_name' => 'matwo',
            
                'coupon_discount' => 5,
            
                'coupon_validity' => '2025-04-24',
            
                'status' => 1,
            
                'created_at' => '2025-03-28 12:25:30',
            
                'updated_at' => '2025-03-28 12:25:30',
            
            ],
            
            [
            
                'id' => 3,
            
                'coupon_name' => 'mathree',
            
                'coupon_discount' => 7,
            
                'coupon_validity' => '2025-04-21',
            
                'status' => 1,
            
                'created_at' => '2025-03-28 12:25:49',
            
                'updated_at' => '2025-03-28 12:25:49',
            
            ],
            
            [
            
                'id' => 4,
            
                'coupon_name' => 'mafour',
            
                'coupon_discount' => 10,
            
                'coupon_validity' => '2025-05-20',
            
                'status' => 1,
            
                'created_at' => '2025-03-28 12:26:13',
            
                'updated_at' => '2025-03-28 12:26:13',
            
            ],
        ]);
    }
}