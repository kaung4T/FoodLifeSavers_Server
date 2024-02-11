<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display the contact.
     */
    public function contact()
    {
        
        return view('contact');
    }
}