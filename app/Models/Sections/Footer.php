<?php

namespace App\Models\Sections;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'description',
        'phone',
        'phone_title',
    ];
}
