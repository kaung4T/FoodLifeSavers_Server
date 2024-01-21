<?php

namespace App\Http\Controllers;

use App\Models\DonationPlan;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $donate_plan = DonationPlan::all();
        
        $context = [
            "donate_plan"=> $donate_plan
        ];
        return view('about', $context);
    }
}
