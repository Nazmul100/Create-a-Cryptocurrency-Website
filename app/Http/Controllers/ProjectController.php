<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    //
     public function getData(Request $request){
//
        $response =Http::get("http://api.coinlayer.com/api/live?access_key=cbeba4081938428dbfc1373431dea875");
        return view('index',['response'=>$response]);

    }
    //End-Point_url = http://api.coinlayer.com/api/live?access_key=cbeba4081938428dbfc1373431dea875
    //My-API_key = cbeba4081938428dbfc1373431dea875
    //reference_site="https://coinlayer.com/quickstart"
}
