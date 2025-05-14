<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Electronics', 'Fashion', 'Books', 'Home & Kitchen', 'Beauty'];

        foreach ($categories as $name) {
            Category::create([
                'name' => $name,
                'slug' => str()->slug($name),
            ]);
        }
    }
}
