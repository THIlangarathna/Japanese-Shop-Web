<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gohonzon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address_permanent',
        'address_current',
        'contact_home',
        'contact_mobile',
        'contact_work',
        'contact_whatsapp',
        'email',
        'nic',
        'date',
        'e_name',
        'e_date',
        's_name',
        's_address',
        's_contact_home',
        's_contact_mobile',
        's_relationship',
    ];
}
