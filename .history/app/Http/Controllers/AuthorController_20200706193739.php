<?php

namespace App\Http\Controllers;

use App\Post;

class AuthorController extends Controller
{

    public function __construct()
    {
        $this->middleware('checkRole:author');
    }

    public function dashboard()
    {
        $posts = Post::where('user_id', Auth::id())->pluck('id')->toArray();
        dump($posts);die();
        return view('author.dashboard');
    }

    public function posts()
    {
        return view('author.posts');
    }
    public function comments()
    {
        return view('author.comments');
    }
}
