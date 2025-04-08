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
        DB::table('categories')->insert([
            [

                'id' => 1,
            
                'category_name' => 'Fashion',
            
                'category_slug' => 'fashion',
            
                'category_image' => '1827862798429000.png',
            
                'parent_id' => 0,
            
                'created_at' => null,
            
                'updated_at' => '2025-03-28 11:19:53',
            
            ],
            
            [
            
                'id' => 2,
            
                'category_name' => 'Household',
            
                'category_slug' => 'household',
            
                'category_image' => '1827862983375005.jpg',
            
                'parent_id' => 0,
            
                'created_at' => null,
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 3,
            
                'category_name' => 'Mobiles',
            
                'category_slug' => 'mobiles',
            
                'category_image' => '1827863149664781.jpg',
            
                'parent_id' => 0,
            
                'created_at' => null,
            
                'updated_at' => '2025-03-28 11:25:10',
            
            ],
            
            [
            
                'id' => 4,
            
                'category_name' => 'Electronics',
            
                'category_slug' => 'electronics',
            
                'category_image' => '1827863461204244.jpg',
            
                'parent_id' => 0,
            
                'created_at' => null,
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 5,
            
                'category_name' => 'T-shirt',
            
                'category_slug' => 't-shirt',
            
                'category_image' => '1827863542008462.jpg',
            
                'parent_id' => 1,
            
                'created_at' => null,
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 6,
            
                'category_name' => 'Polo Shirt',
            
                'category_slug' => 'polo-shirt',
            
                'category_image' => '1827863604532743.jpg',
            
                'parent_id' => 1,
            
                'created_at' => null,
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 7,
            
                'category_name' => 'Sweatpants',
            
                'category_slug' => 'sweatpants',
            
                'category_image' => '1827863664437173.jpg',
            
                'parent_id' => 1,
            
                'created_at' => null,
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 8,
            
                'category_name' => 'Iphone',
            
                'category_slug' => 'iphone',
            
                'category_image' => '1827863940364275.jpg',
            
                'parent_id' => 3,
            
                'created_at' => null,
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 9,
            
                'category_name' => 'Jeans',
            
                'category_slug' => 'jeans',
            
                'category_image' => '1827863991672386.jpg',
            
                'parent_id' => 1,
            
                'created_at' => null,
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 10,
            
                'category_name' => 'Oppo',
            
                'category_slug' => 'oppo',
            
                'category_image' => '1827864063912174.jpg',
            
                'parent_id' => 3,
            
                'created_at' => null,
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 11,
            
                'category_name' => 'Samsung',
            
                'category_slug' => 'samsung',
            
                'category_image' => '1827864089204649.png',
            
                'parent_id' => 3,
            
                'created_at' => null,
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 12,
            
                'category_name' => 'Fridge',
            
                'category_slug' => 'fridge',
            
                'category_image' => '1827864295156289.jpg',
            
                'parent_id' => 4,
            
                'created_at' => null,
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 13,
            
                'category_name' => 'Washing machine',
            
                'category_slug' => 'washing-machine',
            
                'category_image' => '1827864333845301.jpg',
            
                'parent_id' => 4,
            
                'created_at' => null,
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 14,
            
                'category_name' => 'Pots and Pans',
            
                'category_slug' => 'pots-and-pans',
            
                'category_image' => '1827864556523042.jpg',
            
                'parent_id' => 2,
            
                'created_at' => null,
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 15,
            
                'category_name' => 'Fabric',
            
                'category_slug' => 'fabric',
            
                'category_image' => '1827878439391615.jpg',
            
                'parent_id' => 0,
            
                'created_at' => null,
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 16,
            
                'category_name' => 'Cotton fabric',
            
                'category_slug' => 'cotton-fabric',
            
                'category_image' => '1827878578564161.jpg',
            
                'parent_id' => 15,
            
                'created_at' => null,
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 17,
            
                'category_name' => 'Khaki fabric',
            
                'category_slug' => 'khaki-fabric',
            
                'category_image' => '1827878643266665.jpg',
            
                'parent_id' => 15,
            
                'created_at' => null,
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 18,
            
                'category_name' => 'Jeans',
            
                'category_slug' => 'jeans',
            
                'category_image' => '1827878707982674.png',
            
                'parent_id' => 15,
            
                'created_at' => null,
            
                'updated_at' => null,
            
            ],
        ]);
    }
}
