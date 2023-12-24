<?php

namespace App\Http\Controllers\Donation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class Donate extends Controller
{
    public function donate (Request $request) {
        $res = Http::get('https://jsonplaceholder.typicode.com/users');


        // post
        $details =  [
            "name" => "Lorem Graham",
            "username" => "Lorem",
            "email" => "lorem@march.biz",
            "address" => [
              "street" => "Chorus Light",
              "suite" => "Apt. 556",
              "city" => "Arizona",
              "zipcode" => "92998-3874",
              "geo" => [
                "lat" => "-37.3159",
                "lng" => "81.1496",
              ],
            ],
            "phone" => "1-770-736-8031 x56442",
            "website" => "loremipsum.org",
            "company" => [
              "name" => "Rodri-Corona",
              "catchPhrase" => "Multi-layered client-server neural-net",
              "bs" => "harness real-time e-markets",
            ]
          ];
          
        // $res = Http::post('https://jsonplaceholder.typicode.com/users', $details);


        // put
        $update = [
            "name" => "zzzz",
            "username" => "Clementino",
            "email" => "clementino@baucho.net"
        ];
        
        // $res = Http::put('https://jsonplaceholder.typicode.com/users/3', $update);


        // delete
        // $res = Http::delete('https://jsonplaceholder.typicode.com/users/3');

        // if($res->status() == 200) {
        //     return response()->json([
        //         "data"=> "User deleted successfully!"
        //     ]);

        //   } else {
        //     return response()->json([
        //         "data"=> "wrong"
        //     ]);
        // }

        return response()->json([
            "data"=> $res->json()
        ]);
        // return view('Donation.donate');
    }
}
