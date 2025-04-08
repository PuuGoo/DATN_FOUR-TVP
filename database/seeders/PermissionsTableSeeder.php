<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->insert([
            // Brand
            [
                'name' => 'brand.menu',
                'group_name' => 'brand',
                'guard_name' => 'web'
            ],
            [
                'name' => 'brand.list',
                'group_name' => 'brand',
                'guard_name' => 'web'
            ],
            [
                'name' => 'brand.add',
                'group_name' => 'brand',
                'guard_name' => 'web'
            ],
            [
                'name' => 'brand.edit',
                'group_name' => 'brand',
                'guard_name' => 'web'
            ],
            [
                'name' => 'brand.delete',
                'group_name' => 'brand',
                'guard_name' => 'web'
            ],

            // Category
            [
                'name' => 'category.menu',
                'group_name' => 'category',
                'guard_name' => 'web'
            ],
            [
                'name' => 'category.list',
                'group_name' => 'category',
                'guard_name' => 'web'
            ],
            [
                'name' => 'category.add',
                'group_name' => 'category',
                'guard_name' => 'web'
            ],
            [
                'name' => 'category.edit',
                'group_name' => 'category',
                'guard_name' => 'web'
            ],
            [
                'name' => 'category.delete',
                'group_name' => 'category',
                'guard_name' => 'web'
            ],

            // Product
            [
                'name' => 'product.menu',
                'group_name' => 'product',
                'guard_name' => 'web'
            ],
            [
                'name' => 'product.list',
                'group_name' => 'product',
                'guard_name' => 'web'
            ],
            [
                'name' => 'product.add',
                'group_name' => 'product',
                'guard_name' => 'web'
            ],
            [
                'name' => 'product.edit',
                'group_name' => 'product',
                'guard_name' => 'web'
            ],
            [
                'name' => 'product.delete',
                'group_name' => 'product',
                'guard_name' => 'web'
            ],

            // Slider
            [
                'name' => 'slider.menu',
                'group_name' => 'slider',
                'guard_name' => 'web'
            ],
            [
                'name' => 'slider.list',
                'group_name' => 'slider',
                'guard_name' => 'web'
            ],
            [
                'name' => 'slider.add',
                'group_name' => 'slider',
                'guard_name' => 'web'
            ],
            [
                'name' => 'slider.edit',
                'group_name' => 'slider',
                'guard_name' => 'web'
            ],
            [
                'name' => 'slider.delete',
                'group_name' => 'slider',
                'guard_name' => 'web'
            ],

            // Banner
            [
                'name' => 'banner.menu',
                'group_name' => 'banner',
                'guard_name' => 'web'
            ],
            [
                'name' => 'banner.list',
                'group_name' => 'banner',
                'guard_name' => 'web'
            ],
            [
                'name' => 'banner.add',
                'group_name' => 'banner',
                'guard_name' => 'web'
            ],
            [
                'name' => 'banner.edit',
                'group_name' => 'banner',
                'guard_name' => 'web'
            ],
            [
                'name' => 'banner.delete',
                'group_name' => 'banner',
                'guard_name' => 'web'
            ],

            // Coupon
            [
                'name' => 'coupon.menu',
                'group_name' => 'coupon',
                'guard_name' => 'web'
            ],
            [
                'name' => 'coupon.list',
                'group_name' => 'coupon',
                'guard_name' => 'web'
            ],
            [
                'name' => 'coupon.add',
                'group_name' => 'coupon',
                'guard_name' => 'web'
            ],
            [
                'name' => 'coupon.edit',
                'group_name' => 'coupon',
                'guard_name' => 'web'
            ],
            [
                'name' => 'coupon.delete',
                'group_name' => 'coupon',
                'guard_name' => 'web'
            ],

            // Vendor
            [
                'name' => 'vendor.menu',
                'group_name' => 'vendor',
                'guard_name' => 'web'
            ],

            // Order
            [
                'name' => 'order.menu',
                'group_name' => 'order',
                'guard_name' => 'web'
            ],
            [
                'name' => 'order.list',
                'group_name' => 'order',
                'guard_name' => 'web'
            ],

            // Return
            [
                'name' => 'return.order.menu',
                'group_name' => 'return',
                'guard_name' => 'web'
            ],

            // User
            [
                'name' => 'user.management.menu',
                'group_name' => 'user',
                'guard_name' => 'web'
            ],

            // Review
            [
                'name' => 'review.menu',
                'group_name' => 'review',
                'guard_name' => 'web'
            ],

            // Blog
            [
                'name' => 'blog.menu',
                'group_name' => 'blog',
                'guard_name' => 'web'
            ],

            // Setting
            [
                'name' => 'site.menu',
                'group_name' => 'setting',
                'guard_name' => 'web'
            ],

            // Role
            [
                'name' => 'role.permission.menu',
                'group_name' => 'role',
                'guard_name' => 'web'
            ],

            // Admin
            [
                'name' => 'admin.user.menu',
                'group_name' => 'admin',
                'guard_name' => 'web'
            ],

            // Stock
            [
                'name' => 'stock.menu',
                'group_name' => 'stock',
                'guard_name' => 'web'
            ],

            // Report
            [
                'name' => 'report.menu',
                'group_name' => 'report',
                'guard_name' => 'web'
            ],
        ]);
    }
}
