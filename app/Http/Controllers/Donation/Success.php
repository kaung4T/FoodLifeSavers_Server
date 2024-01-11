<?php

namespace App\Http\Controllers\Donation;

use App\Http\Controllers\Controller;
use App\Models\DonationPlan;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Success extends Controller
{
    public function success(Request $request, $id) {

        $order = Order::where('order_id', '=', $id)->first();
        $donate_plan = DonationPlan::find($order->payment_plan_id);
        
        $context = [
            "order"=> $order,
            "donate_plan"=> $donate_plan,
            "user"=> Auth::user()->name,
            "phone"=> Auth::user()->number,
            "email"=> Auth::user()->email,
            "address"=> Auth::user()->address,
            "country"=> Auth::user()->country,
        ];
        return view("donation.success", $context);
    }
}
