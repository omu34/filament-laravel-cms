<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Loans\Application;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Application::create([
            'reference_number' => '746757453',
            'dealer_id' => 1,
            'agent_id' => 1,
            'customer_id' => 1,
            'amount' => 100000,
            'premium_financing' => 'yes',
            'insurance_company_id' => 1,
            'status' => 'pending',
        ]);

        Application::create([
            'reference_number' => '746757463',
            'dealer_id' => 1,
            'agent_id' => 1,
            'customer_id' => 1,
            'amount' => 1500000,
            'premium_financing' => 'yes',
            'insurance_company_id' => 1,
            'status' => 'pending',
        ]);

        Application::create([
            'reference_number' => '746757473',
            'dealer_id' => 1,
            'agent_id' => 1,
            'customer_id' => 1,
            'amount' => 100000,
            'premium_financing' => 'yes',
            'insurance_company_id' => 1,
            'status' => 'approved',
        ]);

        Application::create([
            'reference_number' => '746757483',
            'dealer_id' => 1,
            'agent_id' => 1,
            'customer_id' => 1,
            'amount' => 200000,
            'premium_financing' => 'yes',
            'insurance_company_id' => 1,
            'status' => 'approved',
        ]);

        Application::create([
            'reference_number' => '746757493',
            'dealer_id' => 1,
            'agent_id' => 1,
            'customer_id' => 1,
            'amount' => 100000,
            'premium_financing' => 'yes',
            'insurance_company_id' => 1,
            'status' => 'denied',
        ]);

        Application::create([
            'reference_number' => '746757503',
            'dealer_id' => 1,
            'agent_id' => 1,
            'customer_id' => 1,
            'amount' => 100000,
            'premium_financing' => 'yes',
            'insurance_company_id' => 1,
            'status' => 'denied',
        ]);
    }
}
