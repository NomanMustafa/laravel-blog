<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function comments()
    {
        return view('user.comments');
    }
    public function profile()
    {
        return view('user.profile');
    }
    public function profilePost(Request $request)
    {
        dump($request->all());
    }

}
