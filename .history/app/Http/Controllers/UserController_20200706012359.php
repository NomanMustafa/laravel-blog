<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateUser;
use Illuminate\Support\Facades\Auth;

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
    public function profilePost(UpdateUser $request)
    {
        $user= Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        dd($user);
        $user->save();

        return back();
        
        dd($request->all());
    }

}
