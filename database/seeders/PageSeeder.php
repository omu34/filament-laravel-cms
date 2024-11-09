<?php

namespace Database\Seeders;

use App\Models\Pages\Page;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::create([
            'name' => 'Home',
            'slug' => 'home',
            'order' => 1,
            'in_top_nav' => false,
            'description' => 'This is the home page.',
            'keywords' => 'home, page, description',
            'meta' => 'This is the home page.',
            'thumbnail' => 'placeholder.png',
        ]);

        // Page::create([
        //     'name' => 'Start',
        //     'slug' => 'homepage',
        //     'order' => 2,
        //     'in_top_nav' => false,
        //     'description' => 'This is the home page.',
        //     'keywords' => 'home, page, description',
        //     'meta' => 'This is the home page.',
        //     'thumbnail' => 'placeholder.png',
        // ]);

        // Page::create([
        //     // 'display_name' => 'Start App',
        //     'name' => 'Start Application', // TODO: Change to 'Application'
        //     'slug' => 'application',
        //     'order' => 2,
        //     'in_top_nav' => true,
        //     'description' => 'This is the application page.',
        //     'keywords' => 'application, page, description',
        //     'meta' => 'This is the application page.',
        //     'thumbnail' => 'placeholder.png',
        // ]);

        // Page::create([
        //     'name' => 'FAQs',
        //     'slug' => 'faqs',
        //     'order' => 3,
        //     'in_top_nav' => true,
        //     'description' => 'This is the faqs page.',
        //     'keywords' => 'faqs, page, description',
        //     'meta' => 'This is the faqs page.',
        //     'thumbnail' => 'placeholder.png',
        // ]);

        // Page::create([
        //     'name' => 'Terms & Conditions',
        //     'slug' => 'terms',
        //     'order' => 4,
        //     'in_top_nav' => true,
        //     'description' => 'This is the terms page.',
        //     'keywords' => 'terms, page, description',
        //     'meta' => 'This is the terms page.',
        //     'thumbnail' => 'placeholder.png',
        // ]);


        Page::create([
            'name' => 'About Us',
            'slug' => 'about-us',
            'order' => 2,
            'in_top_nav' => true,
            'description' => 'This is the about us page.',
            'keywords' => 'about us, page, description',
            'meta' => 'This is the about us page.',
            'thumbnail' => 'placeholder.png',
        ]);

        Page::create([
            'name' => 'Contact Us',
            'slug' => 'contact-us',
            'order' => 3,
            'in_top_nav' => true,
            'description' => 'This is the contact us page.',
            'keywords' => 'contact us, page, description',
            'meta' => 'This is the contact us page.',
            'thumbnail' => 'placeholder.png',
        ]);

        Page::create([
            'name' => 'Legal Speak',
            'slug' => 'legal-speak',
            'order' => 4,
            'in_top_nav' => true,
            'description' => 'This is the legal speak page.',
            'keywords' => 'legal speak, page, description',
            'meta' => 'This is the legal speak page.',
            'thumbnail' => 'placeholder.png',
        ]);

        Page::create([
            'name' => 'Area of Practice',
            'slug' => 'area-of-practice',
            'order' => 5,
            'in_top_nav' => true,
            'description' => 'This is the contact us page.',
            'keywords' => 'contact us, page, description',
            'meta' => 'This is the contact us page.',
            'thumbnail' => 'placeholder.png',
        ]);

        // Page::create([
        //     'name' => 'procurement',
        //     'slug' => 'procurement',
        //     // 'order' => 6,
        //     'in_top_nav' => true,
        //     'description' => 'This is the contact us page.',
        //     'keywords' => 'contact us, page, description',
        //     'meta' => 'This is the contact us page.',
        //     'thumbnail' => 'placeholder.png',
        // ]);
    }
}
