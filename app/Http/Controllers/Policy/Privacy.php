<?php

namespace App\Http\Controllers\Policy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Privacy extends Controller
{
    /**
     * Display the privacy.
     */
    public function privacy () {
        return view('policy.privacy');
    }
}
