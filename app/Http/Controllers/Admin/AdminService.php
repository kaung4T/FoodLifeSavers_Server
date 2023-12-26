<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminService extends Controller
{
    public function service () {
        return view('admin.admin_add_service');
    }
}
