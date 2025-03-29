<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [

                'id' => 1,
            
                'name' => 'Admin',
            
                'username' => 'admin',
            
                'email' => 'admin@gmail.com',
            
                'email_verified_at' => null,
            
                'password' => '$2y$12$WiKkkEnP949idKlEeDOfkOm5Q0G2Kf3fcriZQCRDxe/XeUAH43ivW',
            
                'photo' => null,
            
                'phone' => null,
            
                'address' => null,
            
                'vendor_join' => null,
            
                'vendor_short_info' => null,
            
                'role' => 'admin',
            
                'status' => 'active',
            
                'last_seen' => null,
            
                'remember_token' => null,
            
                'created_at' => null,
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 2,
            
                'name' => 'Ariyan Vendor',
            
                'username' => 'vendor',
            
                'email' => 'vendor@gmail.com',
            
                'email_verified_at' => null,
            
                'password' => '$2y$12$lKDSkSmuWD7C5xii/NTIgei328wq53YfjlxmkFNAaQjVYkncZoCLK',
            
                'photo' => null,
            
                'phone' => null,
            
                'address' => null,
            
                'vendor_join' => null,
            
                'vendor_short_info' => null,
            
                'role' => 'vendor',
            
                'status' => 'active',
            
                'last_seen' => null,
            
                'remember_token' => null,
            
                'created_at' => '2025-02-28 19:40:59',
            
                'updated_at' => '2025-03-28 12:35:18',
            
            ],
            
            [
            
                'id' => 3,
            
                'name' => 'User',
            
                'username' => 'user',
            
                'email' => 'user@gmail.com',
            
                'email_verified_at' => null,
            
                'password' => '$2y$12$k0ylIH9OOG11GNq8YsFFAOWGtDo1KUmUsmaPx6doWE13xXcgZ79Gu',
            
                'photo' => null,
            
                'phone' => null,
            
                'address' => null,
            
                'vendor_join' => null,
            
                'vendor_short_info' => null,
            
                'role' => 'user',
            
                'status' => 'active',
            
                'last_seen' => null,
            
                'remember_token' => null,
            
                'created_at' => null,
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 4,
            
                'name' => 'Lisa Verdimen',
            
                'username' => 'Lisa',
            
                'email' => 'lisa@gmail.com',
            
                'email_verified_at' => null,
            
                'password' => '$2y$12$WiKkkEnP949idKlEeDOfkOm5Q0G2Kf3fcriZQCRDxe/XeUAH43ivW',
            
                'photo' => null,
            
                'phone' => null,
            
                'address' => null,
            
                'vendor_join' => null,
            
                'vendor_short_info' => null,
            
                'role' => 'vendor',
            
                'status' => 'active',
            
                'last_seen' => null,
            
                'remember_token' => null,
            
                'created_at' => '2025-03-04 19:40:59',
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 5,
            
                'name' => 'David divenci',
            
                'username' => 'David',
            
                'email' => 'david@gmail.com',
            
                'email_verified_at' => null,
            
                'password' => '$2y$12$WiKkkEnP949idKlEeDOfkOm5Q0G2Kf3fcriZQCRDxe/XeUAH43ivW',
            
                'photo' => null,
            
                'phone' => null,
            
                'address' => null,
            
                'vendor_join' => null,
            
                'vendor_short_info' => null,
            
                'role' => 'vendor',
            
                'status' => 'active',
            
                'last_seen' => null,
            
                'remember_token' => null,
            
                'created_at' => '2025-03-01 19:40:59',
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 6,
            
                'name' => 'Peter civer',
            
                'username' => 'Peter',
            
                'email' => 'peter@gmail.com',
            
                'email_verified_at' => null,
            
                'password' => '$2y$12$WiKkkEnP949idKlEeDOfkOm5Q0G2Kf3fcriZQCRDxe/XeUAH43ivW',
            
                'photo' => null,
            
                'phone' => null,
            
                'address' => null,
            
                'vendor_join' => null,
            
                'vendor_short_info' => null,
            
                'role' => 'vendor',
            
                'status' => 'active',
            
                'last_seen' => null,
            
                'remember_token' => null,
            
                'created_at' => '2025-03-09 19:40:59',
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 7,
            
                'name' => 'Nami',
            
                'username' => 'Nami',
            
                'email' => 'nami@gmail.com',
            
                'email_verified_at' => null,
            
                'password' => '$2y$12$WiKkkEnP949idKlEeDOfkOm5Q0G2Kf3fcriZQCRDxe/XeUAH43ivW',
            
                'photo' => null,
            
                'phone' => null,
            
                'address' => null,
            
                'vendor_join' => null,
            
                'vendor_short_info' => null,
            
                'role' => 'user',
            
                'status' => 'active',
            
                'last_seen' => null,
            
                'remember_token' => null,
            
                'created_at' => null,
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 8,
            
                'name' => 'Hisito',
            
                'username' => 'Hisito',
            
                'email' => 'hisito@gmail.com',
            
                'email_verified_at' => null,
            
                'password' => '$2y$12$WiKkkEnP949idKlEeDOfkOm5Q0G2Kf3fcriZQCRDxe/XeUAH43ivW',
            
                'photo' => null,
            
                'phone' => null,
            
                'address' => null,
            
                'vendor_join' => null,
            
                'vendor_short_info' => null,
            
                'role' => 'user',
            
                'status' => 'active',
            
                'last_seen' => null,
            
                'remember_token' => null,
            
                'created_at' => null,
            
                'updated_at' => null,
            
            ],
            
            [
            
                'id' => 9,
            
                'name' => 'Kaito kid',
            
                'username' => 'Kaito kid',
            
                'email' => 'kaitokid@gmail.com',
            
                'email_verified_at' => null,
            
                'password' => '$2y$12$WiKkkEnP949idKlEeDOfkOm5Q0G2Kf3fcriZQCRDxe/XeUAH43ivW',
            
                'photo' => null,
            
                'phone' => null,
            
                'address' => null,
            
                'vendor_join' => null,
            
                'vendor_short_info' => null,
            
                'role' => 'user',
            
                'status' => 'active',
            
                'last_seen' => null,
            
                'remember_token' => null,
            
                'created_at' => null,
            
                'updated_at' => null,
            
            ],


        ]);
    }
}
