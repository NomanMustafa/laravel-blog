@extends('layouts.admin')
@section ('title') Admin Product @endsection
@section('content')
<div class="xs">
  	 <h3>Product Tables</h3>
  <a href="{{ route('adminNewProduct')}}" class="btn btn-primary">New Product</a>
   <div class="panel-body1">
   <table class="table">
     <thead>
      
        <tr>
          <th>#</th>
           <th>Thumbnails</th>
          <th>Title</th>
          <th>Description</th>         
           <th>Price</th>
          <th>Action</th>
        </tr>
      
      </thead>
      <tbody>
       @foreach($products as $product)   
        <tr>
          <td scope="row">{{ $product->id }}</td>
            <td scope="row"><img src="{{ asset($product->thumbnail) }}" width="100"> </td>
          <td><a href="{{ route('adminEditProduct', $product->id) }}">{{ $product->title }}</a></td>
          <td>{{ $product->description }}</td>
          <td>{{ $product->price}}</td>
          
          <td>
          <a href="{{ route('adminEditProduct',  $product->id) }}" class="btn-warning">Edit</a>
          <form id="deletePost-{{ $product->id }}" action="{{ route('deleteProduct', $product->id) }}" method="POST">@csrf</form><br>
          <a href="#" onclick="document.getElementById('deletePost-{{ $product->id }}').submit();" class="btn-warning">Delete</a> 
          </td>
        </tr>
          @endforeach
     
      </tbody>
    </table>
    </div>

  </div>
  </div>
@endsection