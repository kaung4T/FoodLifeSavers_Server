<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Panasonic()
    {
        $products = new Product();
        return view('products.panasonic', compact('products'));
    }
}
