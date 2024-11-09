<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pages\PageSection;

class MasikaTeamContent extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'email',
        'image',
        // 'page_section_id',
    ];
}
