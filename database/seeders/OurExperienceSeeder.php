<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Content\OurExperience;

class OurExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OurExperience::create([
            'name' => 'Procurement',
            'button_url' => '/procurement',
            'button_text' => 'Explore',
            'image' => '/public/images/procurement.jpg',
        ]);

        OurExperience::create([
            'name' => 'Environment',
            'button_url' => '/environment',
            'button_text' => 'Explore',
            'image' => '/public/images/environment.jpg',
        ]);

        OurExperience::create([
            'name' => 'Health',
            'button_url' => '/health',
            'button_text' => 'Explore',
            'image' => '/public/images/health.jpg',
        ]);
        OurExperience::create([
            'name' => 'Securities',
            'button_url' => '/banking',
            'button_text' => 'Explore',
            'image' => '/public/images/securities.jpg',
        ]);
        OurExperience::create([
            'name' => 'Finance',
            'button_url' => '/finance',
            'button_text' => 'Explore',
            'image' => '/public/images/securities',
        ]);
        OurExperience::create([
            'name' => 'Procurement',
            'button_url' => '/procurement',
            'button_text' => 'Explore',
            'image' => '/public/images/home-banner-min-webp.webp',
        ]);
        OurExperience::create([
            'name' => 'Procurement',
            'button_url' => '/procurement',
            'button_text' => 'Explore',
            'image' => '/public/images/procurement.jpg',
        ]);
    }
}
