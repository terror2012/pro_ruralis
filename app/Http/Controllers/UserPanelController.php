<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPanelController extends Controller
{
    function index()
    {
        return view('user.index');
    }
}
