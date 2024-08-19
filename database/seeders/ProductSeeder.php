<?php

namespace Database\Seeders;

use App\Models\Content\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'Isuzu Partnership',
            'url' => '#',
            'icon' => 'images/customers-icon.svg',
        ]);

        Product::create([
            'title' => 'Toyota Partnership',
            'url' => '#',
            'icon' => 'images/loans-icon.svg',
        ]);

        Product::create([
            'title' => 'Simba Colt Partnership',
            'url' => '#',
            'icon' => 'images/customers-icon.svg',
        ]);

        Product::create([
            'title' => 'Direct Importation',
            'url' => '#',
            'icon' => 'images/loans-icon.svg',
        ]);
    }
}
