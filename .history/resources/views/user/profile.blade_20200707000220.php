@extends('layouts.admin')

@section('content')

<div id="page-wrapper">
    <div class="col-md-12 graphs">
        <div class="xs">
            <h3>User Profile </h3>

            <div class="well1 white">
                @if(Session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}

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
                    <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" novalidate="novalidate" action="{{ route('userProfilePost') }}" method="POST">
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
                                <label class="control-label">Current Password</label>
                                <input type="password" name="password" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.password" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">New Password</label>
                                <input type="password" name="password" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.password" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Conform Password</label>
                                <input type="password" name="password" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.password" required="">
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
