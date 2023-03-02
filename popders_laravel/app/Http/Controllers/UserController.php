<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enums\RoleTypeEnum;
use App\Models\User;

class UserController extends Controller
{
    public function welcomePage()
    {
        $users = User::all();

        return view('users.welcome', compact('users'));
    }

    public function videoPage()
    {
        $users = User::all();

        return view('users.video', compact('users'));
    }

    public function picsPage()
    {
        $users = User::all();

        return view('users.pics', compact('users'));
    }

    public function adminDashboard()
    {
        $admins = User::where('role', RoleTypeEnum::Admin)->get();

        return view('admin.dashboard', compact('admins'));
    }

    public function coderDashboard()
    {
        $coders = User::where('role', RoleTypeEnum::Coder)->get();

        return view('coder.dashboard', compact('coders'));
    }
}
