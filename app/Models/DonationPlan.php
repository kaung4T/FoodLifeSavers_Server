<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationPlan extends Model
{
    use HasFactory;
    protected $fillable = [
        'plan_type',
        'plan_info',
        'amount',
        'discount'
    ];
}
