<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vendor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendors = User::where('role', 'vendor')->get();

        foreach ($vendors as $vendor) {
            Vendor::create([
                'user_id' => $vendor->id,
                'shop_name' => fake()->company(),
                'description' => fake()->paragraph(),
                'address' => fake()->address(),
                'logo' => fake()->imageUrl()
            ]);
        }
    }
}
