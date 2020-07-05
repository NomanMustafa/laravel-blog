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

    }

    public function posts()
    {

    }
    public function comments()
    {

    }
}
