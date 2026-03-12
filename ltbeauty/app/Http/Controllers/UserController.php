<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function add() {
        return view('admin.user.add');
    }

    public function show() {
        return view("admin.user.show");
    }
}
