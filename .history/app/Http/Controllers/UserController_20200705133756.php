<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function dashbaord()
    {
        return view('user.dashboard');
    }

    public function comments()
    {
        return view('user.comments');
    }
}
