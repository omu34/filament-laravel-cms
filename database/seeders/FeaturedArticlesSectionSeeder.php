<?php

namespace Database\Seeders;

use App\Models\Sections\FeaturedArticlesSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Nullable;

class FeaturedArticlesSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FeaturedArticlesSection::create(
            [
                'title' => 'Best Won Procurement Case',
                'content' => 'Masika and Koross 2024 presence Award winner.',
                'type' => 'news',
                'is_featured' => true,
                'news_link' => 'https://masika-koross.com', // Update with your correct path
                'image' => '/public/images/procurement.jpg', // Update with your correct path
                'youtube_link' => 'https://www.youtube.com/embed/your_video_id',
                // 'read_time' => 6, // Estimated reading time
                'created_at' => now(),
                'updated_at' => now(),
                'page_section_id' => 8, // Ensure this is correct and the ID exists in your pages table
            ]
        );
        FeaturedArticlesSection::create(
            [
                'title2' => 'Commercial and Corporate Cases',
                'content' => 'Our trending video on our expertise',
                'type' => 'video',
                'is_featured' => true,
                'video_link' => 'https://mmsadvocates.co.ke/wp-content/uploads/2023/05/Corporate-Commercial.jpg',
                'image' => '/public/images/procurement.jpg',
                'youtube_link' => 'https://www.youtube.com/embed/your_video_id', // Replace with actual YouTube ID
                // 'read_time' => 4,
                'created_at' => now(),
                'updated_at' => now(),
                'page_section_id' => 8,
            ]
        );
        FeaturedArticlesSection::create(
            [
                'title1' => 'This is How We Secured Our Client Home',
                'content' => 'A team that won procurement case for the.',
                'type' => 'photo',
                'is_featured' => true,
                'photo_link' => 'https://mmsadvocates.co.ke/wp-content/uploads/2023/05/Nairobi-MMS.jpg',
                'image' => '/public/images/procurement.jpg',
                'youtube_link' => 'https://www.youtube.com/embed/your_video_id',
                // 'read_time' => 11,
                'created_at' => now(),
                'updated_at' => now(),
                'page_section_id' => 8,

            ]
        );
    }
}
