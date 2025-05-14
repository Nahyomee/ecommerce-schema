<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = User::where('role', 'customer')->get();

        foreach ($customers as $customer) {
            $cart = Cart::create([
                'user_id' => $customer->id,
            ]);

            $products = Product::inRandomOrder()->take(2)->get();

            foreach ($products as $product) {
                $variant = $product->variants()->inRandomOrder()->first();

                CartItem::create([
                    'cart_id' => $cart->id,
                    'product_id' => $product->id,
                    'product_variant_id' => $variant?->id,
                    'quantity' => fake()->numberBetween(1, 3),
                ]);
            }
        }
    }
}
