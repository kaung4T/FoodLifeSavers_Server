<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TandC extends Controller
{
    /**
     * Display the terms and conditions.
     */
    public function tandc () {
        return view("tandc");
    }
}
