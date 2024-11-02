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
        // Banner::create([
        //     'title' => 'Asset Finance',
        //     'description' => 'Get Asset Financing with us which offers you great flexibility as you acquire assets.',
        //     'image' => 'images/home-banner-min-webp.webp',
        //     'button_text' => 'explore',
        //     'button_url' => 'banking',
        //     'page_section_id' => 1,
        // ]);

        // Banner::create([
        //     'title' => 'Asset Finance Application',
        //     'description' => 'Get Asset Financing with us which offers you great flexibility as you acquire assets.',
        //     'image' => 'images/faqs-banner-min-webp.webp',
        //     'page_section_id' => 8,
        // ]);

        // Banner::create([
        //     'title' => 'FAQs',
        //     'description' => 'Frequently Asked Questions',
        //     'image' => 'images/faqs-banner-min-webp.webp',
        //     'page_section_id' => 11,
        // ]);

        // Banner::create([
        //     'title' => 'Terms & Conditions',
        //     'description' => 'Get Asset Financing with us which offers you great flexibility as you acquire assets.',
        //     'image' => 'images/tnc-banner-min-webp.webp',
        //     'page_section_id' => 13,
        // ]);

        // Banner::create([
        //     'title' => 'Asset Finance',
        //     'description' => 'Get Asset Financing with us which offers you great flexibility as you acquire assets.',
        //     'image' => 'images/home-banner-min-webp.webp',
        //     'page_section_id' => 1,
        // ]);

        // Banner::create([
        //     'title' => 'Asset Finance',
        //     'description' => 'Get Asset Financing with us which offers you great flexibility as you acquire assets.',
        //     'image' => 'images/home-banner-min-webp.webp',
        //     'button_text' => 'explore',
        //     'button_url' => 'banking',
        //     'page_section_id' => 1,
        // ]);






        Banner::create([
            'title' => 'Our Diligent Team',
            'description' => 'You deserve the best Lawyers to Handle your cases.',
            'image' => 'https://www.masikakoross.com/wp-content/uploads/2018/05/oie_LoZRjX2C0Svc.jpg',
            'button_text' => 'About Us',
            'button_url' => 'about',
            'page_section_id' => 1,
        ]);

        Banner::create([
            'title' => 'Property Cases',
            'description' => 'We handle different types of property cases.',
            'image' => 'https://www.masikakoross.com/wp-content/uploads/2018/05/oie_YdLEhrPei1Va.jpg',
            'button_text' => 'Explore',
            'button_url' => 'interlectual',
            'page_section_id' => 1,
        ]);

        Banner::create([
            'title' => 'Home Owning Case ',
            'description' => 'We will help you acquire your home',
            'image' => '/public/images/procurement.jpg',
            'button_text' => 'Explore',
            'button_url' => 'home',
            'page_section_id' => 1,
        ]);

        Banner::create([
            'title' => 'Land Ownership Case',
            'description' => 'We will help you acquire your land.',
            'image' => 'https://mmsadvocates.co.ke/wp-content/uploads/2023/05/Real-Estate.jpg',
            'button_text' => 'Explore',
            'button_url' => 'environment',
            'page_section_id' => 1,
        ]);

        Banner::create([
            'title' => 'Conflict Case ',
            'description' => 'We will help you acquire your your rights.',
            'image' => 'https://mmsadvocates.co.ke/wp-content/uploads/2023/05/Dispute-Resolution.jpg',
            'button_text' => 'Explore',
            'button_url' => 'arbitration',
            'page_section_id' => 1,
        ]);

        Banner::create([
            'title' => 'Ip cases',
            'description' => 'You deserve the rights on any copy-right breech.',
            'image' => '/public/images/environment.jpg',
            'button_text' => 'Explore',
            'button_url' => 'interlectial',
            'page_section_id' => 1,
        ]);


        Banner::create([
            'title' => 'Our Diligent Team',
            'description' => 'You deserve the best Lawyers to Handle your cases.',
            'image' => 'https://www.masikakoross.com/wp-content/uploads/2018/05/oie_LoZRjX2C0Svc.jpg',
            'button_text' => 'About Us',
            'button_url' => 'about',
            'page_section_id' => 2,
        ]);

        Banner::create([
            'title' => 'Property Cases',
            'description' => 'We handle different types of property cases.',
            'image' => 'https://www.masikakoross.com/wp-content/uploads/2018/05/oie_YdLEhrPei1Va.jpg',
            'button_text' => 'About Us',
            'button_url' => 'about',
            'page_section_id' => 3,
        ]);

        Banner::create([
            'title' => 'Home Owning Case ',
            'description' => 'We will help you acquire your home',
            'image' => 'images/procurement.jpg',
            'button_text' => 'About Us',
            'button_url' => 'about',
            'page_section_id' => 4,
        ]);

        Banner::create([
            'title' => 'Land Ownership Case',
            'description' => 'We will help you acquire your land.',
            'image' => 'https://mmsadvocates.co.ke/wp-content/uploads/2023/05/Real-Estate.jpg',
            'button_text' => 'About Us',
            'button_url' => 'about',
            'page_section_id' => 5,
        ]);

        Banner::create([
            'title' => 'Conflict Case ',
            'description' => 'We will help you acquire your your rights.',
            'image' => 'https://mmsadvocates.co.ke/wp-content/uploads/2023/05/Dispute-Resolution.jpg',
            'button_text' => 'About Us',
            'button_url' => 'about',
            'page_section_id' => 6,
        ]);

        Banner::create([
            'title' => 'Ip cases',
            'description' => 'You deserve the rights on any copy-right breech.',
            'image' => '/public/images/environment.jpg',
            'button_text' => 'About Us',
            'button_url' => 'about',
            'page_section_id' => 7,
        ]);

        Banner::create([
            'title' => 'Our Diligent Team',
            'description' => 'You deserve the best Lawyers to Handle your cases.',
            'image' => 'https://www.masikakoross.com/wp-content/uploads/2018/05/oie_LoZRjX2C0Svc.jpg',
            'button_text' => 'About Us',
            'button_url' => 'about',
            'page_section_id' => 8,
        ]);

        Banner::create([
            'title' => 'Property Cases',
            'description' => 'We handle different types of property cases.',
            'image' => 'https://www.masikakoross.com/wp-content/uploads/2018/05/oie_YdLEhrPei1Va.jpg',
            'button_text' => 'About Us',
            'button_url' => 'about',
            'page_section_id' => 9,
        ]);

        Banner::create([
            'title' => 'Home Owning Case ',
            'description' => 'We will help you acquire your home',
            'image' => '/public/images/procurement.jpg',
            'button_text' => 'About Us',
            'button_url' => 'about',
            'page_section_id' => 10,
        ]);

        Banner::create([
            'title' => 'Land Ownership Case',
            'description' => 'We will help you acquire your land.',
            'image' => 'https://mmsadvocates.co.ke/wp-content/uploads/2023/05/Real-Estate.jpg',
            'button_text' => 'About Us',
            'button_url' => 'about',
            'page_section_id' => 11,
        ]);

        Banner::create([
            'title' => 'Conflict Case ',
            'description' => 'We will help you acquire your your rights.',
            'image' => 'https://mmsadvocates.co.ke/wp-content/uploads/2023/05/Dispute-Resolution.jpg',
            'button_text' => 'About Us',
            'button_url' => 'about',
            'page_section_id' => 12,
        ]);

        Banner::create([
            'title' => 'Ip cases',
            'description' => 'You deserve the rights on any copy-right breech.',
            'image' => '/public/images/environment.jpg',
            'button_text' => 'About Us',
            'button_url' => 'about',
            'page_section_id' => 13,
        ]);
        Banner::create([
            'title' => 'Banking and Finance law',
            'description' => 'Get Our Legal Team with you we offer you great flexibility as you acquire assets.',
            'image' => 'images/home-banner-min-webp.webp',
            'page_section_id' => 1,
        ]);


        Banner::create([
            'title' => 'Banking and Finance law',
            'description' => 'Get Our Legal Team with you we offer you great flexibility as you acquire assets.',
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
