<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category_name' => 'Appliances', 'category_image' => 'https://digi-poly.id.vn/upload/category/1740388475103826.webp'],
            ['category_name' => 'Beauty', 'category_image' => 'https://digi-poly.id.vn/upload/category/1740388510925410.webp'],
            ['category_name' => 'Electronics', 'category_image' => 'https://digi-poly.id.vn/upload/category/1740388410112488.webp'],
            ['category_name' => 'Fashion', 'category_image' => 'https://digi-poly.id.vn/upload/category/1740388456845535.webp'],
            ['category_name' => 'Furniture', 'category_image' => 'https://digi-poly.id.vn/upload/category/1740388599418960.webp'],
            ['category_name' => 'Grocery', 'category_image' => 'https://digi-poly.id.vn/upload/category/1740388649576724.webp'],
            ['category_name' => 'Meat & Fish', 'category_image' => 'https://digi-poly.id.vn/upload/category/1740388203907617.png'],
            ['category_name' => 'Mobiles', 'category_image' => 'https://digi-poly.id.vn/upload/category/1740388616630915.webp'],
            ['category_name' => 'Sweet Home', 'category_image' => 'https://digi-poly.id.vn/upload/category/1740388444682193.webp'],
            ['category_name' => 'Travel', 'category_image' => 'https://digi-poly.id.vn/upload/category/1740388803723655.webp'],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'category_name' => $category['category_name'],
                'category_slug' => Str::slug($category['category_name']), // Tạo slug tự động
                'category_image' => $category['category_image'],
                'parent_id' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
