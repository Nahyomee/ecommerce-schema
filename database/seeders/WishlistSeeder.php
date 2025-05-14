<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WishlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = User::where('role', 'customer')->get();
        $products = Product::all();

        foreach ($customers as $customer) {
            foreach($products->random(2) as $product){
                Wishlist::create([
                    'user_id' => $customer->id,
                    'product_id' => $product->id
                ]);
            }
        }
    }
}
