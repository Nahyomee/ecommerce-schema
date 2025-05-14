<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = User::where('role', 'customer')->get();
        $products = Product::all();

        foreach ($products->take(5) as $product) {
            foreach ($customers->random(2) as $customer) {
                Review::create([
                    'product_id' => $product->id,
                    'user_id' => $customer->id,
                    'rating' => rand(1, 5),
                    'comment' => fake()->sentence(),
                ]);
            }
        }
    }
}
