<?php

namespace App\Http\Controllers;

use App\Models\DonationPlan;
use Illuminate\Http\Request;

class OurWorkController extends Controller
{
    public function our_work()
    {
        
        $donation = DonationPlan::all();

        $context = [
            "donation"=> $donation
        ];
        return view('our_work', $context);
    }
}
