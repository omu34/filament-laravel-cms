<?php

namespace Database\Seeders;

use App\Models\Sections\Banner;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'title' => 'Asset Finance',
            'description' => 'Get Asset Financing with us which offers you great flexibility as you acquire assets.',
            'image' => 'images/home-banner-min-webp.webp',
            'page_section_id' => 1,
        ]);

        Banner::create([
            'title' => 'Asset Finance Application',
            'description' => 'Get Asset Financing with us which offers you great flexibility as you acquire assets.',
            'image' => 'images/faqs-banner-min-webp.webp',
            'page_section_id' => 8,
        ]);

        Banner::create([
            'title' => 'FAQs',
            'description' => 'Frequently Asked Questions',
            'image' => 'images/faqs-banner-min-webp.webp',
            'page_section_id' => 11,
        ]);

        Banner::create([
            'title' => 'Terms & Conditions',
            'description' => 'Get Asset Financing with us which offers you great flexibility as you acquire assets.',
            'image' => 'images/tnc-banner-min-webp.webp',
            'page_section_id' => 13,
        ]);

        Banner::create([
            'title' => 'Asset Finance',
            'description' => 'Get Asset Financing with us which offers you great flexibility as you acquire assets.',
            'image' => 'images/home-banner-min-webp.webp',
            'page_section_id' => 1,
        ]);

        Banner::create([
            'title' => 'Asset Finance',
            'description' => 'Get Asset Financing with us which offers you great flexibility as you acquire assets.',
            'image' => 'images/home-banner-min-webp.webp',
            'page_section_id' => 1,
        ]);
    }
}
