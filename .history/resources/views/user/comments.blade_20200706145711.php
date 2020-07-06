@extends('layouts.admin')

@section('content')
<div class="xs">
  	 <h3>Basic Tables</h3>
  
   <div class="panel-body1">
   <table class="table">
     <thead>
      
        <tr>
          <th>#</th>
          <th>Post</th>
          <th>Content</th>
          <th>Created at</th>
          <th>Action</th>
        </tr>
      
      </thead>
      <tbody>
       @foreach (Auth::user->comments as $comment)   
        <tr>
          <th scope="row">{{ $comment->id }}</th>
          <td>{{ $comment->post_title }}</td>
          <td>{{ $comment->content }}</td>
          <td>{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</td>
          <td><a href="">X</a></td>
        </tr>
          @endforeach
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
    </div>

  </div>
  </div>
@endsection