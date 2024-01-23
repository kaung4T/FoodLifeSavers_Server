<?php

namespace App\Http\Controllers\Donation;

use App\Http\Controllers\Controller;
use App\Models\DonationPlan;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;


class Donate extends Controller {
    public function generate_order_id () {
      // include both words and num
      // return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);

      $number = mt_rand(100000000000000000, 999999999999999999);

      if ($this->barcodeNumberExists($number)) {
          return $this->generate_order_id();
      }

      return $number;
      }

    public function barcodeNumberExists($number) {
        return Order::where("order_id", "=", $number)->exists();
    } 



    public function donate (Request $request ,$payment_plan_id) {

    $payment = DonationPlan::find($payment_plan_id);

    $gateway_url="https://merchant.cardpaymentz.com/directapi.do";
      
    $protocol = isset($_SERVER["HTTPS"])?'https://':'http://';
    $referer=$protocol.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

    $order_id = $this->generate_order_id(); //generate order id


    // $oreder_creation = Order::create([
    //   'order_id'=> $order_id,
    //   'user_id'=> Auth::id(),
    //   'user'=> Auth::user()->name,
    //   'payment_plan_id'=> $payment->id,
    //   'payment_plan'=> $payment->plan_type,
    //   'payment_amount'=> $payment->amount,
    //   'payment_discount'=> $payment->discount,
    //   'phone'=> Auth::user()->number,
    //   'country'=> Auth::user()->country
    // ]);
    
    // TEST ORDER ID
    // $conext = [
    //   "order_id"=> $order_id
    // ];

    // return response()->json($conext); exit;


    $curlPost= array();

    //<!--Replace of 2 very important parameters * your Website API Token and Website ID -->

    $curlPost["api_token"]= "MTAwNjhfMzQ5OV8yMDI0MDEyNDAwNDgyMw";
    $curlPost["website_id"]= "3499";

    //<!--default (fixed) value * default -->

    $curlPost["cardsend"]="curl";
    
    // $curlPost["client_ip"]=($_SERVER['REMOTE_ADDR']);
    // $curlPost["client_ip"]=($_SERVER['HTTP_X_FORWARDED_FOR']?$_SERVER['HTTP_X_FORWARDED_FOR']:$_SERVER['REMOTE_ADDR']);
    // $curlPost["client_ip"]=(getenv('HTTP_X_FORWARDED_FOR')?getenv('HTTP_X_FORWARDED_FOR'):getenv('REMOTE_ADDR'));
    if (getenv('HTTP_X_FORWARDED_FOR'))
    {
      $curlPost["client_ip"]= getenv('HTTP_X_FORWARDED_FOR');
    }
    else {
      $curlPost["client_ip"]= getenv('REMOTE_ADDR');
    }


    $curlPost["action"]="product";
    $curlPost["source"]="Curl-Direct-Card-Payment";
    $curlPost["source_url"]=$referer;

    //<!--product price,curr and product name * by cart total amount -->

    $curlPost["price"]= $payment->amount;
    $curlPost["curr"]="USD";
    $curlPost["product_name"]= $payment->plan_type;

    //<!--billing details of .* customer -->

    $curlPost["fullname"]= $request->full_name;
    $curlPost["email"]= Auth::user()->email;
    $curlPost["bill_street_1"]= Auth::user()->address;
    $curlPost["bill_street_2"]= "-";
    $curlPost["bill_city"]= $request->city;
    $curlPost["bill_state"]= Auth::user()->country;
    $curlPost["bill_country"]= Auth::user()->country;
    $curlPost["bill_zip"]= $request->zip;
    $curlPost["bill_phone"]= Auth::user()->number;
    $curlPost["id_order"]=$order_id; // should be unique by time() or your id_order is unique
    $curlPost["notify_url"]="https://yourdomain.com/notify.php";
    $curlPost["success_url"]="https://foodlifesavers.com/donate/success/$order_id";
    $curlPost["error_url"]="https://foodlifesavers.com/donate/fail/$payment_plan_id";
    $curlPost["checkout_url"]="https://yourdomain.com/checkout_url.php";

    //<!--card details of .* customer -->

    $curlPost["ccno"]= $request->credit_card_num;
    $curlPost["ccvv"]= $request->cvv;
    $curlPost["month"]= $request->expiration_month;
    $curlPost["year"]= $request->experation_year;
    $curlPost["notes"]="Remark for transaction";

    
    $curl_cookie="";
    $curl = curl_init(); 
    curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
    curl_setopt($curl, CURLOPT_URL, $gateway_url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($curl, CURLOPT_REFERER, $referer);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($curl);
    curl_close($curl);

    $results = json_decode($response,true);

    if((isset($results["Error"]) && ($results["Error"]))||(isset($results["error"]) && ($results["error"]))){
      return response()->json($results); exit;
    }



    $authurl="https://merchant.cardpaymentz.com/authurl.do?api_token=".$curlPost["api_token"]."&id_order=".$curlPost["id_order"];

    header("Location:$authurl");exit;

    $status_nm = (int)($results["status_nm"]);

    $sub_query = http_build_query($results);

    if(isset($results["authurl"]) && $results["authurl"]){ //3D Bank URL
      $redirecturl = $results["authurl"];
      header("Location:$redirecturl");exit;
    }
    
    
    elseif($status_nm==1 || $status_nm==9){ // 1:Approved/Success,9:Test Transaction
      $redirecturl = $curlPost["success_url"];

      // $oreder_creation = Order::create([
      //   'order_id'=> $order_id,
      //   'user_id'=> Auth::id(),
      //   'user'=> Auth::user()->name,
      //   'payment_plan_id'=> $payment->id,
      //   'payment_plan'=> $payment->plan_type,
      //   'payment_amount'=> $payment->amount,
      //   'payment_discount'=> $payment->discount,
      //   'phone'=> Auth::user()->number,
      //   'country'=> Auth::user()->country
      // ]);

      if(strpos($redirecturl,'?')!==false){
        $redirecturl = $redirecturl."&".$sub_query;
      }else{
        $redirecturl = $redirecturl."?".$sub_query;
      }
      header("Location:$redirecturl");exit;
    }
    
    
    elseif($status_nm==2||$status_nm==22||$status_nm==23){  // 2:Declined/Failed, 22:Expired, 23:Cancelled
      $redirecturl = $curlPost["error_url"];
      if(strpos($redirecturl,'?')!==false){
        $redirecturl = $redirecturl."&".$sub_query;
      }else{
        $redirecturl = $redirecturl."?".$sub_query;
      }
      header("Location:$redirecturl");exit;
    }
    
    else{ // Pending
      $redirecturl = $referer;
      if(strpos($redirecturl,'?')!==false){
        $redirecturl = $redirecturl."&".$sub_query;
      }else{
        $redirecturl = $redirecturl."?".$sub_query;
      }
      header("Location:$redirecturl");exit;
      
      
    }

    }
}









// {
//     public function donate (Request $request) {
//         $res = Http::get('https://jsonplaceholder.typicode.com/users');


//         // post
//         $details =  [
//             "name" => "Lorem Graham",
//             "username" => "Lorem",
//             "email" => "lorem@march.biz",
//             "address" => [
//               "street" => "Chorus Light",
//               "suite" => "Apt. 556",
//               "city" => "Arizona",
//               "zipcode" => "92998-3874",
//               "geo" => [
//                 "lat" => "-37.3159",
//                 "lng" => "81.1496",
//               ],
//             ],
//             "phone" => "1-770-736-8031 x56442",
//             "website" => "loremipsum.org",
//             "company" => [
//               "name" => "Rodri-Corona",
//               "catchPhrase" => "Multi-layered client-server neural-net",
//               "bs" => "harness real-time e-markets",
//             ]
//           ];
          
//         // $res = Http::post('https://jsonplaceholder.typicode.com/users', $details);


//         // put
//         $update = [
//             "name" => "zzzz",
//             "username" => "Clementino",
//             "email" => "clementino@baucho.net"
//         ];
        
//         // $res = Http::put('https://jsonplaceholder.typicode.com/users/3', $update);


//         // delete
//         // $res = Http::delete('https://jsonplaceholder.typicode.com/users/3');

//         // if($res->status() == 200) {
//         //     return response()->json([
//         //         "data"=> "User deleted successfully!"
//         //     ]);

//         //   } else {
//         //     return response()->json([
//         //         "data"=> "wrong"
//         //     ]);
//         // }

//         return response()->json([
//             "data"=> $res->json()
//         ]);
//         // return view('Donation.donate');
//     }
// }
