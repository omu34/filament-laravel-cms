<?php

namespace Database\Seeders;

use App\Models\Content\Socials;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SocialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $socials = [
            [
                'title' => 'Facebook',
                'icon' => 'images/fb.svg',
                'url' => 'https://www.facebook.com/coopbankenya/',
            ],
            [
                'title' => 'Instagram',
                'icon' => 'images/ig.svg',
                'url' => 'https://www.instagram.com/coopbankenya/?hl=en',
            ],
            [
                'title' => 'LinkedIn',
                'icon' => 'images/ln.svg',
                'url' => 'https://www.linkedin.com/company/62404/',
            ],
            [
                'title' => 'YouTube',
                'icon' => 'images/yt.svg',
                'url' => 'https://www.youtube.com/co-opbankkenya',
            ],
            [
                'title' => 'WhatsApp',
                'icon' => 'images/wa.svg',
                'url' => '#',
            ],
            [
                'title' => 'X',
                'icon' => 'images/x.svg',
                'url' => 'https://twitter.com/Coopbankenya',
            ],
            [
                'title' => 'TikTok',
                'icon' => 'images/tk.svg',
                'url' => 'https://www.tiktok.com/@coopbankenya',
            ],
            [
                'title' => 'Flickr',
                'icon' => 'images/fk.svg',
                'url' => 'https://www.flickr.com/photos/147086508@N03',
            ],
        ];

        foreach ($socials as $social) {
            Socials::create($social);
        }
    }
}
