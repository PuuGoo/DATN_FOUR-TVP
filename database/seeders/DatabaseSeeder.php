<?php

namespace Database\Seeders;

use App\Models\Coupon;
use App\Models\Order;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(CouponSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(VariantsSeeder::class);
        $this->call(MultiImagesSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderItemSeeder::class);
        $this->call(SiteSettingSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(BlogCategorySeeder::class);
        $this->call(BlogPostSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(AreaTableSeeder::class);
        $this->call(RoleTableSeeder::class);



        
        // // User::factory()->create([
        // //     'name' => 'Test User',
        // //     'email' => 'test@example.com',
        // // ]);

        // // Seed coupons trước
        // Coupon::factory()->count(5)->create();

        // // Sau đó mới seed orders
        // Order::factory()->count(10)->create();
    }
}
