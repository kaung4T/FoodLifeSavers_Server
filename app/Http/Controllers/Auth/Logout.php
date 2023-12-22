<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Logout extends Controller
{
    public function out(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
