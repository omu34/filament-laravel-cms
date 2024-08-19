<?php

namespace App\Models\Sections;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Terms extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];
}
