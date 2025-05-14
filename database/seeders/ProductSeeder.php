<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendors = Vendor::all();
        $categories = Category::all();

        foreach ($vendors as $vendor) {
            Product::factory()->count(5)->create([
                'vendor_id' => $vendor->id,
                'category_id' => $categories->random()->id,
            ]);
        }
    }
}
