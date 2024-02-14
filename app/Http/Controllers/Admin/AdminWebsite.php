<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\Request;

class AdminWebsite extends Controller
{
    /**
     * Display the admin website info.
     */
    public function web_info () {
        $info = Info::all();

        $context = [
            "info"=> $info
        ];
        return view('admin.admin_website_info', $context);
    }

    /**
     * Store the admin info.
     */
    public function info_store (Request $request) {

        $info = Info::all();

        // check approve from user
        if (isset($request->check_count_down)) {
            $info->each(function ($info) {
                $info->business_approved = false;
                $info->save();
            });

            $info = Info::create([
                'business_type' => $request->business_type,
                'business_country' => $request->business_country,
                'business_address1' => $request->business_address1,
                'business_address2' => $request->business_address2,
                'business_phone' => $request->business_phone,
                'business_email' => $request->business_email,
                'business_website' => $request->business_website,
                'business_location' => $request->business_location,
                'business_approved' => true
            ]);
        }
        else {
            $info = Info::create([
                'business_type' => $request->business_type,
                'business_country' => $request->business_country,
                'business_address1' => $request->business_address1,
                'business_address2' => $request->business_address2,
                'business_phone' => $request->business_phone,
                'business_email' => $request->business_email,
                'business_website' => $request->business_website,
                'business_location' => $request->business_location,
                'business_approved' => false
            ]);
        }
        
        return redirect()->route('admin.web_info')->with('success', 'Info added Successfully');
    }

    /**
     * Delete the admin info.
     */
    public function info_delete (Request $request, $id) {

        $info = Info::find($id);
        $info->delete();
        
        return redirect()->route('admin.web_info')->with('success', 'Info Deleted Successfully');
    }
}
