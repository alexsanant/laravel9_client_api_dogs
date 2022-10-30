<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class DogsController extends Controller
{
    public function show($breed) {

       
        $url = "https://dog.ceo/api/breed/{$breed}/images";
        $response = HTTP::get($url);
        $result = response()->json($response);
        
        return view('/dogs/dogs', compact('result'));

    }
}
