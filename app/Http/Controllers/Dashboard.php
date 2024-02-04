<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function dashboard (Request $request) {
        return view('dashboard');
    }

    public function donation (Request $request) {
        return view('dashboard_donation');
    }
}
