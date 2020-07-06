<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{

    public function __construct()
    {
        $this->middleware('checkRole:author');
    }

    public function dashboard()
    {
        $posts = Post::where('user_id', Auth::id())->pluck('id')->toArray();
        $allcomments = Comment::whereIn('post_id', $posts);
        $todaycomment = $allcomments->where('created_at','>=', Carbon\Carbon::today())->count()
        return view('author.dashboard', compact('allcomments', 'todaycomment'));
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