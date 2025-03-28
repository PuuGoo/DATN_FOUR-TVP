<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'name' => "SuperAdmin",
                'guard_name' => 'web',
            ],
            [
                'name' => "Admin",
                'guard_name' => 'web',
            ],
            [
                'name' => "CEO",
                'guard_name' => 'web',
            ],
            [
                'name' => "Account",
                'guard_name' => 'web',
            ],
        ]);
    }
}
