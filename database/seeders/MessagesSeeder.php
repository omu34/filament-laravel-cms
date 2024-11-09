<?php

namespace Database\Seeders;

use App\Models\Sections\Messages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Messages::create([
            'name' => 'Rygs',
            'email' => 'hello@gmail.com',
            'texts' => 'Welcome to masika and Koross Advocates',
            'page_section_id' => 6,
        ]);
    }
}
