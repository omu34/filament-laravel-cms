<?php

namespace App\Models\Sections;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pages\PageSection;

class NewsLetterSection extends Model
{

    use HasFactory;

    protected $fillable = [

        'title',
        'description',
        'button_text',
        'bottom',
        'page_section_id',
    ];

    public function pageSection()
    {
        return $this->belongsTo(PageSection::class);
    }
}
