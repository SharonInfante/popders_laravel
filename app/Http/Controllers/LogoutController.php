<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class logoutController extends Controller
{
    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();

        Session::invalidate();
        Session::flush();
        Auth::logout();
        return redirect('/');
        // return redirect()->to('login');
    }
}
