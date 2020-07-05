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
         <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="{{ asset('admin/assets/images/1.png') }}"><span class="badge">9</span></a>
         <ul class="dropdown-menu">
             <li class="dropdown-menu-header text-center">
                 <strong>Account</strong>
             </li>
             <li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
             <li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
             <li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
             <li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
             <li class="dropdown-menu-header text-center">
                 <strong>Settings</strong>
             </li>
             <li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
             <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
             <li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
             <li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
             <li class="divider"></li>
             <li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
             <li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>
         </ul>
     </li>
 </ul>
 <form class="navbar-form navbar-right">
     <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
 </form>
