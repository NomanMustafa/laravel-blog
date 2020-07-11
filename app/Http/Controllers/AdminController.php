<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use App\Product;
use App\Http\Requests\CreatePost;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('checkRole:admin');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function comments()
    {
       $comments = Comment::all();
        return view('admin.comments' , compact('comments'));
    }
    public function deletComment($id)
    {
        $post = Post::where('id', $id)->first();
        $post->delete();
        return back();
    }
    public function posts()
    {
        $posts = Post::all();

        return view('admin.posts', compact('posts'));
    }

    public function users()
    {
        return view('admin.users');
    }
    public function postEdit($id)
    {
        $post = Post::where('id',$id)->first();
        return view('admin.editPost', compact('post'));
    }
    public function postEditPost(CreatePost $request ,$id)
    {
        $post = Post::where('id',$id)->first();
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->save();
        return back()->with('success', 'Post Updated successfully');
    }
    public function deletePost($id)
    {
        $post = Post::where('id', $id)->first();
        $post->delete();
        return back();
    }

public function products()
{
    $products = Product::all();
 return view('admin.products' , compact('products'));
}
public function newProduct()
{
    return view('admin.newProduct');
}
public function newProductPost(Request $request)
{
    $this->validate($request, [
        'title' => 'required',
        'thumbnail' => 'required|file',
        'price' => 'required',
        'description' => 'required'
    ]);
    
    $product = new Product();
    $product->title =$request['title'];
    $product->description =$request['description'];
    $product->price =$request['price'];
    $thumbnail = $request->file('thumbnail');
    $fileName = $thumbnail->getClientOriginalName();
    $fileExtension =$thumbnail->getClientOriginalExtension();
    $thumbnail->move('product-image', $fileName);
    $product->thumbnail = 'product-image/'. $fileName;
    $product->save();
    return back();

}
public function editProduct($id)
{
    $product = Product::findOrFail($id);
    return view('admin.editProduct', compact('product'));  

}
public function editProductPost(Request $request ,$id)
{

    $this->validate($request, [
        'title' => 'required',
        'thumbnail' => 'file',
        'price' => 'required',
        'description' => 'required'
    ]);

    $product = Product::findOrFail($id);
    $product->title =$request['title'];
    $product->description =$request['description'];
    $product->price =$request['price'];

    if($request->hasFile('thumbnail')) {

    $thumbnail = $request->file('thumbnail');
    $fileName = $thumbnail->getClientOriginalName();
    $thumbnail->move('product-image', $fileName);
    $product->thumbnail = 'product-image/'. $fileName;

    }

    $product->save();
    return back();

}


}
