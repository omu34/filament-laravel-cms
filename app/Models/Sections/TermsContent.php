<?php

namespace App\Models\Sections;

use App\Models\Pages\PageSection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TermsContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'page_section_id',
    ];

    public function pageSection()
    {
        return $this->belongsTo(PageSection::class);
    }
}
