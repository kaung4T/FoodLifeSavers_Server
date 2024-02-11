<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrder extends Controller
{
    /**
     * Display the admin order.
     */
    public function order (Request $request) {
        
        $order = Order::all();

        $context = [
            "order"=> $order
        ];
        return view('admin.admin_order', $context);
    }
}
