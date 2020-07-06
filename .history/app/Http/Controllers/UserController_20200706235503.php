<?php

namespace App\Http\Controllers;

use App\Comment;
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
        $user->save();
        if($request['password'] != "")
        {
            if(!(Hash::check($request['password'], Auth::user()->password)))
            {
                return redirect()->back()->with('error', 'Your currrent password are not with you provided');
            }
        }
        return back();
        
        dd($request->all());
    }
    public function deleteComment()
    {
        $comment = Comment::where('id', $id)->where('user_id', Auth::id())->delete();
        
        return back();
    }

}
