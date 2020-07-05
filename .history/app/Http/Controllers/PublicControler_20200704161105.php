<?php

namespace App\Http\Controllers;

class PublicControler extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
