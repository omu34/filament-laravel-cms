<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Filament\Panel;
use App\Models\Loans\Agent;
use App\Models\Loans\Dealer;
use App\Models\Loans\Customer;
use Filament\Models\Contracts\HasName;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements FilamentUser, HasName
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
        'otp',
        'type',
        'otp_verified',
        'accepted_terms',
        'otp_expires_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected $appends = [
        'full_name'
    ];

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

    public function dealer()
    {
        return $this->hasOne(Dealer::class);
    }

    public function agent()
    {
        return $this->hasOne(Agent::class);
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->type === 'admin';
    }

    public function getFilamentName(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . " " . $this->last_name;
    }

    public function isAgent(): bool
    {
        return $this->type === 'agent';
    }

    public function isCustomer(): bool
    {
        return $this->type === 'customer';
    }

    public function isDealer(): bool
    {
        return $this->type === 'dealer';
    }
}
