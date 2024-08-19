<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class FooterLink extends Model
{
    use HasFactory, HasRecursiveRelationships;

    protected $fillable = [
        'title',
        'icon',
        'url',
    ];
}
