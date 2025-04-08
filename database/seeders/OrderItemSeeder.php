<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_items')->insert([
            [

                'id' => 4,
            
                'order_id' => 4,
            
                'infor_option_id' => 2,
            
                'product_id' => 1,
            
                'qty' => 1,
            
                'price' => 80,
            
                'created_at' => '2025-03-28 18:58:31',
            
                'updated_at' => '2025-03-28 18:58:31',
            
            ],
            
            [
            
                'id' => 5,
            
                'order_id' => 4,
            
                'infor_option_id' => 8,
            
                'product_id' => 2,
            
                'qty' => 1,
            
                'price' => 75,
            
                'created_at' => '2025-03-28 18:58:31',
            
                'updated_at' => '2025-03-28 18:58:31',
            
            ],
            
            [
            
                'id' => 6,
            
                'order_id' => 4,
            
                'infor_option_id' => 22,
            
                'product_id' => 4,
            
                'qty' => 2,
            
                'price' => 11,
            
                'created_at' => '2025-03-28 18:58:31',
            
                'updated_at' => '2025-03-28 18:58:31',
            
            ],
            
            [
            
                'id' => 7,
            
                'order_id' => 5,
            
                'infor_option_id' => 69,
            
                'product_id' => 11,
            
                'qty' => 1,
            
                'price' => 20000,
            
                'created_at' => '2025-03-28 19:00:46',
            
                'updated_at' => '2025-03-28 19:00:46',
            
            ],
            
            [
            
                'id' => 8,
            
                'order_id' => 5,
            
                'infor_option_id' => 49,
            
                'product_id' => 7,
            
                'qty' => 1,
            
                'price' => 50,
            
                'created_at' => '2025-03-28 19:00:46',
            
                'updated_at' => '2025-03-28 19:00:46',
            
            ],
            
            [
            
                'id' => 9,
            
                'order_id' => 5,
            
                'infor_option_id' => 42,
            
                'product_id' => 6,
            
                'qty' => 1,
            
                'price' => 110,
            
                'created_at' => '2025-03-28 19:00:46',
            
                'updated_at' => '2025-03-28 19:00:46',
            
            ],
            
            [
            
                'id' => 10,
            
                'order_id' => 6,
            
                'infor_option_id' => 100,
            
                'product_id' => 15,
            
                'qty' => 1,
            
                'price' => 1100,
            
                'created_at' => '2025-03-28 19:12:41',
            
                'updated_at' => '2025-03-28 19:12:41',
            
            ],
            
            [
            
                'id' => 11,
            
                'order_id' => 6,
            
                'infor_option_id' => 8,
            
                'product_id' => 2,
            
                'qty' => 2,
            
                'price' => 75,
            
                'created_at' => '2025-03-28 19:12:41',
            
                'updated_at' => '2025-03-28 19:12:41',
            
            ],
            
            [
            
                'id' => 12,
            
                'order_id' => 6,
            
                'infor_option_id' => 31,
            
                'product_id' => 5,
            
                'qty' => 2,
            
                'price' => 52,
            
                'created_at' => '2025-03-28 19:12:41',
            
                'updated_at' => '2025-03-28 19:12:41',
            
            ],
            
            [
            
                'id' => 13,
            
                'order_id' => 6,
            
                'infor_option_id' => 56,
            
                'product_id' => 9,
            
                'qty' => 2,
            
                'price' => 85,
            
                'created_at' => '2025-03-28 19:12:41',
            
                'updated_at' => '2025-03-28 19:12:41',
            
            ],
            
            [
            
                'id' => 14,
            
                'order_id' => 7,
            
                'infor_option_id' => 89,
            
                'product_id' => 12,
            
                'qty' => 1,
            
                'price' => 17000,
            
                'created_at' => '2025-03-28 19:13:39',
            
                'updated_at' => '2025-03-28 19:13:39',
            
            ],
            
            [
            
                'id' => 15,
            
                'order_id' => 7,
            
                'infor_option_id' => 13,
            
                'product_id' => 3,
            
                'qty' => 1,
            
                'price' => 75,
            
                'created_at' => '2025-03-28 19:13:39',
            
                'updated_at' => '2025-03-28 19:13:39',
            
            ],
            
            [
            
                'id' => 16,
            
                'order_id' => 8,
            
                'infor_option_id' => 98,
            
                'product_id' => 13,
            
                'qty' => 1,
            
                'price' => 12000,
            
                'created_at' => '2025-03-28 19:17:44',
            
                'updated_at' => '2025-03-28 19:17:44',
            
            ],
            
            [
            
                'id' => 17,
            
                'order_id' => 8,
            
                'infor_option_id' => 3,
            
                'product_id' => 1,
            
                'qty' => 1,
            
                'price' => 80,
            
                'created_at' => '2025-03-28 19:17:44',
            
                'updated_at' => '2025-03-28 19:17:44',
            
            ],
        ]);
    }
}