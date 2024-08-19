<?php

namespace App\Models\Forms;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SmsLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'provider_message_id',
        'provider_status_text',
        'provider_status_code',
        'sms_cost',
        'message'
    ];
}
