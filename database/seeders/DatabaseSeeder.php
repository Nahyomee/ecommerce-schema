<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Wishlist;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     
        $this->call([
           
            UserSeeder::class,
            VendorSeeder::class,
            CustomerAddressSeeder::class,

            CategorySeeder::class,
            ProductSeeder::class,
            ProductImageSeeder::class,
            ProductVariantSeeder::class,

            CouponSeeder::class,

            CartSeeder::class,
            OrderSeeder::class,
            PaymentSeeder::class,
            
            ReviewSeeder::class,
            WishlistSeeder::class,
            VendorReviewSeeder::class,

        ]);
    }
}
