<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('variant_name')->insert([
            [

                'id' => 1,
            
                'name' => 'Kích thước',
            
                'created_at' => '2025-03-28 14:55:45',
            
                'updated_at' => '2025-03-28 14:55:45',
            
            ],
            
            [
            
                'id' => 2,
            
                'name' => 'Kích thước',
            
                'created_at' => '2025-03-28 15:17:17',
            
                'updated_at' => '2025-03-28 15:17:17',
            
            ],
            
            [
            
                'id' => 3,
            
                'name' => 'Kích thước',
            
                'created_at' => '2025-03-28 15:21:55',
            
                'updated_at' => '2025-03-28 15:21:55',
            
            ],
            
            [
            
                'id' => 4,
            
                'name' => 'màu sắc',
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 5,
            
                'name' => 'kích thước',
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 6,
            
                'name' => 'màu sắc',
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 7,
            
                'name' => 'kích thước',
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 8,
            
                'name' => 'màu sắc',
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 9,
            
                'name' => 'kích thước',
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 10,
            
                'name' => 'kích thước',
            
                'created_at' => '2025-03-28 16:09:48',
            
                'updated_at' => '2025-03-28 16:09:48',
            
            ],
            
            [
            
                'id' => 11,
            
                'name' => 'kích thước',
            
                'created_at' => '2025-03-28 16:13:47',
            
                'updated_at' => '2025-03-28 16:13:47',
            
            ],
            
            [
            
                'id' => 12,
            
                'name' => 'màu sắc',
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 13,
            
                'name' => 'kích thước',
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 14,
            
                'name' => 'kích thước',
            
                'created_at' => '2025-03-28 16:27:03',
            
                'updated_at' => '2025-03-28 16:27:03',
            
            ],
            
            [
            
                'id' => 15,
            
                'name' => 'màu sắc',
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 16,
            
                'name' => 'kích thước',
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 17,
            
                'name' => 'màu sắc',
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 18,
            
                'name' => 'kích thước',
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 19,
            
                'name' => 'màu sắc',
            
                'created_at' => '2025-03-28 16:57:16',
            
                'updated_at' => '2025-03-28 16:57:16',
            
            ],
            
            [
            
                'id' => 20,
            
                'name' => 'Thông số',
            
                'created_at' => '2025-03-28 17:04:54',
            
                'updated_at' => '2025-03-28 17:04:54',
            
            ],
        ]);
        DB::table('variant_attribute')->insert([
            [

                'id' => 1,
            
                'idvariantname' => 1,
            
                'value' => 'S',
            
                'created_at' => '2025-03-28 14:55:45',
            
                'updated_at' => '2025-03-28 14:55:45',
            
            ],
            
            [
            
                'id' => 2,
            
                'idvariantname' => 1,
            
                'value' => 'M',
            
                'created_at' => '2025-03-28 14:55:45',
            
                'updated_at' => '2025-03-28 14:55:45',
            
            ],
            
            [
            
                'id' => 3,
            
                'idvariantname' => 1,
            
                'value' => 'L',
            
                'created_at' => '2025-03-28 14:55:45',
            
                'updated_at' => '2025-03-28 14:55:45',
            
            ],
            
            [
            
                'id' => 4,
            
                'idvariantname' => 1,
            
                'value' => 'XL',
            
                'created_at' => '2025-03-28 14:55:45',
            
                'updated_at' => '2025-03-28 14:55:45',
            
            ],
            
            [
            
                'id' => 5,
            
                'idvariantname' => 1,
            
                'value' => '2XL',
            
                'created_at' => '2025-03-28 14:55:45',
            
                'updated_at' => '2025-03-28 14:55:45',
            
            ],
            
            [
            
                'id' => 6,
            
                'idvariantname' => 2,
            
                'value' => 'S',
            
                'created_at' => '2025-03-28 15:17:17',
            
                'updated_at' => '2025-03-28 15:17:17',
            
            ],
            
            [
            
                'id' => 7,
            
                'idvariantname' => 2,
            
                'value' => 'M',
            
                'created_at' => '2025-03-28 15:17:17',
            
                'updated_at' => '2025-03-28 15:17:17',
            
            ],
            
            [
            
                'id' => 8,
            
                'idvariantname' => 2,
            
                'value' => 'L',
            
                'created_at' => '2025-03-28 15:17:17',
            
                'updated_at' => '2025-03-28 15:17:17',
            
            ],
            
            [
            
                'id' => 9,
            
                'idvariantname' => 2,
            
                'value' => 'XL',
            
                'created_at' => '2025-03-28 15:17:17',
            
                'updated_at' => '2025-03-28 15:17:17',
            
            ],
            
            [
            
                'id' => 10,
            
                'idvariantname' => 2,
            
                'value' => '2XL',
            
                'created_at' => '2025-03-28 15:17:17',
            
                'updated_at' => '2025-03-28 15:17:17',
            
            ],
            
            [
            
                'id' => 11,
            
                'idvariantname' => 3,
            
                'value' => 'M',
            
                'created_at' => '2025-03-28 15:21:55',
            
                'updated_at' => '2025-03-28 15:21:55',
            
            ],
            
            [
            
                'id' => 12,
            
                'idvariantname' => 3,
            
                'value' => 'L',
            
                'created_at' => '2025-03-28 15:21:55',
            
                'updated_at' => '2025-03-28 15:21:55',
            
            ],
            
            [
            
                'id' => 13,
            
                'idvariantname' => 3,
            
                'value' => 'XL',
            
                'created_at' => '2025-03-28 15:21:55',
            
                'updated_at' => '2025-03-28 15:21:55',
            
            ],
            
            [
            
                'id' => 14,
            
                'idvariantname' => 3,
            
                'value' => '2XL',
            
                'created_at' => '2025-03-28 15:21:55',
            
                'updated_at' => '2025-03-28 15:21:55',
            
            ],
            
            [
            
                'id' => 15,
            
                'idvariantname' => 4,
            
                'value' => 'xanh dương đậm',
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 16,
            
                'idvariantname' => 4,
            
                'value' => 'xanh bầu trời',
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 17,
            
                'idvariantname' => 4,
            
                'value' => 'vàng cát',
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 18,
            
                'idvariantname' => 4,
            
                'value' => 'bạc nhạt',
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 19,
            
                'idvariantname' => 5,
            
                'value' => '1M',
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 20,
            
                'idvariantname' => 5,
            
                'value' => '2M',
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 21,
            
                'idvariantname' => 5,
            
                'value' => '5M',
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 22,
            
                'idvariantname' => 5,
            
                'value' => '10M',
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 23,
            
                'idvariantname' => 6,
            
                'value' => 'xanh lá đậm',
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 24,
            
                'idvariantname' => 6,
            
                'value' => 'xanh lá nhạt',
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 25,
            
                'idvariantname' => 6,
            
                'value' => 'vàng sa mạc',
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 26,
            
                'idvariantname' => 7,
            
                'value' => '1M',
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 27,
            
                'idvariantname' => 7,
            
                'value' => '2M',
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 28,
            
                'idvariantname' => 7,
            
                'value' => '5M',
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 29,
            
                'idvariantname' => 7,
            
                'value' => '10M',
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 30,
            
                'idvariantname' => 8,
            
                'value' => 'xanh dương nhạt',
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 31,
            
                'idvariantname' => 8,
            
                'value' => 'Đen nhạt',
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 32,
            
                'idvariantname' => 9,
            
                'value' => '1M',
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 33,
            
                'idvariantname' => 9,
            
                'value' => '2M',
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 34,
            
                'idvariantname' => 9,
            
                'value' => '5M',
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 35,
            
                'idvariantname' => 9,
            
                'value' => '10M',
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 36,
            
                'idvariantname' => 10,
            
                'value' => 'S',
            
                'created_at' => '2025-03-28 16:09:48',
            
                'updated_at' => '2025-03-28 16:09:48',
            
            ],
            
            [
            
                'id' => 37,
            
                'idvariantname' => 10,
            
                'value' => 'M',
            
                'created_at' => '2025-03-28 16:09:48',
            
                'updated_at' => '2025-03-28 16:09:48',
            
            ],
            
            [
            
                'id' => 38,
            
                'idvariantname' => 10,
            
                'value' => 'L',
            
                'created_at' => '2025-03-28 16:09:48',
            
                'updated_at' => '2025-03-28 16:09:48',
            
            ],
            
            [
            
                'id' => 39,
            
                'idvariantname' => 10,
            
                'value' => 'XL',
            
                'created_at' => '2025-03-28 16:09:48',
            
                'updated_at' => '2025-03-28 16:09:48',
            
            ],
            
            [
            
                'id' => 40,
            
                'idvariantname' => 10,
            
                'value' => 'XXL',
            
                'created_at' => '2025-03-28 16:09:48',
            
                'updated_at' => '2025-03-28 16:09:48',
            
            ],
            
            [
            
                'id' => 41,
            
                'idvariantname' => 11,
            
                'value' => 'M',
            
                'created_at' => '2025-03-28 16:13:47',
            
                'updated_at' => '2025-03-28 16:13:47',
            
            ],
            
            [
            
                'id' => 42,
            
                'idvariantname' => 11,
            
                'value' => 'L',
            
                'created_at' => '2025-03-28 16:13:47',
            
                'updated_at' => '2025-03-28 16:13:47',
            
            ],
            
            [
            
                'id' => 43,
            
                'idvariantname' => 11,
            
                'value' => 'XL',
            
                'created_at' => '2025-03-28 16:13:47',
            
                'updated_at' => '2025-03-28 16:13:47',
            
            ],
            
            [
            
                'id' => 44,
            
                'idvariantname' => 11,
            
                'value' => 'XXL',
            
                'created_at' => '2025-03-28 16:13:47',
            
                'updated_at' => '2025-03-28 16:13:47',
            
            ],
            
            [
            
                'id' => 45,
            
                'idvariantname' => 12,
            
                'value' => 'Blue',
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 46,
            
                'idvariantname' => 13,
            
                'value' => '29',
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 47,
            
                'idvariantname' => 13,
            
                'value' => '30',
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 48,
            
                'idvariantname' => 13,
            
                'value' => '31',
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 49,
            
                'idvariantname' => 13,
            
                'value' => '32',
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 50,
            
                'idvariantname' => 13,
            
                'value' => '33',
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 51,
            
                'idvariantname' => 13,
            
                'value' => '34',
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 52,
            
                'idvariantname' => 13,
            
                'value' => '35',
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 53,
            
                'idvariantname' => 13,
            
                'value' => '36',
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 54,
            
                'idvariantname' => 13,
            
                'value' => '37',
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 55,
            
                'idvariantname' => 14,
            
                'value' => '1TB',
            
                'created_at' => '2025-03-28 16:27:03',
            
                'updated_at' => '2025-03-28 16:27:03',
            
            ],
            
            [
            
                'id' => 56,
            
                'idvariantname' => 14,
            
                'value' => '512TB',
            
                'created_at' => '2025-03-28 16:27:03',
            
                'updated_at' => '2025-03-28 16:27:03',
            
            ],
            
            [
            
                'id' => 57,
            
                'idvariantname' => 14,
            
                'value' => '256TB',
            
                'created_at' => '2025-03-28 16:27:03',
            
                'updated_at' => '2025-03-28 16:27:03',
            
            ],
            
            [
            
                'id' => 58,
            
                'idvariantname' => 15,
            
                'value' => 'Titan tự nhiên',
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 59,
            
                'idvariantname' => 15,
            
                'value' => 'Titan đen',
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 60,
            
                'idvariantname' => 15,
            
                'value' => 'Titan trắng',
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 61,
            
                'idvariantname' => 15,
            
                'value' => 'Titan sa mạc',
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 62,
            
                'idvariantname' => 16,
            
                'value' => '1TB',
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 63,
            
                'idvariantname' => 16,
            
                'value' => '512GB',
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 64,
            
                'idvariantname' => 16,
            
                'value' => '256GB',
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 65,
            
                'idvariantname' => 17,
            
                'value' => 'Trắng / Bạc',
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 66,
            
                'idvariantname' => 17,
            
                'value' => 'Đen',
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 67,
            
                'idvariantname' => 17,
            
                'value' => 'Xám',
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 68,
            
                'idvariantname' => 17,
            
                'value' => 'Xanh dương',
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 69,
            
                'idvariantname' => 18,
            
                'value' => 'S25 Ultra 1TB',
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 70,
            
                'idvariantname' => 18,
            
                'value' => 'S25 Ultra 512GB',
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 71,
            
                'idvariantname' => 18,
            
                'value' => 'S25 Ultra 256GB',
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 72,
            
                'idvariantname' => 18,
            
                'value' => 'S25 Plus 512GB',
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 73,
            
                'idvariantname' => 18,
            
                'value' => 'S25 Plus 1TB',
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 74,
            
                'idvariantname' => 19,
            
                'value' => 'Xám',
            
                'created_at' => '2025-03-28 16:57:16',
            
                'updated_at' => '2025-03-28 16:57:16',
            
            ],
            
            [
            
                'id' => 75,
            
                'idvariantname' => 19,
            
                'value' => 'Đen',
            
                'created_at' => '2025-03-28 16:57:16',
            
                'updated_at' => '2025-03-28 16:57:16',
            
            ],
            
            [
            
                'id' => 76,
            
                'idvariantname' => 20,
            
                'value' => '9 KG - Đen - Xám',
            
                'created_at' => '2025-03-28 17:04:54',
            
                'updated_at' => '2025-03-28 17:04:54',
            
            ],
            
            [
            
                'id' => 77,
            
                'idvariantname' => 20,
            
                'value' => '9 KG - Trắng',
            
                'created_at' => '2025-03-28 17:04:54',
            
                'updated_at' => '2025-03-28 17:04:54',
            
            ],
            
            [
            
                'id' => 78,
            
                'idvariantname' => 20,
            
                'value' => '10 KG - Trắng',
            
                'created_at' => '2025-03-28 17:04:54',
            
                'updated_at' => '2025-03-28 17:04:54',
            
            ],
            
            [
            
                'id' => 79,
            
                'idvariantname' => 20,
            
                'value' => '10 KG - Đen - Xám',
            
                'created_at' => '2025-03-28 17:04:54',
            
                'updated_at' => '2025-03-28 17:04:54',
            
            ],
        ]);
        DB::table('infor_option')->insert([
            [

                'id' => 1,
            
                'idproduct' => 1,
            
                'code' => '7UfU8z8R4v',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 14:55:45',
            
                'updated_at' => '2025-03-28 14:55:45',
            
            ],
            
            [
            
                'id' => 2,
            
                'idproduct' => 1,
            
                'code' => 'e94ivlFJJA',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 14:55:45',
            
                'updated_at' => '2025-03-28 14:55:45',
            
            ],
            
            [
            
                'id' => 3,
            
                'idproduct' => 1,
            
                'code' => 'xHVlrPAGOe',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 14:55:45',
            
                'updated_at' => '2025-03-28 14:55:45',
            
            ],
            
            [
            
                'id' => 4,
            
                'idproduct' => 1,
            
                'code' => 'Ls0gmOQRk8',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 14:55:45',
            
                'updated_at' => '2025-03-28 14:55:45',
            
            ],
            
            [
            
                'id' => 5,
            
                'idproduct' => 1,
            
                'code' => 'cTlLwZxUOy',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 14:55:45',
            
                'updated_at' => '2025-03-28 14:55:45',
            
            ],
            
            [
            
                'id' => 6,
            
                'idproduct' => 2,
            
                'code' => 'nNy8HuqgA6',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:17:17',
            
                'updated_at' => '2025-03-28 15:17:17',
            
            ],
            
            [
            
                'id' => 7,
            
                'idproduct' => 2,
            
                'code' => 'ZYeX63Q0YR',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:17:17',
            
                'updated_at' => '2025-03-28 15:17:17',
            
            ],
            
            [
            
                'id' => 8,
            
                'idproduct' => 2,
            
                'code' => 'sopzRnfRkO',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:17:17',
            
                'updated_at' => '2025-03-28 15:17:17',
            
            ],
            
            [
            
                'id' => 9,
            
                'idproduct' => 2,
            
                'code' => 'v0MrC3udbn',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:17:17',
            
                'updated_at' => '2025-03-28 15:17:17',
            
            ],
            
            [
            
                'id' => 10,
            
                'idproduct' => 2,
            
                'code' => 'v7dSr4YgXI',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:17:17',
            
                'updated_at' => '2025-03-28 15:17:17',
            
            ],
            
            [
            
                'id' => 11,
            
                'idproduct' => 3,
            
                'code' => 'OaQc6COWXq',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:21:55',
            
                'updated_at' => '2025-03-28 15:21:55',
            
            ],
            
            [
            
                'id' => 12,
            
                'idproduct' => 3,
            
                'code' => '8crJE6Lcuh',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:21:55',
            
                'updated_at' => '2025-03-28 15:21:55',
            
            ],
            
            [
            
                'id' => 13,
            
                'idproduct' => 3,
            
                'code' => 'tHILw3iUxR',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:21:55',
            
                'updated_at' => '2025-03-28 15:21:55',
            
            ],
            
            [
            
                'id' => 14,
            
                'idproduct' => 3,
            
                'code' => 'daMsbRO1zE',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:21:55',
            
                'updated_at' => '2025-03-28 15:21:55',
            
            ],
            
            [
            
                'id' => 15,
            
                'idproduct' => 4,
            
                'code' => 'J5hlBdNeHV',
            
                'price' => 10,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 16,
            
                'idproduct' => 4,
            
                'code' => 'Tm8qjRP2RU',
            
                'price' => 20,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 17,
            
                'idproduct' => 4,
            
                'code' => '3eLOQBk3c6',
            
                'price' => 50,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 18,
            
                'idproduct' => 4,
            
                'code' => '6vghjBqxRk',
            
                'price' => 100,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 19,
            
                'idproduct' => 4,
            
                'code' => 'amFWcqSxXx',
            
                'price' => 25,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 20,
            
                'idproduct' => 4,
            
                'code' => '6Mf1arHwpP',
            
                'price' => 55,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 21,
            
                'idproduct' => 4,
            
                'code' => 'PDqvhtuH3X',
            
                'price' => 105,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 22,
            
                'idproduct' => 4,
            
                'code' => 'GFZuL7ve83',
            
                'price' => 11,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 23,
            
                'idproduct' => 4,
            
                'code' => 'qaHz4RDPUt',
            
                'price' => 51,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 24,
            
                'idproduct' => 4,
            
                'code' => '7t15Rqm0i0',
            
                'price' => 101,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 25,
            
                'idproduct' => 4,
            
                'code' => 'WzuDTk7Ptp',
            
                'price' => 16,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 26,
            
                'idproduct' => 4,
            
                'code' => 'kRl2pkpShh',
            
                'price' => 26,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 27,
            
                'idproduct' => 4,
            
                'code' => 'UIq1SpFXyk',
            
                'price' => 56,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 28,
            
                'idproduct' => 4,
            
                'code' => 'yHvWdfmRg9',
            
                'price' => 106,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 29,
            
                'idproduct' => 5,
            
                'code' => 'JEz1f2ciBl',
            
                'price' => 12,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 30,
            
                'idproduct' => 5,
            
                'code' => '7WBN0KYKl1',
            
                'price' => 22,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 31,
            
                'idproduct' => 5,
            
                'code' => 'zzwSIZ0euW',
            
                'price' => 52,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 32,
            
                'idproduct' => 5,
            
                'code' => 'MhfKT3qF1W',
            
                'price' => 102,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 33,
            
                'idproduct' => 5,
            
                'code' => 'Qh72uwnoG1',
            
                'price' => 14,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 34,
            
                'idproduct' => 5,
            
                'code' => '7LBmmtmrls',
            
                'price' => 54,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 35,
            
                'idproduct' => 5,
            
                'code' => 'fZTVjf4kLp',
            
                'price' => 104,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 36,
            
                'idproduct' => 5,
            
                'code' => 'xCN5QrfDMj',
            
                'price' => 17,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 37,
            
                'idproduct' => 5,
            
                'code' => 'fKuFAIEqJL',
            
                'price' => 27,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 38,
            
                'idproduct' => 5,
            
                'code' => 'l2Alry9rV4',
            
                'price' => 57,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 39,
            
                'idproduct' => 6,
            
                'code' => 'ExskMsJ7K8',
            
                'price' => 20,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 40,
            
                'idproduct' => 6,
            
                'code' => 'sN58OnCwyu',
            
                'price' => 30,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 41,
            
                'idproduct' => 6,
            
                'code' => 'HoATl3zmvR',
            
                'price' => 60,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 42,
            
                'idproduct' => 6,
            
                'code' => 'ht7dTxItpE',
            
                'price' => 110,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 43,
            
                'idproduct' => 6,
            
                'code' => 'KAihvHZi6h',
            
                'price' => 21,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 44,
            
                'idproduct' => 6,
            
                'code' => 'Cw4AB6OAPi',
            
                'price' => 31,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 45,
            
                'idproduct' => 6,
            
                'code' => '6rN953FJJc',
            
                'price' => 61,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 46,
            
                'idproduct' => 6,
            
                'code' => '5YpWzX9bPj',
            
                'price' => 111,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 47,
            
                'idproduct' => 7,
            
                'code' => 'GlxfHaGGpn',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:09:48',
            
                'updated_at' => '2025-03-28 16:09:48',
            
            ],
            
            [
            
                'id' => 48,
            
                'idproduct' => 7,
            
                'code' => 'O16KsiwI40',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:09:48',
            
                'updated_at' => '2025-03-28 16:09:48',
            
            ],
            
            [
            
                'id' => 49,
            
                'idproduct' => 7,
            
                'code' => 'Q9A1Sn8TA9',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:09:48',
            
                'updated_at' => '2025-03-28 16:09:48',
            
            ],
            
            [
            
                'id' => 50,
            
                'idproduct' => 7,
            
                'code' => 'dbmdi5devH',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:09:48',
            
                'updated_at' => '2025-03-28 16:09:48',
            
            ],
            
            [
            
                'id' => 51,
            
                'idproduct' => 7,
            
                'code' => 'Bk69BbXrfc',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:09:48',
            
                'updated_at' => '2025-03-28 16:09:48',
            
            ],
            
            [
            
                'id' => 52,
            
                'idproduct' => 8,
            
                'code' => 'OUxJAL9jbh',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:13:47',
            
                'updated_at' => '2025-03-28 16:13:47',
            
            ],
            
            [
            
                'id' => 53,
            
                'idproduct' => 8,
            
                'code' => 'l5xydVPeHg',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:13:47',
            
                'updated_at' => '2025-03-28 16:13:47',
            
            ],
            
            [
            
                'id' => 54,
            
                'idproduct' => 8,
            
                'code' => 'eQ8uoOjCPq',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:13:47',
            
                'updated_at' => '2025-03-28 16:13:47',
            
            ],
            
            [
            
                'id' => 55,
            
                'idproduct' => 8,
            
                'code' => 'CB6O7W4xfx',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:13:47',
            
                'updated_at' => '2025-03-28 16:13:47',
            
            ],
            
            [
            
                'id' => 56,
            
                'idproduct' => 9,
            
                'code' => 'cM7LWfaqdT',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 57,
            
                'idproduct' => 9,
            
                'code' => 'bfUeGbtNQ6',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 58,
            
                'idproduct' => 9,
            
                'code' => 'PQRD27kYo3',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 59,
            
                'idproduct' => 9,
            
                'code' => 'YmACnihu8H',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 60,
            
                'idproduct' => 9,
            
                'code' => 'iAIm6KZccc',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 61,
            
                'idproduct' => 9,
            
                'code' => 'xjExj6nVuz',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 62,
            
                'idproduct' => 9,
            
                'code' => 'LPZ52lFj7y',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 66,
            
                'idproduct' => 11,
            
                'code' => 'AHPYDm33T3',
            
                'price' => 20000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 67,
            
                'idproduct' => 11,
            
                'code' => 'm8Mn0NZbeL',
            
                'price' => 16000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 68,
            
                'idproduct' => 11,
            
                'code' => 'OXNzeAFufZ',
            
                'price' => 15000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 69,
            
                'idproduct' => 11,
            
                'code' => 'jq6HdMGe4c',
            
                'price' => 20000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 70,
            
                'idproduct' => 11,
            
                'code' => 'tadVVrfm3D',
            
                'price' => 16000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 71,
            
                'idproduct' => 11,
            
                'code' => 'ssuJ3AuEW5',
            
                'price' => 15000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 72,
            
                'idproduct' => 11,
            
                'code' => 'cGu4epKWY5',
            
                'price' => 20000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 73,
            
                'idproduct' => 11,
            
                'code' => 'YEvS7TXjdj',
            
                'price' => 16000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 74,
            
                'idproduct' => 11,
            
                'code' => 'yFdfzIPL0k',
            
                'price' => 15000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 75,
            
                'idproduct' => 11,
            
                'code' => '7EKtzDo5Ha',
            
                'price' => 20000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 76,
            
                'idproduct' => 11,
            
                'code' => 'St8FEmI5SX',
            
                'price' => 16000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 77,
            
                'idproduct' => 11,
            
                'code' => 'TsklVsy9sT',
            
                'price' => 15000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 78,
            
                'idproduct' => 12,
            
                'code' => 'aRlZRfP9l9',
            
                'price' => 20000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 79,
            
                'idproduct' => 12,
            
                'code' => 'EfrL43Wmln',
            
                'price' => 17000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 80,
            
                'idproduct' => 12,
            
                'code' => 'U4ylCJDsMb',
            
                'price' => 15000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 81,
            
                'idproduct' => 12,
            
                'code' => 'r7u5FkhoqX',
            
                'price' => 18000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 82,
            
                'idproduct' => 12,
            
                'code' => 'O1tirh4zpG',
            
                'price' => 21000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 83,
            
                'idproduct' => 12,
            
                'code' => 'Qv9CPZXTCl',
            
                'price' => 20000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 84,
            
                'idproduct' => 12,
            
                'code' => 'lKDKt9ImnN',
            
                'price' => 17000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 85,
            
                'idproduct' => 12,
            
                'code' => 'Xl5xPlXjny',
            
                'price' => 15000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 86,
            
                'idproduct' => 12,
            
                'code' => 'W60RQKLxyh',
            
                'price' => 18000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 87,
            
                'idproduct' => 12,
            
                'code' => 'jK8M0GUDd4',
            
                'price' => 21000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 88,
            
                'idproduct' => 12,
            
                'code' => 'tnUBQeDRiy',
            
                'price' => 20000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 89,
            
                'idproduct' => 12,
            
                'code' => 'IUAfzly7gr',
            
                'price' => 17000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 90,
            
                'idproduct' => 12,
            
                'code' => 'R2B5fSewam',
            
                'price' => 15000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 91,
            
                'idproduct' => 12,
            
                'code' => '7r4TPZpeGO',
            
                'price' => 18000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 92,
            
                'idproduct' => 12,
            
                'code' => 'FIKF2CQnqw',
            
                'price' => 21000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 93,
            
                'idproduct' => 12,
            
                'code' => 'ic8O6fUL0k',
            
                'price' => 20000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 94,
            
                'idproduct' => 12,
            
                'code' => 'Rxw3hcIrSs',
            
                'price' => 17000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 95,
            
                'idproduct' => 12,
            
                'code' => '5cufesja5M',
            
                'price' => 15000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 96,
            
                'idproduct' => 12,
            
                'code' => 'cdglbqU8L0',
            
                'price' => 18000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 97,
            
                'idproduct' => 12,
            
                'code' => 'x3G1kdoDwL',
            
                'price' => 21000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 98,
            
                'idproduct' => 13,
            
                'code' => 'DqfuTrHKCu',
            
                'price' => 12000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:57:16',
            
                'updated_at' => '2025-03-28 16:57:16',
            
            ],
            
            [
            
                'id' => 99,
            
                'idproduct' => 13,
            
                'code' => 'Fhv4OkCkmP',
            
                'price' => 12000,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 16:57:16',
            
                'updated_at' => '2025-03-28 16:57:16',
            
            ],
            
            [
            
                'id' => 100,
            
                'idproduct' => 15,
            
                'code' => 'mg22z5THTG',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 17:04:54',
            
                'updated_at' => '2025-03-28 17:04:54',
            
            ],
            
            [
            
                'id' => 101,
            
                'idproduct' => 15,
            
                'code' => 't1BEEG6O5K',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 17:04:54',
            
                'updated_at' => '2025-03-28 17:04:54',
            
            ],
            
            [
            
                'id' => 102,
            
                'idproduct' => 15,
            
                'code' => '6UT79oRV8Q',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 17:04:54',
            
                'updated_at' => '2025-03-28 17:04:54',
            
            ],
            
            [
            
                'id' => 103,
            
                'idproduct' => 15,
            
                'code' => 'OyirBIGKiY',
            
                'price' => null,
            
                'quantity' => 1000,
            
                'created_at' => '2025-03-28 17:04:54',
            
                'updated_at' => '2025-03-28 17:04:54',
            
            ],
        ]);
        DB::table('variant_option')->insert([
            [

                'id' => 1,
            
                'varant_attribute_id' => 1,
            
                'infor_option_id' => 1,
            
                'created_at' => '2025-03-28 14:55:45',
            
                'updated_at' => '2025-03-28 14:55:45',
            
            ],
            
            [
            
                'id' => 2,
            
                'varant_attribute_id' => 2,
            
                'infor_option_id' => 2,
            
                'created_at' => '2025-03-28 14:55:45',
            
                'updated_at' => '2025-03-28 14:55:45',
            
            ],
            
            [
            
                'id' => 3,
            
                'varant_attribute_id' => 3,
            
                'infor_option_id' => 3,
            
                'created_at' => '2025-03-28 14:55:45',
            
                'updated_at' => '2025-03-28 14:55:45',
            
            ],
            
            [
            
                'id' => 4,
            
                'varant_attribute_id' => 4,
            
                'infor_option_id' => 4,
            
                'created_at' => '2025-03-28 14:55:45',
            
                'updated_at' => '2025-03-28 14:55:45',
            
            ],
            
            [
            
                'id' => 5,
            
                'varant_attribute_id' => 5,
            
                'infor_option_id' => 5,
            
                'created_at' => '2025-03-28 14:55:45',
            
                'updated_at' => '2025-03-28 14:55:45',
            
            ],
            
            [
            
                'id' => 6,
            
                'varant_attribute_id' => 6,
            
                'infor_option_id' => 6,
            
                'created_at' => '2025-03-28 15:17:17',
            
                'updated_at' => '2025-03-28 15:17:17',
            
            ],
            
            [
            
                'id' => 7,
            
                'varant_attribute_id' => 7,
            
                'infor_option_id' => 7,
            
                'created_at' => '2025-03-28 15:17:17',
            
                'updated_at' => '2025-03-28 15:17:17',
            
            ],
            
            [
            
                'id' => 8,
            
                'varant_attribute_id' => 8,
            
                'infor_option_id' => 8,
            
                'created_at' => '2025-03-28 15:17:17',
            
                'updated_at' => '2025-03-28 15:17:17',
            
            ],
            
            [
            
                'id' => 9,
            
                'varant_attribute_id' => 9,
            
                'infor_option_id' => 9,
            
                'created_at' => '2025-03-28 15:17:17',
            
                'updated_at' => '2025-03-28 15:17:17',
            
            ],
            
            [
            
                'id' => 10,
            
                'varant_attribute_id' => 10,
            
                'infor_option_id' => 10,
            
                'created_at' => '2025-03-28 15:17:17',
            
                'updated_at' => '2025-03-28 15:17:17',
            
            ],
            
            [
            
                'id' => 11,
            
                'varant_attribute_id' => 11,
            
                'infor_option_id' => 11,
            
                'created_at' => '2025-03-28 15:21:55',
            
                'updated_at' => '2025-03-28 15:21:55',
            
            ],
            
            [
            
                'id' => 12,
            
                'varant_attribute_id' => 12,
            
                'infor_option_id' => 12,
            
                'created_at' => '2025-03-28 15:21:55',
            
                'updated_at' => '2025-03-28 15:21:55',
            
            ],
            
            [
            
                'id' => 13,
            
                'varant_attribute_id' => 13,
            
                'infor_option_id' => 13,
            
                'created_at' => '2025-03-28 15:21:55',
            
                'updated_at' => '2025-03-28 15:21:55',
            
            ],
            
            [
            
                'id' => 14,
            
                'varant_attribute_id' => 14,
            
                'infor_option_id' => 14,
            
                'created_at' => '2025-03-28 15:21:55',
            
                'updated_at' => '2025-03-28 15:21:55',
            
            ],
            
            [
            
                'id' => 15,
            
                'varant_attribute_id' => 15,
            
                'infor_option_id' => 15,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 16,
            
                'varant_attribute_id' => 19,
            
                'infor_option_id' => 15,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 17,
            
                'varant_attribute_id' => 15,
            
                'infor_option_id' => 16,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 18,
            
                'varant_attribute_id' => 20,
            
                'infor_option_id' => 16,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 19,
            
                'varant_attribute_id' => 15,
            
                'infor_option_id' => 17,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 20,
            
                'varant_attribute_id' => 21,
            
                'infor_option_id' => 17,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 21,
            
                'varant_attribute_id' => 15,
            
                'infor_option_id' => 18,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 22,
            
                'varant_attribute_id' => 22,
            
                'infor_option_id' => 18,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 23,
            
                'varant_attribute_id' => 16,
            
                'infor_option_id' => 19,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 24,
            
                'varant_attribute_id' => 20,
            
                'infor_option_id' => 19,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 25,
            
                'varant_attribute_id' => 16,
            
                'infor_option_id' => 20,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 26,
            
                'varant_attribute_id' => 21,
            
                'infor_option_id' => 20,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 27,
            
                'varant_attribute_id' => 16,
            
                'infor_option_id' => 21,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 28,
            
                'varant_attribute_id' => 22,
            
                'infor_option_id' => 21,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 29,
            
                'varant_attribute_id' => 17,
            
                'infor_option_id' => 22,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 30,
            
                'varant_attribute_id' => 19,
            
                'infor_option_id' => 22,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 31,
            
                'varant_attribute_id' => 17,
            
                'infor_option_id' => 23,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 32,
            
                'varant_attribute_id' => 21,
            
                'infor_option_id' => 23,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 33,
            
                'varant_attribute_id' => 17,
            
                'infor_option_id' => 24,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 34,
            
                'varant_attribute_id' => 22,
            
                'infor_option_id' => 24,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 35,
            
                'varant_attribute_id' => 18,
            
                'infor_option_id' => 25,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 36,
            
                'varant_attribute_id' => 19,
            
                'infor_option_id' => 25,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 37,
            
                'varant_attribute_id' => 18,
            
                'infor_option_id' => 26,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 38,
            
                'varant_attribute_id' => 20,
            
                'infor_option_id' => 26,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 39,
            
                'varant_attribute_id' => 18,
            
                'infor_option_id' => 27,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 40,
            
                'varant_attribute_id' => 21,
            
                'infor_option_id' => 27,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 41,
            
                'varant_attribute_id' => 18,
            
                'infor_option_id' => 28,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 42,
            
                'varant_attribute_id' => 22,
            
                'infor_option_id' => 28,
            
                'created_at' => '2025-03-28 15:46:45',
            
                'updated_at' => '2025-03-28 15:46:45',
            
            ],
            
            [
            
                'id' => 43,
            
                'varant_attribute_id' => 23,
            
                'infor_option_id' => 29,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 44,
            
                'varant_attribute_id' => 26,
            
                'infor_option_id' => 29,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 45,
            
                'varant_attribute_id' => 23,
            
                'infor_option_id' => 30,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 46,
            
                'varant_attribute_id' => 27,
            
                'infor_option_id' => 30,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 47,
            
                'varant_attribute_id' => 23,
            
                'infor_option_id' => 31,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 48,
            
                'varant_attribute_id' => 28,
            
                'infor_option_id' => 31,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 49,
            
                'varant_attribute_id' => 23,
            
                'infor_option_id' => 32,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 50,
            
                'varant_attribute_id' => 29,
            
                'infor_option_id' => 32,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 51,
            
                'varant_attribute_id' => 24,
            
                'infor_option_id' => 33,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 52,
            
                'varant_attribute_id' => 26,
            
                'infor_option_id' => 33,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 53,
            
                'varant_attribute_id' => 24,
            
                'infor_option_id' => 34,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 54,
            
                'varant_attribute_id' => 28,
            
                'infor_option_id' => 34,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 55,
            
                'varant_attribute_id' => 24,
            
                'infor_option_id' => 35,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 56,
            
                'varant_attribute_id' => 29,
            
                'infor_option_id' => 35,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 57,
            
                'varant_attribute_id' => 25,
            
                'infor_option_id' => 36,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 58,
            
                'varant_attribute_id' => 26,
            
                'infor_option_id' => 36,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 59,
            
                'varant_attribute_id' => 25,
            
                'infor_option_id' => 37,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 60,
            
                'varant_attribute_id' => 27,
            
                'infor_option_id' => 37,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 61,
            
                'varant_attribute_id' => 25,
            
                'infor_option_id' => 38,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 62,
            
                'varant_attribute_id' => 28,
            
                'infor_option_id' => 38,
            
                'created_at' => '2025-03-28 15:55:39',
            
                'updated_at' => '2025-03-28 15:55:39',
            
            ],
            
            [
            
                'id' => 63,
            
                'varant_attribute_id' => 30,
            
                'infor_option_id' => 39,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 64,
            
                'varant_attribute_id' => 32,
            
                'infor_option_id' => 39,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 65,
            
                'varant_attribute_id' => 30,
            
                'infor_option_id' => 40,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 66,
            
                'varant_attribute_id' => 33,
            
                'infor_option_id' => 40,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 67,
            
                'varant_attribute_id' => 30,
            
                'infor_option_id' => 41,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 68,
            
                'varant_attribute_id' => 34,
            
                'infor_option_id' => 41,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 69,
            
                'varant_attribute_id' => 30,
            
                'infor_option_id' => 42,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 70,
            
                'varant_attribute_id' => 35,
            
                'infor_option_id' => 42,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 71,
            
                'varant_attribute_id' => 31,
            
                'infor_option_id' => 43,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 72,
            
                'varant_attribute_id' => 32,
            
                'infor_option_id' => 43,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 73,
            
                'varant_attribute_id' => 31,
            
                'infor_option_id' => 44,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 74,
            
                'varant_attribute_id' => 33,
            
                'infor_option_id' => 44,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 75,
            
                'varant_attribute_id' => 31,
            
                'infor_option_id' => 45,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 76,
            
                'varant_attribute_id' => 34,
            
                'infor_option_id' => 45,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 77,
            
                'varant_attribute_id' => 31,
            
                'infor_option_id' => 46,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 78,
            
                'varant_attribute_id' => 35,
            
                'infor_option_id' => 46,
            
                'created_at' => '2025-03-28 16:00:06',
            
                'updated_at' => '2025-03-28 16:00:06',
            
            ],
            
            [
            
                'id' => 79,
            
                'varant_attribute_id' => 36,
            
                'infor_option_id' => 47,
            
                'created_at' => '2025-03-28 16:09:48',
            
                'updated_at' => '2025-03-28 16:09:48',
            
            ],
            
            [
            
                'id' => 80,
            
                'varant_attribute_id' => 37,
            
                'infor_option_id' => 48,
            
                'created_at' => '2025-03-28 16:09:48',
            
                'updated_at' => '2025-03-28 16:09:48',
            
            ],
            
            [
            
                'id' => 81,
            
                'varant_attribute_id' => 38,
            
                'infor_option_id' => 49,
            
                'created_at' => '2025-03-28 16:09:48',
            
                'updated_at' => '2025-03-28 16:09:48',
            
            ],
            
            [
            
                'id' => 82,
            
                'varant_attribute_id' => 39,
            
                'infor_option_id' => 50,
            
                'created_at' => '2025-03-28 16:09:48',
            
                'updated_at' => '2025-03-28 16:09:48',
            
            ],
            
            [
            
                'id' => 83,
            
                'varant_attribute_id' => 40,
            
                'infor_option_id' => 51,
            
                'created_at' => '2025-03-28 16:09:48',
            
                'updated_at' => '2025-03-28 16:09:48',
            
            ],
            
            [
            
                'id' => 84,
            
                'varant_attribute_id' => 41,
            
                'infor_option_id' => 52,
            
                'created_at' => '2025-03-28 16:13:47',
            
                'updated_at' => '2025-03-28 16:13:47',
            
            ],
            
            [
            
                'id' => 85,
            
                'varant_attribute_id' => 42,
            
                'infor_option_id' => 53,
            
                'created_at' => '2025-03-28 16:13:47',
            
                'updated_at' => '2025-03-28 16:13:47',
            
            ],
            
            [
            
                'id' => 86,
            
                'varant_attribute_id' => 43,
            
                'infor_option_id' => 54,
            
                'created_at' => '2025-03-28 16:13:47',
            
                'updated_at' => '2025-03-28 16:13:47',
            
            ],
            
            [
            
                'id' => 87,
            
                'varant_attribute_id' => 44,
            
                'infor_option_id' => 55,
            
                'created_at' => '2025-03-28 16:13:47',
            
                'updated_at' => '2025-03-28 16:13:47',
            
            ],
            
            [
            
                'id' => 88,
            
                'varant_attribute_id' => 45,
            
                'infor_option_id' => 56,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 89,
            
                'varant_attribute_id' => 46,
            
                'infor_option_id' => 56,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 90,
            
                'varant_attribute_id' => 45,
            
                'infor_option_id' => 57,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 91,
            
                'varant_attribute_id' => 47,
            
                'infor_option_id' => 57,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 92,
            
                'varant_attribute_id' => 45,
            
                'infor_option_id' => 58,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 93,
            
                'varant_attribute_id' => 49,
            
                'infor_option_id' => 58,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 94,
            
                'varant_attribute_id' => 45,
            
                'infor_option_id' => 59,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 95,
            
                'varant_attribute_id' => 50,
            
                'infor_option_id' => 59,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 96,
            
                'varant_attribute_id' => 45,
            
                'infor_option_id' => 60,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 97,
            
                'varant_attribute_id' => 51,
            
                'infor_option_id' => 60,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 98,
            
                'varant_attribute_id' => 45,
            
                'infor_option_id' => 61,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 99,
            
                'varant_attribute_id' => 53,
            
                'infor_option_id' => 61,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 100,
            
                'varant_attribute_id' => 45,
            
                'infor_option_id' => 62,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 101,
            
                'varant_attribute_id' => 54,
            
                'infor_option_id' => 62,
            
                'created_at' => '2025-03-28 16:18:39',
            
                'updated_at' => '2025-03-28 16:18:39',
            
            ],
            
            [
            
                'id' => 105,
            
                'varant_attribute_id' => 58,
            
                'infor_option_id' => 66,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 106,
            
                'varant_attribute_id' => 62,
            
                'infor_option_id' => 66,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 107,
            
                'varant_attribute_id' => 58,
            
                'infor_option_id' => 67,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 108,
            
                'varant_attribute_id' => 63,
            
                'infor_option_id' => 67,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 109,
            
                'varant_attribute_id' => 58,
            
                'infor_option_id' => 68,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 110,
            
                'varant_attribute_id' => 64,
            
                'infor_option_id' => 68,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 111,
            
                'varant_attribute_id' => 59,
            
                'infor_option_id' => 69,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 112,
            
                'varant_attribute_id' => 62,
            
                'infor_option_id' => 69,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 113,
            
                'varant_attribute_id' => 59,
            
                'infor_option_id' => 70,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 114,
            
                'varant_attribute_id' => 63,
            
                'infor_option_id' => 70,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 115,
            
                'varant_attribute_id' => 59,
            
                'infor_option_id' => 71,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 116,
            
                'varant_attribute_id' => 64,
            
                'infor_option_id' => 71,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 117,
            
                'varant_attribute_id' => 60,
            
                'infor_option_id' => 72,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 118,
            
                'varant_attribute_id' => 62,
            
                'infor_option_id' => 72,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 119,
            
                'varant_attribute_id' => 60,
            
                'infor_option_id' => 73,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 120,
            
                'varant_attribute_id' => 63,
            
                'infor_option_id' => 73,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 121,
            
                'varant_attribute_id' => 60,
            
                'infor_option_id' => 74,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 122,
            
                'varant_attribute_id' => 64,
            
                'infor_option_id' => 74,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 123,
            
                'varant_attribute_id' => 61,
            
                'infor_option_id' => 75,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 124,
            
                'varant_attribute_id' => 62,
            
                'infor_option_id' => 75,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 125,
            
                'varant_attribute_id' => 61,
            
                'infor_option_id' => 76,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 126,
            
                'varant_attribute_id' => 63,
            
                'infor_option_id' => 76,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 127,
            
                'varant_attribute_id' => 61,
            
                'infor_option_id' => 77,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 128,
            
                'varant_attribute_id' => 64,
            
                'infor_option_id' => 77,
            
                'created_at' => '2025-03-28 16:32:34',
            
                'updated_at' => '2025-03-28 16:32:34',
            
            ],
            
            [
            
                'id' => 129,
            
                'varant_attribute_id' => 65,
            
                'infor_option_id' => 78,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 130,
            
                'varant_attribute_id' => 69,
            
                'infor_option_id' => 78,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 131,
            
                'varant_attribute_id' => 65,
            
                'infor_option_id' => 79,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 132,
            
                'varant_attribute_id' => 70,
            
                'infor_option_id' => 79,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 133,
            
                'varant_attribute_id' => 65,
            
                'infor_option_id' => 80,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 134,
            
                'varant_attribute_id' => 71,
            
                'infor_option_id' => 80,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 135,
            
                'varant_attribute_id' => 65,
            
                'infor_option_id' => 81,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 136,
            
                'varant_attribute_id' => 72,
            
                'infor_option_id' => 81,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 137,
            
                'varant_attribute_id' => 65,
            
                'infor_option_id' => 82,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 138,
            
                'varant_attribute_id' => 73,
            
                'infor_option_id' => 82,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 139,
            
                'varant_attribute_id' => 66,
            
                'infor_option_id' => 83,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 140,
            
                'varant_attribute_id' => 69,
            
                'infor_option_id' => 83,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 141,
            
                'varant_attribute_id' => 66,
            
                'infor_option_id' => 84,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 142,
            
                'varant_attribute_id' => 70,
            
                'infor_option_id' => 84,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 143,
            
                'varant_attribute_id' => 66,
            
                'infor_option_id' => 85,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 144,
            
                'varant_attribute_id' => 71,
            
                'infor_option_id' => 85,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 145,
            
                'varant_attribute_id' => 66,
            
                'infor_option_id' => 86,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 146,
            
                'varant_attribute_id' => 72,
            
                'infor_option_id' => 86,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 147,
            
                'varant_attribute_id' => 66,
            
                'infor_option_id' => 87,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 148,
            
                'varant_attribute_id' => 73,
            
                'infor_option_id' => 87,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 149,
            
                'varant_attribute_id' => 67,
            
                'infor_option_id' => 88,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 150,
            
                'varant_attribute_id' => 69,
            
                'infor_option_id' => 88,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 151,
            
                'varant_attribute_id' => 67,
            
                'infor_option_id' => 89,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 152,
            
                'varant_attribute_id' => 70,
            
                'infor_option_id' => 89,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 153,
            
                'varant_attribute_id' => 67,
            
                'infor_option_id' => 90,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 154,
            
                'varant_attribute_id' => 71,
            
                'infor_option_id' => 90,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 155,
            
                'varant_attribute_id' => 67,
            
                'infor_option_id' => 91,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 156,
            
                'varant_attribute_id' => 72,
            
                'infor_option_id' => 91,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 157,
            
                'varant_attribute_id' => 67,
            
                'infor_option_id' => 92,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 158,
            
                'varant_attribute_id' => 73,
            
                'infor_option_id' => 92,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 159,
            
                'varant_attribute_id' => 68,
            
                'infor_option_id' => 93,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 160,
            
                'varant_attribute_id' => 69,
            
                'infor_option_id' => 93,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 161,
            
                'varant_attribute_id' => 68,
            
                'infor_option_id' => 94,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 162,
            
                'varant_attribute_id' => 70,
            
                'infor_option_id' => 94,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 163,
            
                'varant_attribute_id' => 68,
            
                'infor_option_id' => 95,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 164,
            
                'varant_attribute_id' => 71,
            
                'infor_option_id' => 95,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 165,
            
                'varant_attribute_id' => 68,
            
                'infor_option_id' => 96,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 166,
            
                'varant_attribute_id' => 72,
            
                'infor_option_id' => 96,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 167,
            
                'varant_attribute_id' => 68,
            
                'infor_option_id' => 97,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 168,
            
                'varant_attribute_id' => 73,
            
                'infor_option_id' => 97,
            
                'created_at' => '2025-03-28 16:41:54',
            
                'updated_at' => '2025-03-28 16:41:54',
            
            ],
            
            [
            
                'id' => 169,
            
                'varant_attribute_id' => 74,
            
                'infor_option_id' => 98,
            
                'created_at' => '2025-03-28 16:57:16',
            
                'updated_at' => '2025-03-28 16:57:16',
            
            ],
            
            [
            
                'id' => 170,
            
                'varant_attribute_id' => 75,
            
                'infor_option_id' => 99,
            
                'created_at' => '2025-03-28 16:57:16',
            
                'updated_at' => '2025-03-28 16:57:16',
            
            ],
            
            [
            
                'id' => 171,
            
                'varant_attribute_id' => 76,
            
                'infor_option_id' => 100,
            
                'created_at' => '2025-03-28 17:04:54',
            
                'updated_at' => '2025-03-28 17:04:54',
            
            ],
            
            [
            
                'id' => 172,
            
                'varant_attribute_id' => 77,
            
                'infor_option_id' => 101,
            
                'created_at' => '2025-03-28 17:04:54',
            
                'updated_at' => '2025-03-28 17:04:54',
            
            ],
            
            [
            
                'id' => 173,
            
                'varant_attribute_id' => 78,
            
                'infor_option_id' => 102,
            
                'created_at' => '2025-03-28 17:04:54',
            
                'updated_at' => '2025-03-28 17:04:54',
            
            ],
            
            [
            
                'id' => 174,
            
                'varant_attribute_id' => 79,
            
                'infor_option_id' => 103,
            
                'created_at' => '2025-03-28 17:04:54',
            
                'updated_at' => '2025-03-28 17:04:54',
            
            ],
        ]);
    }
}