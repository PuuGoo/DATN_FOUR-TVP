<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderSeeder extends Seeder {
    public function run() {

        DB::table('orders')->insert([
            [

                'id' => 4,
            
                'user_id' => 7,
            
                'coupon_id' => null,
            
                'name' => 'Nami',
            
                'email' => 'nami@gmail.com',
            
                'phone' => '578409',
            
                'address' => 'xã bà chưng',
            
                'notes' => 'null',
            
                'payment_method' => 'COD',
            
                'transaction_id' => 'null',
            
                'amount' => 4,
            
                'discount_amount' => null,
            
                'order_number' => '0',
            
                'invoice_no' => '2LEGqkFZBhDMyjsC1KUIYmgkpwSDfM',
            
                'status' => 'pending',
            
                'date' => '2025-03-29',
            
                'return_reason' => 'null',
            
                'return_order' => 0,
            
                'created_at' => '2025-03-28 18:58:31',
            
                'updated_at' => '2025-03-28 18:58:31',
            
            ],
            
            [
            
                'id' => 5,
            
                'user_id' => 7,
            
                'coupon_id' => null,
            
                'name' => 'Nami',
            
                'email' => 'nami@gmail.com',
            
                'phone' => '578409',
            
                'address' => 'xã ông hổ',
            
                'notes' => 'null',
            
                'payment_method' => 'COD',
            
                'transaction_id' => 'null',
            
                'amount' => 3,
            
                'discount_amount' => null,
            
                'order_number' => '0',
            
                'invoice_no' => 'B9GqkFGGWnL1DKuefTwMt3MS2mh3BS',
            
                'status' => 'pending',
            
                'date' => '2025-03-29',
            
                'return_reason' => 'GG',
            
                'return_order' => 1,
            
                'created_at' => '2025-03-28 19:00:46',
            
                'updated_at' => '2025-03-28 19:00:46',
            
            ],
            
            [
            
                'id' => 6,
            
                'user_id' => 8,
            
                'coupon_id' => null,
            
                'name' => 'Hisito',
            
                'email' => 'hisito@gmail.com',
            
                'phone' => '578409',
            
                'address' => 'chợ mới',
            
                'notes' => 'null',
            
                'payment_method' => 'COD',
            
                'transaction_id' => 'null',
            
                'amount' => 7,
            
                'discount_amount' => null,
            
                'order_number' => '0',
            
                'invoice_no' => 'cjHCFPqj9amE4R0hPc5ZuReWrZNyjV',
            
                'status' => 'pending',
            
                'date' => '2025-03-29',
            
                'return_reason' => 'null',
            
                'return_order' => 0,
            
                'created_at' => '2025-03-28 19:12:41',
            
                'updated_at' => '2025-03-28 19:12:41',
            
            ],
            
            [
            
                'id' => 7,
            
                'user_id' => 8,
            
                'coupon_id' => null,
            
                'name' => 'Hisito',
            
                'email' => 'hisito@gmail.com',
            
                'phone' => '578409',
            
                'address' => 'campuchia',
            
                'notes' => 'null',
            
                'payment_method' => 'COD',
            
                'transaction_id' => 'null',
            
                'amount' => 2,
            
                'discount_amount' => null,
            
                'order_number' => '0',
            
                'invoice_no' => 'P80EbxI6wwJ4TAUBN9QlxvX8xR5rGq',
            
                'status' => 'pending',
            
                'date' => '2025-03-29',
            
                'return_reason' => 'No money',
            
                'return_order' => 1,
            
                'created_at' => '2025-03-28 19:13:39',
            
                'updated_at' => '2025-03-28 19:13:39',
            
            ],
            
            [
            
                'id' => 8,
            
                'user_id' => 9,
            
                'coupon_id' => null,
            
                'name' => 'Kaito kid',
            
                'email' => 'kaitokid@gmail.com',
            
                'phone' => '578409',
            
                'address' => 'quận one',
            
                'notes' => 'null',
            
                'payment_method' => 'COD',
            
                'transaction_id' => 'null',
            
                'amount' => 2,
            
                'discount_amount' => null,
            
                'order_number' => '0',
            
                'invoice_no' => 'Vgx7BU9aPzAHTVSyVvZGlL6sHPnsHN',
            
                'status' => 'pending',
            
                'date' => '2025-03-29',
            
                'return_reason' => 'null',
            
                'return_order' => 0,
            
                'created_at' => '2025-03-28 19:17:44',
            
                'updated_at' => '2025-03-28 19:17:44',
            
            ],
        ]);
    }
}
