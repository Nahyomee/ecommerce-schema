<?php

namespace Database\Seeders;

use App\Models\CustomerAddress;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = User::where('role', 'customer')->get();

        foreach ($customers as $customer) {
            CustomerAddress::create([
                'user_id' => $customer->id,
                'type' => 'Billing',
                'name' => 'Home',
                'address_line1' => fake()->streetAddress(),
                'address_line2' => fake()->secondaryAddress(),
                'city' => fake()->city(),
                'state' => fake()->state(),
                'postal_code' => fake()->postcode(),
                'country' => fake()->country(),
                'phone_number' => fake()->phoneNumber(),
                'is_default' => true,
            ]);
        }
    }
}
