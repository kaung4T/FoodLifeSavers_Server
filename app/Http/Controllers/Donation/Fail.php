<?php

namespace App\Http\Controllers\Donation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Fail extends Controller
{
    public function fail() {
    
        return view("donation.fail");
    }
}
