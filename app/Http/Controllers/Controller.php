<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\Mail;
use App\Mail\Mail_Sender;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('index');
    }

    public function email_subscribe(Request $request)
    {
        $data = [
            'title' => 'Test Email From AllPHPTricks.com',
            'body' => 'This is the body of test email.'
        ];
 
        Mail::to('mrkaungminnkhant@gmail.com')->send(new Mail_Sender($data));

        return redirect('/');
        // return redirect('https://www.youtube.com/watch?v=bBOAcS_3nts');
    }
}
