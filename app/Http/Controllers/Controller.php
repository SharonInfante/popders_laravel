<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // public function home(){
    //     return view('home');
    // }

    // public function login(){
    //     return view('login');
    // }

    // public function register(){
    //     return view('register');
    // }
    public function screen(){
        return view('screen');
    }
}
