<?php

namespace App\Models\Loans;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExtraIncome extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'source', 'amount'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
