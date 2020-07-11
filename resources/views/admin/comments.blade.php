@extends('layouts.admin')
@section('title') Admin Comments @endsection
@section('content')
<div class="xs">
  	 <h3>Admin Comments</h3>
  
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
       @foreach($comments as $comment)   
        <tr>
          <th scope="row">{{ $comment->id }}</th>
          <td><a href="{{ route('singlePost', $comment->id) }}">{{ $comment->post->title }}</a></td>
          <td>{{ $comment->content }}</td>
          <td>{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</td>
          <td>
          <form id="deleteComment-{{ $comment->id }}" method="post" action="{{ route('adminDeletComment', $comment->id) }}" >@csrf</form>
          <button type="button" class="btn btn-danger" onclick="document.getElementById('deleteComment-{{ $comment->id }}').submit();">X</button></td>
        </tr>
          @endforeach
     
      </tbody>
    </table>
    </div>

  </div>
  </div>
@endsection