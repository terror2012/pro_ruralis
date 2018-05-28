<?php

namespace App\Http\Controllers;

use App\Eloquent\general_settings;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    function loginIndex()
    {
        return view('admin.login');
    }
    function login(Request $r)
    {
        $credentials = $r->only('email', 'password');
        if(Auth::attempt($credentials))
        {
            return redirect('/dashboard');
        }
        else
        {
            flash('Wrong username or password')->error();
            return redirect('/');
        }
    }
}
