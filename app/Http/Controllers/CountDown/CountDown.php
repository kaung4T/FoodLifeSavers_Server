<?php

namespace App\Http\Controllers\CountDown;

use App\Http\Controllers\Controller;
use App\Models\CountDown as ModelsCountDown;
use Illuminate\Http\Request;

class CountDown extends Controller
{
    public function countdown()
    {
        $cd = ModelsCountDown::all();

        $context = [
            "count_down"=> $cd
        ];
        return view('admin.admin_count_down', $context);
    }
}
