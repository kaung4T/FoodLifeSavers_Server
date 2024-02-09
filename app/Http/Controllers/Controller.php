<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\Mail;
use App\Mail\Mail_Sender;
use App\Models\CountDown;
use App\Models\DonationPlan;
use Exception;
use Illuminate\Support\Facades\Redirect;

use App\Models\Product;
use App\Models\Service;

use PhpOption\None;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public $year, $month, $day;

    public function index()
    {
        $service = Service::all();
        $donation = DonationPlan::all();
        
        $cd = CountDown::all();

        $cd->each(function ($cd) {
            if ($cd->approved) {
            $count_down_convert = $cd->end_date; //2024-02-13
            $count_down = explode("-", $count_down_convert);
            
            if ($count_down[1] == "01") {
                $count_down[1] = "January";
            }
            elseif ($count_down[1] == "02") {
                $count_down[1] = "February";
            }
            elseif ($count_down[1] == "03") {
                $count_down[1] = "March";
            }
            elseif ($count_down[1] == "04") {
                $count_down[1] = "April";
            }
            elseif ($count_down[1] == "05") {
                $count_down[1] = "May";
            }
            elseif ($count_down[1] == "06") {
                $count_down[1] = "June";
            }
            elseif ($count_down[1] == "07") {
                $count_down[1] = "July";
            }
            elseif ($count_down[1] == "08") {
                $count_down[1] = "August";
            }
            elseif ($count_down[1] == "09") {
                $count_down[1] = "September";
            }
            elseif ($count_down[1] == "10") {
                $count_down[1] = "October";
            }
            elseif ($count_down[1] == "11") {
                $count_down[1] = "November";
            }
            elseif ($count_down[1] == "12") {
                $count_down[1] = "December";
            }

            $this->year = $count_down[0];
            $this->month = $count_down[1];
            $this->day = $count_down[2];
            }
        });


        $context = [
            "year"=> $this->year,
            "month"=> $this->month,
            "day"=> $this->day,
            "service"=> $service,
            "donation"=> $donation
        ];
        return view('index', $context);
    }

    public function each_service(Request $request, $id)
    {
        $service = Service::find($id);

        $context = [
            "service"=> $service
        ];
        return view('each_service', $context);
    }

    public function search(Request $request)
    {
        $search = $request->search;

        // $service = Service::where('name', '=', $search)->get();
        $service = Service::where('name', 'LIKE', '%'.$search.'%')->get();
        $donation = DonationPlan::where('plan_type', 'LIKE', '%'.$search.'%')->get();
        
        $item_count = count($service);
        $item_count2 = count($donation);
        $total = $item_count + $item_count2;

        if (!$service->isEmpty() || !$donation->isEmpty()) {
            $context = [
                "search"=> $search,
                "service"=> $service,
                "donation"=> $donation,
                "nothing"=> null,
                "item_count"=> $total
            ];
        }
        else {
            $context = [
                "search"=> $search,
                "service"=> $service,
                "donation"=> $donation,
                "nothing"=> "No results found!"
            ];
        }
        

        return view('search', $context);
    }

    public function email_subscribe(Request $request)
    {
        $data = [
            'title' => 'FoodLifeSaver Users Sign UP!',
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

    public function email_message(Request $request)
    {
        $data = [
            'title' => 'FoodLifeSaver Message Mail of Users!',
            'body' => $request->body
        ];
        
        try
        {
            Mail::to('mrkaungminnkhant@gmail.com')->send(new Mail_Sender($data));
            return Redirect::to('/contact')->with('success', true)->with('message','Your message mail was sent!');
        }
        catch (Exception $e) 
        {
            return Redirect::to('/contact')->withErrors("You message didn't send");
        }

    }
}
