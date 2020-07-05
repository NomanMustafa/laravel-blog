@extends('layouts.master')
@section('content')

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('{{ asset('assets/img/post-bg.jpg') }}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{ $post->title }}</h1>
           
            <span class="meta">Posted by
              <a href="#">{{ $post->user->name }}</a>
              on {{date_format( $post->created_at, 'F D,Y' )}}|</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
         {!! $post->content  !!}
        </div>
      </div>

      <div class="comments">
      <hr>
        <p>Comments Content</p>
         <p><small>By M Noman Mustafa</small></p>

      </div>
    </div>
  </article>

  @endsection