@extends('layouts.admin')

@section('content')
<div class="xs">
  	 <h3>Author Tables</h3>
  
   <div class="panel-body1">
   <table class="table">
     <thead>
      
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Created At</th>
          <th>Upload At</th>
           <th>Comments</th>
          <th>Action</th>
        </tr>
      
      </thead>
      <tbody>
       @foreach(Auth::user()->posts as $post)   
        <tr>
          <th scope="row">{{ $post->id }}</th>
          <td><a href="{{ route('singlePost', $post->id) }}">{{ $post->title }}</a></td>
          <td>{{ \Carbon\Carbon::parse($post->updated_at)->diffForHumans() }}</td>
          <td>{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</td>
          <td>{{ $post->comments->count() }}</td>
          <td>
          <a href="{{ route('postEdit',  $post->id) }}" class="btn-warning">Edit</a>
          <form id="deletePost-{{ $post->id }}" action="{{ route('deletePost', $post->id) }}" method="POST">@csrf</form><br>
          <a href="#" onclick="document.getElementById('deletePost-{{ $post->id }}').submit();" class="btn-warning">Delete</a> 
          </td>
        </tr>
          @endforeach
     
      </tbody>
    </table>
    </div>

  </div>
  </div>
@endsection