<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    //
    function set() {
        //
        $response = new Response();
        return $response->cookie('unitop', 'Học web đi làm', 24*60);
    }
    function get(Request $request) {
        // 
        return $request->cookie('unitop');
    }
}
