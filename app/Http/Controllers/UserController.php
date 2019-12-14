<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Datatables;

class UserController extends Controller
{
    public function adduser()
    {
        return view('auth.register');
    }

    public function users()
    {
        return view('user.user_view');
    }
    public function usersList()
    {
        $users = DB::table('users')->select('*');
        return datatables()->of($users)
            ->make(true);
    }
}
