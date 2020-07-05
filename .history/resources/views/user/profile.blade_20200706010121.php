@extends('layouts.admin')

@section('content')

<div id="page-wrapper">
     <div class="col-md-12 graphs">
	     <div class="xs">
  	    <h3>Validation</h3>
  	    <div class="well1 white">
        <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" novalidate="novalidate" action="{{ route('profilePost') }}" method="POST">
        @csrf
          <fieldset>
            <div class="form-group">
              <label class="control-label">User Name</label>
              <input type="text" name="name" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="" value="{{ Auth::user()->name }}">
            </div>
            <div class="form-group">
              <label class="control-label">Email</label>
              <input type="email" name="email" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" ng-model="model.email" required="" value="{{ Auth::user()->email }}">
            </div>
            <div class="form-group">
              <label class="control-label">Password</label>
              <input type="password" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.password" required="" >
            </div>
            
         
            
         
           
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    </div>
    </div>
  

@endsection