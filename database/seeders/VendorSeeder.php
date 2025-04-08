<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vendor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VendorSeeder extends Seeder {
    public function run() {
        DB::table('vendors')->truncate(); // Xóa toàn bộ dữ liệu cũ (nếu cần)

        for ($i = 1; $i <= 10; $i++) {
            Vendor::create([
                'shop_name' => 'Shop1 ' . $i,
                'vendor_username' => 'vendor1' . $i,
                'join_date' => now()->subDays(rand(1, 365)),
                'vendor_email' => 'vendor1' . $i . '@example.com',
                'status' => rand(0, 1) ? 'Active' : 'Inactive',
            ]);
        }
    }
}


