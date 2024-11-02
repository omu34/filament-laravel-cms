<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sections\AboutUsSection;

class AboutUsSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutUsSection::create([
            'title' => 'About Masika & Koross ',
            'description' => <<<TEXT
            We are a medium-sized law firm established and registered in the Republic of Kenya in 2007. We are configured to deliver the highest quality services to our clients regardless of the complexity of the legal issues.
            TEXT,
            'button_text' => 'Learn More',
            'button_url' => '/about',
            'image' => '/public/images/about-us.jpg',
            'page_section_id' => 2,
        ]);
    }
}
