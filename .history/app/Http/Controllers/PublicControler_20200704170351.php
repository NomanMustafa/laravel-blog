<?php

namespace App\Http\Controllers;

class PublicControler extends Controller
{
    public function index()
    {
        return view('welcome');
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

