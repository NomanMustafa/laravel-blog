<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li><a>User</a> </li>
            <li>
                <a href="{{ route('userDashboard') }}"><i class="fa fa-dashboard fa-fw nav_icon {{ Route::currentRouteName()== 'userDashboard' ? 'active': ''}}"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{ route('userComments') }}"><i class="fa fa-laptop nav_icon {{ Route::currentRouteName()== 'userComments' ? 'active': ''}}" ></i>Comments</a>

                <!-- /.nav-second-level -->
            </li>
            @if(Auth::usser()->author==true)
            <li> <a>Author</a> </li>
            <li>
                <a href="{{ route('authorDashboard') }}"><i class="fa fa-dashboard fa-fw nav_icon {{ Route::currentRouteName()== 'authorDashboard' ? 'active': ''}}"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{ route('authorPosts') }}"><i class="fa fa-laptop nav_icon {{ Route::currentRouteName()== 'authorPosts' ? 'active': ''}}"></i>Posts</a>

                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{ route('authorComments') }}"><i class="fa fa-laptop nav_icon {{ Route::currentRouteName()== 'authorComments' ? 'active': ''}}"></i>Comments</a>

                <!-- /.nav-second-level -->
            </li>
            @endif
            @if(Auth::usser()->admin==true)
            <li><a>Admin</a></li>
            <li>
                <a href="{{ route('adminDashboard') }}"><i class="fa fa-dashboard fa-fw nav_icon {{ Route::currentRouteName()== 'adminDashboard' ? 'active': ''}}"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{ route('adminPosts') }}"><i class="fa fa-laptop nav_icon {{ Route::currentRouteName()== 'adminPosts' ? 'active': ''}}"></i>Posts</a>

                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{ route('adminComments') }}"><i class="fa fa-laptop nav_icon {{ Route::currentRouteName()== 'adminComments' ? 'active': ''}}"></i>Comments</a>

                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{ route('adminUsers') }}"><i class="fa fa-laptop nav_icon {{ Route::currentRouteName()== 'adminUsers' ? 'active': ''}}"></i>Users</a>

                <!-- /.nav-second-level -->
            </li>

            @endif

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
  </nav>