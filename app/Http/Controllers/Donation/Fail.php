<?php

namespace App\Http\Controllers\Donation;

use App\Http\Controllers\Controller;
use App\Models\DonationPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Fail extends Controller
{
    public function fail(Request $request, $id) {
        
        $donate_plan = DonationPlan::find($id);
    
        $context = [
            "donate_plan"=> $donate_plan,
            "user"=> Auth::user()->name,
            "phone"=> Auth::user()->number,
            "email"=> Auth::user()->email,
            "address"=> Auth::user()->address,
            "country"=> Auth::user()->country,
        ];
        return view("donation.fail", $context);
    }
}
