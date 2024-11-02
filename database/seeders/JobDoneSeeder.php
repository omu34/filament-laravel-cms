<?php

namespace Database\Seeders;

use App\Models\Sections\JobDone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobDoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobDone::create(
            [
                'main_title' => 'We Provide Quality Services',
                'subtitle1' => 'Satisfied Clients',
                'subtitle2' => 'Successful cases',
                'subtitle3' => 'Jobs Done',
                'image' => '/public/images/about-us.jpg',
                'page_section_id' => 6
            ]
        );
    }
}
