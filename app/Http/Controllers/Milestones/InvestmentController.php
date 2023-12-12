<?php

namespace App\Http\Controllers\Milestones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function investment ()
    {
        return view('milestone.investment');
    }
}
