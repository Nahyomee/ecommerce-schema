<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vendor;
use App\Models\VendorReview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = User::where('role', 'customer')->get();
        $vendors = Vendor::all();

        foreach ($vendors as $vendor) {
            foreach ($customers->random(3) as $customer) {
                VendorReview::create([
                    'vendor_id' => $vendor->id,
                    'user_id' => $customer->id,
                    'rating' => fake()->numberBetween(1, 5),
                    'comment' => fake()->sentence(),
                ]);
            }
        }
    }
}
