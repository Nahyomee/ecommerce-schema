<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();

        foreach ($products as $product) {
            for ($i = 1; $i <= 2; $i++) {
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => fake()->imageUrl(640, 480, 'products', true),
                ]);
            }
        }
    }
}
