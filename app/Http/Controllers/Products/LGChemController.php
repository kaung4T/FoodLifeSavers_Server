<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LGChemController extends Controller
{
    public function chem ()
    {
        return view('products.chem');
    }
}
