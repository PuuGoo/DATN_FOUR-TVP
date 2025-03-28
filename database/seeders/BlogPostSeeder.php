<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_posts')->insert([
            [
                'category_id' => 1, // Giả sử danh mục có id là 1
                'post_title' => 'The Future of Technology',
                'post_slug' => Str::slug('The Future of Technology'),
                'post_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlqhnTtDEoZT5xvP0Q75tavxRBZ92bCJarZ64zyj-VTC78i-XwgucMO4U&usqp=CAE&s', // Đường dẫn ảnh
                'post_short_description' => 'An overview of the latest trends in technology.',
                'post_long_description' => 'The future of technology includes artificial intelligence, machine learning, and quantum computing...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2, // Giả sử danh mục có id là 2
                'post_title' => 'Healthy Living Tips',
                'post_slug' => Str::slug('Healthy Living Tips'),
                'post_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlqhnTtDEoZT5xvP0Q75tavxRBZ92bCJarZ64zyj-VTC78i-XwgucMO4U&usqp=CAE&s', // Đường dẫn ảnh
                'post_short_description' => 'Simple ways to improve your overall health.',
                'post_long_description' => 'Healthy living involves a balanced diet, regular exercise, and mental well-being...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3, // Giả sử danh mục có id là 3
                'post_title' => 'How to Live a Sustainable Life',
                'post_slug' => Str::slug('How to Live a Sustainable Life'),
                'post_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlqhnTtDEoZT5xvP0Q75tavxRBZ92bCJarZ64zyj-VTC78i-XwgucMO4U&usqp=CAE&s', // Đường dẫn ảnh
                'post_short_description' => 'Small steps for a big impact on the planet.',
                'post_long_description' => 'Living sustainably means making conscious decisions about your consumption, waste, and lifestyle...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4, // Giả sử danh mục có id là 4
                'post_title' => 'Business Strategies for 2025',
                'post_slug' => Str::slug('Business Strategies for 2025'),
                'post_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlqhnTtDEoZT5xvP0Q75tavxRBZ92bCJarZ64zyj-VTC78i-XwgucMO4U&usqp=CAE&s', // Đường dẫn ảnh
                'post_short_description' => 'Emerging trends in business management and growth.',
                'post_long_description' => 'In 2025, businesses will need to adapt to new technologies, customer expectations, and global challenges...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 5, // Giả sử danh mục có id là 5
                'post_title' => 'The Best Movies of 2024',
                'post_slug' => Str::slug('The Best Movies of 2024'),
                'post_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlqhnTtDEoZT5xvP0Q75tavxRBZ92bCJarZ64zyj-VTC78i-XwgucMO4U&usqp=CAE&s', // Đường dẫn ảnh
                'post_short_description' => 'Top films to watch in 2024.',
                'post_long_description' => 'From action-packed blockbusters to heartfelt dramas, 2024 promises a variety of cinematic experiences...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}