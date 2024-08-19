<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sections\LoanAppForm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LoanAppFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LoanAppForm::create([
            'first_step_title' => 'Personal Details',
            'second_step_title' => 'Account Details',
            'third_step_title' => 'Upload Documents',
            'fourth_step_title' => 'Setup Complete',
            'page_section_id' => 10,
        ]);
    }
}
