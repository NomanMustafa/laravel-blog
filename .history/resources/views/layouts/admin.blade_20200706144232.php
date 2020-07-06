<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>@yield('title', 'Laravel Blog Dashboard')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{ asset('admin/assets/css/style.css') }}" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{ asset('admin/assets/css/lines.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('admin/assets/css/font-awesome.css') }}" rel="stylesheet"> 
<!-- jQuery -->
<script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="{{ asset('admin/assets/css/custom.css') }}" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('admin/assets/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom.js') }}"></script>
<!-- Graph JavaScript -->
<script src="{{ asset('admin/assets/js/d3.v3.js') }}"></script>
<script src="{{ asset('admin/assets/js/rickshaw.js') }}"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
     
            @include('includes.admin.headerNavigation')
            @include('includes.admin.sideBar')
    <div id="page-wrapper">
        <div class="graphs">           
@yield('content')
</div>
</div>

	      <!-- map -->
<link href="{{ asset('admin/assets/css/jqvmap.css') }}" rel='stylesheet' type='text/css' />
<script src="{{ asset('admin/assets/js/jquery.vmap.js') }}"></script>
<script src="{{ asset('admin/assets/js/jquery.vmap.sampledata.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/js/jquery.vmap.world.js') }}" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#vmap').vectorMap({
		    map: 'world_en',
		    backgroundColor: '#333333',
		    color: '#ffffff',
		    hoverOpacity: 0.7,
		    selectedColor: '#666666',
		    enableZoom: true,
		    showTooltip: true,
		    values: sample_data,
		    scaleColors: ['#C8EEFF', '#006491'],
		    normalizeFunction: 'polynomial'
		});
	});
</script>
<!-- //map -->
       </div>
       <div class="clearfix"> </div>
    </div>
   
    
		 
	
		<div class="copy">
            <p>Copyright &copy; 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	    </div>
		
      <!-- /#page-wrapper -->
 </div> 
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('admin/assets/css/custom.css') }}" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('admin/assets/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom.js') }}"></script>
</body>
</html>
