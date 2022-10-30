<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

//use GuzzleHttp\Client; //import the guzzle library

class BreedsController extends Controller
{

    public function index() {

        $url = "https://dog.ceo/api/breeds/list/all";
        $response = HTTP::get($url);
        $result = response()->json($response);
        
        return view('/breeds/breeds', compact('result'));
    }

}
