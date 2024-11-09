<?php

namespace Database\Seeders;

use App\Models\Sections\OurExperienceSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OurExperienceSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OurExperienceSection::create(
            [
                'title' => 'Our Proven',
                'description' => 'Our proven expertise allows us to provide effective and efficient
                    legal solutions to your specific needs.',
                'page_section_id' => 3
            ]
        );
    }
}
