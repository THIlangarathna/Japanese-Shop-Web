<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gojukai extends Model
{
    use HasFactory;

    protected $fillable = [
        'a_name',
        'a_address_permanent',
        'a_address_current',
        'a_contact_home',
        'a_contact_mobile',
        'a_contact_work',
        'a_contact_whatsapp',
        'a_email',
        'a_nic',
        'a_nic_image',
        'a_dob',
        'a_age',
        'a_gender',
        'a_occupation',
        'a_family_1_name',
        'a_family_1_dob',
        'a_family_2_name',
        'a_family_2_dob',
        'a_family_3_name',
        'a_family_3_dob',
        'a_family_4_name',
        'a_family_4_dob',
        'a_family_5_name',
        'a_family_5_dob',
        's_name',
        's_address',
        's_contact_home',
        's_contact_mobile',
        's_relationship',
    ];
}
