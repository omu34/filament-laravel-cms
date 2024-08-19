<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sections\RecommendedProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RecommendedProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RecommendedProduct::create([
            'title' => 'Recommended Products',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
            'page_section_id' => 6,
        ]);
    }
}
