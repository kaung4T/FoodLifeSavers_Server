<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    protected $fillable = [
        'business_type',
        'business_country',
        'business_address1',
        'business_address2',
        'business_phone',
        'business_email',
        'business_website',
        'business_location',
        'business_approved'
    ];
}
