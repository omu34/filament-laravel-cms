<?php

namespace Database\Seeders;

use Faker\Provider\ar_EG\Text;
use Illuminate\Database\Seeder;
use App\Models\Sections\TextLeftImageRight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TextLeftImageRightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TextLeftImageRight::create([
            'title' => 'Requirements',
            'description' => <<<TEXT
                <ul>
                    <li>Copies of identification</li>
                    <li>Invoices and/or importation documents</li>
                    <li>Copy of KRA PIN</li>
                </ul>
            TEXT,
            'image' => 'images/home-requirements-img-min-webp.webp',
            'page_section_id' => 4,
        ]);
    }
}
