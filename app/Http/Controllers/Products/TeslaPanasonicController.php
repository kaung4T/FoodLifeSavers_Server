<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeslaPanasonicController extends Controller
{
    public function panasonic ()
    {
        return view('panasonic');
    }
}
