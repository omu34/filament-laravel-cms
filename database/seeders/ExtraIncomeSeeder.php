<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Loans\ExtraIncome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExtraIncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExtraIncome::create([
            'customer_id' => 1,
            'source' => 'Side Hustle',
            'amount' => 100000,
        ]);

        ExtraIncome::create([
            'customer_id' => 1,
            'source' => 'Poultry Farming',
            'amount' => 250000,
        ]);
    }
}
