<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\DonationPlan;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    public function dashboard (Request $request) {
        return view('user.dashboard');
    }

    public function donation (Request $request) {
        
        $user_order = Order::where('user_id', '=', Auth::id())->get();
        $donation = DonationPlan::all();
        
        $context = [
            "donation" => $donation,
            "user_order" => $user_order
        ];
        return view('user.dashboard_donation', $context);
    }
}
