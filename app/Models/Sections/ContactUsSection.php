<?php

namespace App\Models\Sections;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pages\PageSection;

class ContactUsSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'hour_title',
        'hour_subtitle',
        'address_title',
        'address_subtitle',
        'contact_title',
        'contact_subtitle',
        'form_title',
        'button_text',
        'page_section_id',
    ];

    public function pageSection()
    {
        return $this->belongsTo(PageSection::class);
    }
}
