<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegister()
    {
        if(Auth::check()){
            return redirect('home');
        }
        return view('register');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        return redirect()->route('login')->with('success', 'Account created successfully');
    }
}
