<?php

namespace Database\Seeders;

use App\Models\Sections\ContactUsSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactUsSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactUsSection::create([
            'title' => 'Get in',
            'description' => <<<TEXT
                                 We are located at The Hazina Towers 5th floor Wing A Monrovia street, Utalii lane..
            TEXT,
            'button_text' => 'Send Message',
            'hour_title' => 'Working Hours',
            'hour_subtitle' => 'Monday - Friday: 08:00 - 17:00 Saturday & Sunday:
                                            08:00 - 12:00',
            'address_title' => 'Our Address',
            'address_subtitle' => '1230 Maecenas Street Donec Road, New York, EEUU',
            'contact_title' => 'Contact',
            'contact_subtitle' => 'Mobile: +1 (123) 456-7890  Mail: tailnext@gmail.com',
            'form_title' => 'Ready to Get Started',
            'page_section_id' => 4,

        ]);
    }
}
