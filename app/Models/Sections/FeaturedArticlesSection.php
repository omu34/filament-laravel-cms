<?php

namespace App\Models\Sections;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pages\PageSection;

class FeaturedArticlesSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_section_id',
        'title',
        'title2',
        // 'description1',
        // 'description2',
        // 'description3',
        // 'content',
        // 'image',
        // 'type',
        // 'is_featured',
        // 'image_url',
        // 'youtube_link',
        // 'read_time',
        'title1',
        'content',
        'image',
        'type',
        'is_featured',
        'youtube_link',
    ];

    // Relationship to the Page Section (if needed)
    public function pageSection()
    {
        return $this->belongsTo(PageSection::class); // Ensure PageSection model exists
    }
}
