<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{

    public function showLogin()
    {
        if (Auth::check()){
            return redirect()->route('home');
        }
        return view('login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        if (!$user) {
            dd('Error: credenciales incorrectas');
            return redirect()->to('login')->withErrors('auth.failed');
        }

        Auth::login($user);

        return $this->authenticated($request, $user);             
    }

    public function authenticated(Request $request, $user)
    {
        dd('User authenticated:', $user);
        return redirect()->route('home');
    }
}

 


// // $credentials = $request->getCredentials();

//         if (!Auth::attempt($credentials)) {
//             dd('Error: credenciales incorrectas');
//             return redirect()->to('login')->withErrors('auth.failed');
//         }

//         $user = Auth::getProvider()->retrieveByCredentials($credentials);
        
//         Auth::login($user);

//         return $this->authenticated($request, $user);   