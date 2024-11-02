<?php

namespace Database\Seeders;

use App\Models\Sections\FeaturedArticlesSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;

class FeaturedArticlesSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        FeaturedArticlesSection::create([
            'page_section_id' => 8,
        ]);
    }
}
