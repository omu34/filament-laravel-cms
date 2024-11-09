<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pages\PageSection;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class OurExperiencesContent extends Model
{

    use HasFactory, HasRecursiveRelationships;

    protected $fillable = [
        'name',
        'button_url',
        'button_text',
        'image',
    ];
}
