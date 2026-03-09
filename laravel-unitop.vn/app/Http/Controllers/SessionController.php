<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    function add(Request $request) {
        $request->session()->put('username', 'ltb');
    }

    function show(Request $request) {
        // return $request->session()->all();
        return $request->session()->get('username');
    }
}
