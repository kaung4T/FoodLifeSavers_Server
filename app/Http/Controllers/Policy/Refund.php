<?php

namespace App\Http\Controllers\Policy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Refund extends Controller
{
    public function refund () {
        return view('policy.refund');
    }
}
