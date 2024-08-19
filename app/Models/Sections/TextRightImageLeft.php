<?php

namespace App\Models\Sections;

use App\Models\Pages\PageSection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TextRightImageLeft extends Model
{
    use HasFactory;

    protected $table = 'text_right_image_left';

    protected $fillable = [
        'title',
        'description',
        'image',
        'page_section_id',
    ];

    public function pageSection()
    {
        return $this->belongsTo(PageSection::class);
    }
}
