<?php

namespace App\Http\Controllers\Donation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonateItem extends Controller
{
    public function all_donate (Request $request) {

        return view('donation.all_donate');
    }

    public function single_donate (Request $request, $id) {

        $context = [
            "payment_plan_id"=> $id
        ];

        return view('donation.single_donate', $context);
    }
}
