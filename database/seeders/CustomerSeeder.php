<?php

namespace Database\Seeders;

use App\Models\Loans\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'user_id' => 4,
            'id_number' => '3784545353',
            'type' => 'existing',
            'branch_id' => 1,
            'kra_pin' => '2345435453',
            'income_source' => 'business',
            'business_type' => 'partnership',
            'monthly_income' => 100000,
            'extra_income' => true,
        ]);
    }
}
