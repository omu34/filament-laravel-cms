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
                'description' => 'Our proven experience pushes to top of Law handling',
                'page_section_id' => 4
            ]
        );
    }
}
