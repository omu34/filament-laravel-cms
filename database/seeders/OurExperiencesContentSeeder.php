<?php

namespace Database\Seeders;

use App\Models\Content\OurExperiencesContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OurExperiencesContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $experiences = [
            [
                'name' => 'Procurement',
                'button_url' => '/procurement',
                'button_text' => 'Explore',
                'image' => '/public/images/procurement.jpg',
                'page_section_id' => 3

            ],
            [
                'name' => 'Environment',
                'button_url' => '/environment',
                'button_text' => 'Explore',
                'page_section_id' => 3,
                'image' => '/public/images/environment.jpg',

            ],
            [
                'name' => 'Health',
                'button_url' => '/health',
                'button_text' => 'Explore',
                'page_section_id' => 3,
                'image' => '/public/images/health.jpg',
            ],
            [
                'name' => 'Securities',
                'button_url' => '/banking',
                'button_text' => 'Explore',
                'page_section_id' => 3,
                'image' => '/public/images/securities.jpg',
            ],
            [
                'name' => 'Finance',
                'button_url' => '/finance',
                'button_text' => 'Explore',
                'page_section_id' => 3,
                'image' => '/public/images/securities',
            ],
            [
                'name' => 'Procurement',
                'button_url' => '/procurement',
                'button_text' => 'Explore',
                'page_section_id' => 3,
                'image' => '/public/images/home-banner-min-webp.webp',
            ],
            [
                'name' => 'Procurement',
                'button_url' => '/procurement',
                'button_text' => 'Explore',
                'page_section_id' => 3,
                'image' => '/public/images/procurement.jpg',
            ],
        ];

        foreach ($experiences as $experience) {
            OurExperiencesContent::create($experience);
        }
    }
}
