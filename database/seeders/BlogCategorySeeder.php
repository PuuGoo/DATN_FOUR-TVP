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
                'id' => 1, 
                'blog_category_name' => 'Technology', 
                'blog_category_slug' => 'technology', 
                'created_at' => '2025-03-28 13:41:25', 
                'updated_at' => '2025-03-28 13:41:25'
            ],
            [
                'id' => 2, 
                'blog_category_name' => 'Entertainment', 
                'blog_category_slug' => 'entertainment', 
                'created_at' => '2025-03-28 13:41:54', 
                'updated_at' => '2025-03-28 13:41:54'
            ],
            [
                'id' => 3, 
                'blog_category_name' => 'Business', 
                'blog_category_slug' => 'business', 
                'created_at' => '2025-03-28 13:43:49', 
                'updated_at' => '2025-03-28 13:43:49'
            ],
            [
                'id' => 4, 
                'blog_category_name' => 'Life', 
                'blog_category_slug' => 'life', 
                'created_at' => '2025-03-28 13:44:38', 
                'updated_at' => '2025-03-28 13:44:38'
            ],
            [
                'id' => 5, 
                'blog_category_name' => 'Sport', 
                'blog_category_slug' => 'sport', 
                'created_at' => '2025-03-28 13:45:01', 
                'updated_at' => '2025-03-28 13:45:01'
            ],
        ]);
    }
}