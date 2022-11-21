<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    //
    public function getData(Request $request){
//        $response =Http::get("https://rest.coinapi.io/");
//        return view('index',([
//            'X-CoinAPI-Key'=>$response['X-CoinAPI-Key'],
//            'response'=>$response
//
//        ])

        $response =Http::get("https://rest.coinapi.io/");
        dd($response);
        ([
        'X-CoinAPI-Key'=>$response['59F5180E-9171-4BD5-9B23-74823EE74B37'],
            'response'=>$response
        ]);
        return view('index');


    }
}
