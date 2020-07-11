@extends('layouts.admin')
@section('title') Edit Product @endsection
@section('content') 
<div class="xs">
    <h3>Edit Product</h3>
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
            <form class="form-horizontal" action="{{ route('adminEditProduct' , $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Thumbnails</label>
                    <div class="col-sm-8">
                        <input type="file"  name="thumbnail" class="form-control1">
                         <img src="{{ asset($product->thumbnail) }}" width="100"  alt=""> 
                </div>
                    </div>
                 
                   <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-8">
                        <input type="text"  name="title" value="{{ $product->title }}" class="form-control1" id="focusedinput" placeholder="Enter Title">
                    </div>
                  
                </div>
                 <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Price</label>
                    <div class="col-sm-8">
                        <input type="text"  value="{{ $product->price }}" name="price" class="form-control1" id="focusedinput" placeholder="Enter Amount">
                    </div>
                  
                </div>
                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-8">
                    <textarea  name="description" id="txtarea1" cols="87" rows="12" >{{ $product->description }}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" style="margin-left: 13rem;">Update Product</button>
            </form>
        </div>
    </div>
</div>

@endsection
