<?php

namespace App\Http\Controllers;

use App\Post;

class PublicControler extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }
    public function singlePost()
    {
        return view('singlePost');
    }
    public function about()
    {
        return view('about');
    }
    public function contect()
    {
        return view('contect');
    }
    public function contectPost()
    {

    }
}

