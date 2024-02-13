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
}
