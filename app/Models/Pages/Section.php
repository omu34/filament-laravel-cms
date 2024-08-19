<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'model_type',
        'thumbnail',
    ];

    public function pages()
    {
        return $this->belongsToMany(Page::class, 'page_sections')
            ->withPivot(['order', 'id'])
            ->orderBy('order');
    }
}
