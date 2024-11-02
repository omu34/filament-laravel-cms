<?php

namespace App\Models\Sections;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pages\PageSection;

class AboutUsSection extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'title',
        'description',
        'button_text',
        'button_url',
        'image',
        'page_section_id'
    ];
    public function pageSection()
    {
        return $this->belongsTo(PageSection::class);
    }
}
