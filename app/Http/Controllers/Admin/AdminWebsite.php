<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminWebsite extends Controller
{
    /**
     * Display the admin website info.
     */
    public function web_info () {

        return view('admin.admin_website_info');
    }
}
