<?php

namespace App\Http\Controllers;

use App\Eloquent\general_settings;
use App\Http\Requests\UserValidation;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

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
            if(Auth::user()->account_type === 1)
            {
                return redirect('/dashboard');
            }
            elseif(Auth::user()->account_type === 2)
            {
                return redirect('/sponsorPanel');
            }
            elseif(Auth::user()->account_type === 3)
            {
                return redirect('/adminPanel');
            }
            else
            {
                flash('Error in account registry, please contact the website administrator');
                return redirect('/');
            }
        }
        else
        {
            flash('Wrong username or password')->error();
            return redirect('/');
        }
    }
    function registerIndex()
    {
        return view('admin.register');
    }
    function studentIndex()
    {
        return view('admin.register_student');
    }
    function sponsorIndex()
    {
        return view('admin.register_sponsor');
    }
    function student(UserValidation $r)
    {

        $data = [];
        foreach($r->all() as $key=>$value)
        {
            if($key !== '_token')
            {
                $data[$key] = e($value);
            }
        }
        try
        {
            $user = new User();
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            $user->address = $data['address'];
            $user->liceu = $data['school'];
            $user->city = $data['city'];
            $user->age = $data['age'];
            $user->phone = $data['phone'];
            $user->account_type = 1;
            $user->save();
        } catch (QueryException $e)
        {
            flash($e->getMessage())->error();
            return redirect()->back();
        }

        if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']]))
        {
            return redirect('/dashboard');
        }
        else
        {
            flash('Unable to login')->error();
            return redirect()->back();
        }
    }
}
