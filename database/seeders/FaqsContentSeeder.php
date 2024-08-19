<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sections\FaqsContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FaqsContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FaqsContent::create([
            'title' => 'FAQs',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna',
            'page_section_id' => 7,
        ]);

        FaqsContent::create([
            'title' => 'FAQs',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna',
            'page_section_id' => 12,
        ]);
    }
}
