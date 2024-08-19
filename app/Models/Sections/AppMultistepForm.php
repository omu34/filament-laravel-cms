<?php

namespace App\Models\Sections;

use App\Models\Pages\PageSection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AppMultistepForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_step_title',
        'second_step_title',
        'third_step_title',
        'fourth_step_title',
        'page_section_id',
    ];

    public function pageSection()
    {
        return $this->belongsTo(PageSection::class);
    }
}
