<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Customers
        User::factory()->count(10)->create();

        //Vendors
        User::factory()->count(5)->create(['role' => 'vendor']);

    }
}
