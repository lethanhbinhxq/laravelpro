<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class AdminController extends Controller implements HasMiddleware
{
    //
    public static function middleware(): array
    {
        return [
            // 'CheckAge',
            new Middleware('CheckAge', only: ['index']),
            // new Middleware('CheckAge', except: ['login']),
        ];
    }

    function index() {
        return view('admin');
    }
}
