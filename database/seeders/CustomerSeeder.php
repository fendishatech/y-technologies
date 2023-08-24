<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Customer::create(
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'phone_no' => '1234567890',
            ]
        );
        Customer::create(
            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'phone_no' => '9876543210',
            ],
        );
    }
}
