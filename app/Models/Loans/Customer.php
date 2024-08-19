<?php

namespace App\Models\Loans;

use App\Models\User;
use App\Models\Settings\Branch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Customer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'id_number',
        'passport_number',
        'passport_expiry',
        'type',
        'branch_id',
        'kra_pin',
        'income_source',
        'business_type',
        'monthly_income',
        'extra_income',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function extraIncomes()
    {
        return $this->hasMany(ExtraIncome::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function documents()
    {
        return $this->hasMany(CustomerDocument::class, 'customer_id');
    }
}
