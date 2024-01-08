<?php

namespace App\Http\Controllers\Donation;

use App\Http\Controllers\Controller;
use App\Models\DonationPlan;
use Illuminate\Http\Request;

class DonateItem extends Controller
{
    public function all_donate (Request $request) {

        return view('donation.all_donate');
    }

    public function single_donate (Request $request, $id) {

        $donation = DonationPlan::find($id);

        $context = [
            "payment_plan_id"=> $id,
            "donation"=>$donation
        ];

        return view('donation.single_donate', $context);
    }
}
