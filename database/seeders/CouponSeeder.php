<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coupon::create([
            'code' => 'WELCOME10',
            'type' => 'percent',
            'value' => 10,
            'min_order_amount' => 5000,
            'usage_limit' => 100,
            'used' => 0,
            'valid_from' => now()->subDays(1),
            'valid_until' => now()->addDays(30),
        ]);

        Coupon::create([
            'code' => 'PROMO50',
            'type' => 'fixed',
            'value' => 1000,
            'min_order_amount' => 10000,
            'usage_limit' => 50,
            'used' => 0,
            'valid_from' => now()->subDays(5),
            'valid_until' => now()->addDays(15),
        ]);
    }
}
