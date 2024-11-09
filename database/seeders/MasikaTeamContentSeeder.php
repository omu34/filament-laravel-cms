<?php

namespace Database\Seeders;

use App\Models\Content\MasikaTeamContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasikaTeamContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contents = [
            [
                'name' => 'Alex Masika',
                'title' => 'Senior Partner',
                'email' => 'skmasika@gmail.com',
                'page_section_id' => 7,
                'image' => '/public/images/masika.jpg',

            ],

            [
                'name' => 'Ann Koross',
                'title' => 'Judge at ELC',
                'email' => 'skmasika@gmail.com',
                'page_section_id' => 7,
                'image' => '/public/images/koross.jpg',

            ],

            [
                'name' => 'Nelson Kuya',
                'title' => 'Legal Assistant',
                'email' => 'skmasika@gmail.com',
                'page_section_id' => 7,
                'image' => '/public/images/nelson.jpg',

            ],
            [
                'name' => 'Thomas Opunga',
                'title' => 'Associate Lawyer',
                'email' => 'skmasika@gmail.com',
                'page_section_id' => 7,
                'image' => '/public/images/tomas.jpg',

            ],
            [
                'name' => 'Alex Masika',
                'title' => 'Senior Partner',
                'email' => 'skmasika@gmail.com',
                'page_section_id' => 7,
                'image' => '/public/images/masika.jpg',

            ],
            [
                'name' => 'Alex Masika',
                'title' => 'Senior Partner',
                'email' => 'skmasika@gmail.com',
                'page_section_id' => 7,
                'image' => '/public/images/masika.jpg',

            ],
        ];

        foreach ($contents as $content) {
            MasikaTeamContent::create($content);
        }
    }
}
