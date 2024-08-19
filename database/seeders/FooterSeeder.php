<?php

namespace Database\Seeders;

use App\Models\Sections\Footer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Footer::create([
            'logo' => 'images/coop-logo.png',
            'description' => 'Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.',
            'phone' => '0712 345 678',
            'phone_title' => 'Get in Touch:',
        ]);
    }
}
