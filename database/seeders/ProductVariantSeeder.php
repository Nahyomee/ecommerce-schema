<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();

        foreach ($products as $product) {
            ProductVariant::create([
                'product_id' => $product->id,
                'name' => 'Small',
                'price' => fake()->randomFloat(2, 10, 100),
                'stock' => fake()->numberBetween(5, 50),
                'sku' => strtoupper('SKU-' . fake()->unique()->word()),
            ]);

            ProductVariant::create([
                'product_id' => $product->id,
                'name' => 'Large',
                'price' => fake()->randomFloat(2, 15, 150),
                'stock' => fake()->numberBetween(5, 50),
                'sku' => strtoupper('SKU-' . fake()->unique()->word()),
            ]);
        }
    }
}
