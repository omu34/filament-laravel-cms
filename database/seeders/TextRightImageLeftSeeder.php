<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sections\TextRightImageLeft;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TextRightImageLeftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TextRightImageLeft::create([
            'title' => 'Features',
            'description' => <<<TEXT
                <ul>
                    <li>Financing of all types of moveable assets such as laptops, computers, printers, saloon cars, pickups, tractors, prime movers, school buses, generators and even medical equipment</li>
                    <li>Financing of up to 80% for both new and second hand assets</li>
                    <li>Competitive pricing in both local and foreign currency</li>
                    <li>Flexible repayment period of between 60 to 96 months</li>
                    <li>Automatic reminders of insurance expiry</li>
                    <li>You can also access our business asset finance solutions.</li>
                </ul>
            TEXT,
            'image' => 'images/home-features-img-min-webp.webp',
            'page_section_id' => 3,
        ]);
    }
}
