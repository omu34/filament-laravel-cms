<?php

namespace Database\Seeders;

use App\Models\Sections\MasikaTeamSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasikaTeamSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasikaTeamSection::create([
            'title' => 'Masika And Koross ',
            'description' => '
            Our team of skilled attorneys is dedicated to providing
            exceptional legal representation. With years of experience and a
                            commitment to excellence, we are committed to achieving the best
                            possible outcomes for our clients
                            ',
            // 'image' => 'https://mmsadvocates.co.ke/wp-content/uploads/2023/05/Our-Team-4.jpg',
            'page_section_id' => 2,
        ]);
    }
}
