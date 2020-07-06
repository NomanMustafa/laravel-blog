<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li><a>User</a> </li>
            <li>
                <a href="{{ route('userDashboard') }}"><i class="fa fa-dashboard fa-fw nav_icon {{ Route::currentRouteName()== 'userDashboard' ? 'active': ''}}"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{ route('userComments') }}"><i class="fa fa-laptop nav_icon"></i>Comments</a>

                <!-- /.nav-second-level -->
            </li>
            <li> <a>Author</a> </li>
            <li>
                <a href="{{ route('authorDashboard') }}"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{ route('authorPosts') }}"><i class="fa fa-laptop nav_icon"></i>Posts</a>

                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{ route('authorComments') }}"><i class="fa fa-laptop nav_icon"></i>Comments</a>

                <!-- /.nav-second-level -->
            </li>
            <li><a>Admin</a></li>
            <li>
                <a href="{{ route('adminDashboard') }}"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{ route('adminPosts') }}"><i class="fa fa-laptop nav_icon"></i>Posts</a>

                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{ route('adminComments') }}"><i class="fa fa-laptop nav_icon"></i>Comments</a>

                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{ route('adminUsers') }}"><i class="fa fa-laptop nav_icon"></i>Users</a>

                <!-- /.nav-second-level -->
            </li>



        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
  </nav>