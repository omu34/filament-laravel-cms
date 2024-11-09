<?php

namespace App\Models\Sections;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Pages\PageSection;

class JobDone extends Model
{
    use HasFactory;
    protected $table = 'jobs_done';
    protected $fillable = [
        'main_title',
        'subtitle1',
        // 'count1',
        'subtitle2',
        // 'count2',
        'subtitle3',
        // 'count3',
        'image',
        'page_section_id'
    ];

    public function pageSection()
    {
        return $this->belongsTo(PageSection::class);
    }
}
