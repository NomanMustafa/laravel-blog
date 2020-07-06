@extends('layouts.admin')
@section('title') New Post @endsection
@section('content')
<div class="xs">
    <h3>Forms</h3>
    <div class="tab-content">
        <div class="tab-pane active" id="horizontal-form">
        @if(Session::has('success'))
        <div class="alert alert-success" >{{\Session::get('success') }}</div>
        @endif
         @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            <form class="form-horizontal" action="{{ route('createPost') }}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Focused Input</label>
                    <div class="col-sm-8">
                        <input type="text"  name="title" class="form-control1" id="focusedinput" placeholder="Default Input">
                    </div>
                  
                </div>
                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Textarea</label>
                    <div class="col-sm-8">
                    <textarea  name="content" id="txtarea1" cols="60" rows="20" ></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" style="margin-left: 13rem;">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
