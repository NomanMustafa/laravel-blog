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
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
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