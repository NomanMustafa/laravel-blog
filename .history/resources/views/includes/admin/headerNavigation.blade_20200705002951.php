<div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
     </button>
     <a class="navbar-brand" href="index.html">Modern</a>
 </div>
 <!-- /.navbar-header -->
 <ul class="nav navbar-nav navbar-right">
     <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
        
             
     <li class="dropdown">
         <a href="#"  data-toggle="dropdown"><img src="{{ asset('admin/assets/images/1.png') }}"><span class="badge">9</span></a>
         <ul class="dropdown-menu">
           
            
             <li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>
         </ul>
     </li>
 </ul>
 <form class="navbar-form navbar-right">
     <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
 </form>
