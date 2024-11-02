<?php

namespace App\Models\Sections;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pages\PageSection;

class MasikaTeamSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        // 'button_url',
        // 'button_text',
        'image',
        'page_section_id',
    ];
    public function pageSection()
    {
        return $this->belongsTo(PageSection::class);
    }
}
