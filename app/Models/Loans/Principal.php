<?php

namespace App\Models\Loans;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Principal extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'type', 'file_path'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
