<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    function show() {
        $users = Role::find(3)->users;
        // return $users;

        $roles = User::find(1)->roles;
        return $roles;
    }
}
