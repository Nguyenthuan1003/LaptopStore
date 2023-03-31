<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_details')->insert([
            [
                'order_id' => 1,
                'product_id' => 1,
                'quantity' => 1,
                'price' => 58000000,
                'voucher_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 1,
                'product_id' => 2,
                'quantity' => 1,
                'price' => 40200000,
                'voucher_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 2,
                'product_id' => 1,
                'quantity' => 1,
                'price' => 58000000,
                'voucher_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 3,
                'product_id' => 1,
                'quantity' => 1,
                'price' => 58000000,
                'voucher_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
