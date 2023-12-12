<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SamsungSDIController extends Controller
{
    public function samsung ()
    {
        return view('products.samsung');
    }
}
