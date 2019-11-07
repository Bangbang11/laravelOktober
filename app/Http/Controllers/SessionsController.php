<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SessionRequest;
use Sentinel;
Use Session;

class SessionsController extends Controller
{
    public function login()
    {
        if ($user = Sentinel::check()) {
            Session::flash('notice','You Sudah Login'.$user->email);
            return redirect('/beranda');
        }
        else
        {
            return view('sessions.login');
        }
    }

    public function login_store(SessionRequest $request)
    {
        if ($user = Sentinel::authenticate($request->all())) {
            Session::flash('notice','Welcome '.$user->email);
            return redirect()->route('beranda');
        } else {
            Session::flash('error','Login Fails');
            return view('sessions.login');

        }
    }

    public function beranda()
    {
        return view('sessions.beranda');
    }

    public function logout()
    {
        Sentinel::logout();
        Session::flash('notice','Logout Success');
        return redirect('/');
    }
}
