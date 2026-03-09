<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelperController extends Controller
{
    //
    function url() {
        // 1. Tạo url cơ bản
        // $url = url('login');

        // 2. Tạo url qua route
        $url = route('post.show');
        echo $url;
    }
}
