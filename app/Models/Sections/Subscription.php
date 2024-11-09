<?php

namespace App\Models\Sections;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pages\PageSection;


class Subscription extends Model
{
    use HasFactory;
    protected $table = 'subscriptions';

    protected $fillable = [
        'email',
        'page_section_id'
    ];

    public function pageSection()
    {
        return $this->belongsTo(PageSection::class);
    }
}
