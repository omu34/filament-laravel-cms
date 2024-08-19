<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sections\CenteredCtaText;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CenteredCtaTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CenteredCtaText::create([
            'title' => 'Get Asset Financing with Us',
            'description' => 'This is a self-securing loan product for the financing of moveable assets. It offers great flexibility and helps applicants free up cash by enabling them to acquire assets with minimum fuss. Co-op Insurance Financing is made available for the assets purchased, with the option of renewing it periodically over the duration of the facility and beyond.',
            'page_section_id' => 2,
        ]);

        CenteredCtaText::create([
            'title' => 'Loan Application Process',
            'description' => 'Please enter all your details below. We save your input progressively in case you close the tab or lose your internet connection, you can proceed from where you left off.',
            'page_section_id' => 9,
        ]);
    }
}
