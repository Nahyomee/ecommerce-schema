<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = \App\Models\Order::all();

        foreach ($orders as $order) {
            Payment::create([
                'order_id' => $order->id,
                'payment_method' => fake()->randomElement(['card', 'paypal', 'bank_transfer']),
                'payment_reference' => strtoupper(fake()->bothify('TXN###??##')),
                'amount' => $order->total,
                'status' => 'paid',
                'paid_at' => now()->subDays(rand(0, 10)),
            ]);
        }
    }
}
