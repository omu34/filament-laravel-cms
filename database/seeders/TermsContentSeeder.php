<?php

namespace Database\Seeders;

use App\Livewire\Pages\Terms;
use Illuminate\Database\Seeder;
use App\Models\Sections\TermsContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TermsContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TermsContent::create([
            'title' => 'Terms & Conditions',
            'page_section_id' => 14,
        ]);
    }
}
