<?php

namespace App\Http\Controllers\Donation;

use App\Http\Controllers\Controller;
use App\Models\NotifyCallback;
use Illuminate\Http\Request;

class Notify extends Controller
{
    public function notify (Request $request) {
        
        $notify = new NotifyCallback;

        $notify->status_nm = $request->status_nm;
        $notify->status = $request->status;
        $notify->amount = $request->amount;
        $notify->transaction_id = $request->transaction_id;
        $notify->descriptor = $request->descriptor;
        $notify->tdate = $request->tdate;
        $notify->curr = $request->curr;
        $notify->reason = $request->reason;
        $notify->id_order = $request->id_order;

        $notify->save();

        return response()->json([
                        "data"=> "User created successfully!"
                    ], 201);
    }
}
