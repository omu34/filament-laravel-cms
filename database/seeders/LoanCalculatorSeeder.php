<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sections\LoanCalculator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LoanCalculatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LoanCalculator::create([
            'title' => 'Loan Calculator',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dui accumsan sit amet nulla facilisi morbi.',
            'page_section_id' => 5,
        ]);
    }
}
