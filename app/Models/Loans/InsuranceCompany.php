<?php

namespace App\Models\Loans;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InsuranceCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_active'
    ];
}
