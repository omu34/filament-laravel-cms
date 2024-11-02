<?php

namespace Database\Seeders;

use App\Models\Sections\NewsLetterSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsLetterSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NewsLetterSection::create([
            'title' => 'Subscribe Our Newsletter',
            'description' => <<<TEXT
                                 Our law firm offers expert legal services . With a team of skilled
                        attorneys, we provide personalized guidance and strategic advice
                        to ensure the best possible outcomes for our clients.
            TEXT,
            'button_text' => 'Subscribe',
            'bottom' => 'subscribe to inquire us',
            'page_section_id' => 3,
        ]);
    }
}
