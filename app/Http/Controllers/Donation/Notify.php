<?php

namespace App\Http\Controllers\Donation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Notify extends Controller
{
    public function notify (Request $request) {

        return view('donation.notify');
    }
}
