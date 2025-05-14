<?php

namespace Database\Seeders;

use App\Models\Coupon;
use App\Models\CustomerAddress;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = User::where('role', 'customer')->get();
        $coupons = Coupon::all();

        foreach ($customers as $customer) {
            $address = CustomerAddress::where('user_id', $customer->id)->first();
            $order = Order::create([
                'user_id' => $customer->id,
                'address_name' => $address->name,
                'address_line1' => $address->address_line1,
                'address_line2' => $address->address_line2,
                'city' => $address->city,
                'state' => $address->state,
                'postal_code' => $address->postal_code,
                'country' => $address->country,
                'phone_number' => $address->phone_number,
                'status' => 'pending',
                'total' => 0,
                'created_at' => now()->subDays(rand(1, 10)),
            ]);
            $products = Product::inRandomOrder()->take(2)->get();
            $total = 0;

            foreach ($products as $product) {
                $variant = $product->variants()->inRandomOrder()->first();
                $qty = rand(1, 3);
                $price = $variant ? $variant->price : $product->price;

                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'product_variant_id' => $variant?->id,
                    'product_name' => $product->name,
                    'variant_name' => $variant?->name,
                    'quantity' => $qty,
                    'price' => $price,
                ]);

                $total += $qty * $price;
            }

            $order->update(['total' => $total]);
        }
    }
}
