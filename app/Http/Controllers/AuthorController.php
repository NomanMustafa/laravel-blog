<?php

namespace App\Http\Controllers;

use session;
use App\Post;
use App\Comment;
use Carbon\Carbon;
use App\Http\Requests\CreatePost;
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
        $todaycomment= $allcomments->where('created_at','>=', Carbon::today())->count();
        return view('author.dashboard', compact('allcomments', 'todaycomment'));
    }
    public function newPosts()
    {
        return view('author.newPost');
    }
    public function createPost(CreatePost $request)
    {
        
        $post = new Post();
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->user_id =Auth::id();
      
        $post->save();
       
       
       return back()->with('success', 'The Post is sucessfully Created'); 
    }
    public function posts()
    {
        return view('author.posts');
    }
    public function comments()
    {
        $posts = Post::where('user_id', Auth::id())->pluck('id')->toArray();
        $comments = Comment::whereIn('post_id', $posts);
        return view('author.comments', compact('comments'));
    }
    public function postEdit($id)
    {
        $post = Post::where('id',$id)->where('user_id', Auth::id())->first();
        return view('author.editPost', compact('post'));
    }
    public function postEditPost(CreatePost $request ,$id)
    {
        $post = Post::where('id',$id)->where('user_id', Auth::id())->first();
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->save();
        return back()->with('success', 'Post Updated successfully');
    }
    public function deletePost($id)
    {
        $post = Post::where('id', $id)->where('user_id', Auth::id())->first();
        $post->delete();
        return back();
    }
}
