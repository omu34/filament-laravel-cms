<?php

namespace App\Models\Pages;

use Illuminate\Support\Str;
use App\Models\Sections\Banner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Page extends Model
{
    use HasFactory, SoftDeletes, HasRecursiveRelationships;


    protected $fillable = [
        'name',
        'slug',
        'order',
        'in_top_nav',
        'description',
        'keywords',
        'meta',
        'thumbnail',
        'parent_id',
    ];

    public function sections(): BelongsToMany
    {
        return $this->belongsToMany(Section::class, 'page_sections')
            ->withPivot(['order', 'id'])
            ->orderBy('order');
    }

    public function banners()
    {
        return $this->hasMany(Banner::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($page) {
            $page->slug = Str::slug($page->name);
        });
    }
}
