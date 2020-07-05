<?php

namespace App\Http\Controllers;

class AuthorController extends Controller
{

    public function __construct()
    {
        $this->middleware('checkRole:author');
    }

    public function dashboard()
    {
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
