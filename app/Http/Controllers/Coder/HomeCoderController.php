<?php

namespace App\Http\Controllers\Coder;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeCoderController extends Controller
{
    public function coderIndex(){
        return view('coder.indexCoder');
    }
    public function playlistCoder(){
        return view('coder.playlistCoder');
    }
}
