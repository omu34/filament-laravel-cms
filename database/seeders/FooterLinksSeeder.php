<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content\FooterLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FooterLinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $links = [
            [
                'title' => 'Legal Practice',
            ],
            [
                'title' => 'User Account',
                'url' => '/user-account',
                'parent_id' => 1,
            ],
            [
                'title' => 'Dealer Account',
                'url' => '/dealer-account',
                'parent_id' => 1,
            ],
            [
                'title' => 'Agent Account',
                'url' => '/agent-account',
                'parent_id' => 1,
            ],
            [
                'title' => 'Lorem',
                'url' => '#',
                'parent_id' => 1,
            ],
            [
                'title' => 'Area of Practice',
            ],
            [
                'title' => 'Lorem ipsum',
                'url' => '#',
                'parent_id' => 6,
            ],
            [
                'title' => 'Ipsum lorem',
                'url' => '#',
                'parent_id' => 6
            ],
            [
                'title' => 'Lorem ipsum',
                'url' => '#',
                'parent_id' => 6,
            ],
            [
                'title' => 'Ipsum lorem',
                'url' => '#',
                'parent_id' => 6,
            ],
            [
                'title' => 'Legal Focus',
            ],
            [
                'title' => 'Terms & Conditions',
                'url' => '/terms',
                'parent_id' => 11,
            ],
            [
                'title' => 'FAQs',
                'url' => '/faqs',
                'parent_id' => 11,
            ],
            [
                'title' => 'Application',
                'url' => '/start-application',
                'parent_id' => 11,
            ],
            [
                'title' => 'Aliquip',
                'url' => '#',
                'parent_id' => 11,
            ],
            [
                'title' => 'External Links',
            ],
            [
                'title' => 'Lorem ipsum',
                'url' => '#',
                'parent_id' => 16,
            ],
            [
                'title' => 'Ipsum lorem',
                'url' => '#',
                'parent_id' => 16,
            ],
            [
                'title' => 'Lorem ipsum',
                'url' => '#',
                'parent_id' => 16,
            ],
            [
                'title' => 'Ipsum lorem',
                'url' => '#',
                'parent_id' => 16,
            ],
        ];

        foreach ($links as $link) {
            FooterLink::create($link);
        }
    }
}
