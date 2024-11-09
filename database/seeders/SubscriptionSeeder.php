<?php

namespace Database\Seeders;

use App\Models\Sections\Subscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subscription::create([
            'email' => 'bernardomuse22@gmail.com',
            'page_section_id' => 4,
        ]);
    }
}
