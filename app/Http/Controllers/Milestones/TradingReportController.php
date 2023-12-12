<?php

namespace App\Http\Controllers\Milestones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TradingReportController extends Controller
{
    public function trading ()
    {
        return view('trading');
    }
}
