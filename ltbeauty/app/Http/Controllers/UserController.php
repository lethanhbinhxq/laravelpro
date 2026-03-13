<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function add() {
        return view('admin.user.add');
    }

    public function show() {
        $users = User::paginate(10);
        $num_active = User::where('status', User::STATUS_ACTIVE)->count();
        $num_pending = User::where('status', User::STATUS_PENDING)->count();
        $num_blocked = User::where('status', User::STATUS_BLOCKED)->count();
        return view("admin.user.show", 
                compact('users', 'num_active', 'num_pending', 'num_blocked'));
    }
}
