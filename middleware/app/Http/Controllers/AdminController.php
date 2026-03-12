<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

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

    function dashboard() {
        return view('dashboard');
    }
}
