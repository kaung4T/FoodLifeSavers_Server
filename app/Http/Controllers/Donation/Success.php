<?php

namespace App\Http\Controllers\Donation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Success extends Controller
{
    public function success() {
    
        return view("donation.success");
    }
}
