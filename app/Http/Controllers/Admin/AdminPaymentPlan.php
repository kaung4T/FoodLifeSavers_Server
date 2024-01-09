<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DonationPlan;
use Illuminate\Http\Request;

class AdminPaymentPlan extends Controller
{
    public function plan (Request $request) {

        $donation = DonationPlan::all();

        $context = [
            "donation"=>$donation
        ];
        return view('admin.payment_plan.plan', $context);
    }

    public function plan_store (Request $request) {

        $donation = DonationPlan::create([
            'plan_type' => $request->plan_type,
            'plan_info' => $request->plan_text,
            'amount' => $request->plan_amount,
            'discount' => $request->plan_discount
        ]);
        
        return redirect()->route('admin.plan')->with('success', 'File Uploaded Successfully');
    }

    public function plan_update_index (Request $request, $id) {

        $donation = DonationPlan::find($id);

        $context = [
            "donation"=>$donation,
            "donation_id"=>$id
        ];
        return view('admin.payment_plan.plan_update_index', $context);
    }

    public function plan_update_store (Request $request, $id) {

        $donation = DonationPlan::find($id);
        $donation_update = $donation->update([
            'plan_type' => $request->plan_type,
            'plan_info' => $request->plan_text,
            'amount' => $request->plan_amount,
            'discount' => $request->plan_discount
        ]);
        
        return redirect()->route('admin.plan')->with('success', 'File Uploaded Successfully');
    }

    public function plan_delete (Request $request, $id) {

        $donation = DonationPlan::find($id);
        $donation->delete();
        
        return redirect()->route('admin.plan')->with('success', 'File Uploaded Successfully');
    }
}
