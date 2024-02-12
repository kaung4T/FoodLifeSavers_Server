<?php

namespace App\Http\Controllers\Policy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Refund extends Controller
{
    /**
     * Display the refund.
     */
    public function refund () {
        return view('policy.refund');
    }
}
