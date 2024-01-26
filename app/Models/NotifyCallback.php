<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotifyCallback extends Model
{
    use HasFactory;
    protected $fillable = [
        'status_nm',
        'status',
        'amount',
        'transaction_id',
        'descriptor',
        'tdate',
        'curr',
        'reason',
        'id_order',
    ];
}
