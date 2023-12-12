<?php

namespace App\Http\Controllers\Milestones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManifestingController extends Controller
{
    public function manifesting ()
    {
        return view('manifesting');
    }
}
