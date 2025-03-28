<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            'iPhone 15',
            'Samsung Galaxy S23',
            'Xiaomi 13 Pro',
            'MacBook Pro M2',
            'Sony WH-1000XM5',
            'Samsung Galaxy Watch 5',
            'Xiaomi Redmi Note 12',
            'Oppo Reno 8',
            'Vivo X90',
            'Realme GT Neo 5',
            'Asus ROG Phone 7',
            'OnePlus 11',
            'Google Pixel 7',
            'Huawei P60 Pro',
            'Nokia XR20',
            'Lenovo Legion Phone Duel',
            'Motorola Edge 40',
            'Nothing Phone 2',
            'Redmi K60',
            'Honor Magic 5'
        ];

        $data = [];

        foreach ($products as $name) {
            $data[] = [
                'brand_id' => rand(1, 3),
                'category_id' => rand(1, 10),
                'product_name' => $name,
                'product_slug' => Str::slug($name),
                'product_code' => strtoupper(Str::random(8)),
                'product_qty' => rand(5, 50),
                'product_tags' => strtolower(str_replace(' ', ',', $name)),
                'selling_price' => rand(5000000, 30000000),
                'discount_price' => rand(4000000, 29000000),
                'short_descp' => 'Mô tả ngắn về ' . $name,
                'long_descp' => 'Mô tả chi tiết về ' . $name,
                'product_thumnail' => 'https://digi-poly.id.vn/upload/products/thambnail/1740389527616484.webp',
                'vendor_id' => rand(1, 3),
                'status' => rand(0, 1),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('products')->insert($data);
    }
}
