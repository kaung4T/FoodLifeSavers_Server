<?php

namespace App\Http\Controllers\Donation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Cancellation extends Controller
{
    /**
     * Display the cancellation.
     */
    public function cancellation (Request $request) {

        return view('donation.cancellation');
    }
}
