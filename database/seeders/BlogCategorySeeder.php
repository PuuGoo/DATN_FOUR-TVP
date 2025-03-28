<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_categories')->insert([
            [
                'blog_category_name' => 'Technology',
                'blog_category_slug' => 'technology',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_category_name' => 'Health',
                'blog_category_slug' => 'health',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_category_name' => 'Lifestyle',
                'blog_category_slug' => 'lifestyle',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_category_name' => 'Business',
                'blog_category_slug' => 'business',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_category_name' => 'Entertainment',
                'blog_category_slug' => 'entertainment',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}