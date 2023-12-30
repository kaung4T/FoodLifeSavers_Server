<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\Mail;
use App\Mail\Mail_Sender;
use Exception;
use Illuminate\Support\Facades\Redirect;

use App\Models\Product;
use App\Models\Service;

use PhpOption\None;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('index');
    }

    public function search(Request $request)
    {
        $search = $request->search;

        // $service = Service::where('name', '=', $search)->get();
        $service = Service::where('name', 'LIKE', '%'.$search.'%')->get();
        
        $item_count = count($service);

        if (!$service->isEmpty()) {
            $context = [
                "search"=> $search,
                "service"=> $service,
                "nothing"=> null,
                "item_count"=> $item_count
            ];
        }
        else {
            $context = [
                "search"=> $search,
                "service"=> $service,
                "nothing"=> "No results found!"
            ];
        }
        

        return view('search', $context);
    }

    public function email_subscribe(Request $request)
    {
        $data = [
            'title' => 'Food Life Saver Users Sign UP!',
            'body' => $request->body
        ];
        
        try
        {
            Mail::to('mrkaungminnkhant@gmail.com')->send(new Mail_Sender($data));
            return Redirect::to('/')->with('success', true)->with('message','Your sign up mail was sent!');
        }
        catch (Exception $e) 
        {
            return Redirect::to('/')->withErrors("You message didn't send");
        }

        // return redirect('https://www.youtube.com/watch?v=bBOAcS_3nts');
    }
}
