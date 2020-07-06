@extends('layouts.admin')

@section('content')
  <div id="page-wrapper">
        <div class="graphs">
     	<div class="col_3">
       
        	<div class="col-md-6 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>{{ Auth::user()->comments->unique('post_id')->count() }}</strong></h5>
                      <span>Commented Post</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-5 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-comment user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>{{ Auth::user()->comments->count() }}</strong></h5>
                      <span>Comments</span>
                    </div>
                </div>
        	</div>
        
        	<div class="clearfix"> </div>
      </div>
   
	  <div class="span_11">
		<div class="col-md-6 col_4">
		  <div class="map_container"><div id="vmap" style="width: 100%; height: 400px;"></div></div>
		  <!----Calender -------->
			<link rel="stylesheet" href="{{ asset('admin/assets/css/clndr.css') }}" type="text/css" />
			<script src="{{ asset('admin/assets/js/underscore-min.js') }}" type="text/javascript"></script>
			<script src= "{{ asset('admin/assets/js/moment-2.2.1.js') }}" type="text/javascript"></script>
			<script src="{{ asset('admin/assets/js/clndr.js') }}" type="text/javascript"></script>
			<script src="{{ asset('admin/assets/js/site.js') }}" type="text/javascript"></script>
			<!----End Calender -------->
		</div>
		{{-- <div class="col-md-6 col_5">
		  <div id="chart_container">
		   <div id="chart"></div>
	       <div id="slider"></div> --}}
@endsection