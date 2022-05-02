<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tozan extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'surname',
        'other_names',
        'address',
        'contact_home',
        'contact_mobile',
        'contact_work',
        'contact_whatsapp',
        'email',
        'dob',
        'age',
        'gender',
        'occupation',
        'passport_no',
        'passport_expiry_date',
        'gojukai_received_date',
        'gohonzon_received_date',
        'chanting',
        'first_tozan',
        'previous_tozans',
        'illnesses',
        'wheelchair',
        'contact_japan',
        'members_names_tozan',
        'tozan_years',
        'tozan_months',
        'tozan_days',
    ];
}
