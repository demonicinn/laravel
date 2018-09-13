<header class="top-menu-header">
    <!-- Logo -->
    <a href="{{ route('admin.dashboard.index') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><i class="fa fa-user-secret fa-2x"></i></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>{{ __('Admin') }}</b></span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a class="sidebar-toggle fa-icon" data-toggle="offcanvas" role="button">
            <span class="sr-only">{{ __('Toggle navigation') }}</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-top-menu">
            <ul class="nav navbar-nav">
                <!-- Navbar Search -->
                
                <!-- /. Navbar Search -->
                <!--Fullscreen-->
                <li>  		
                    <a id="fullscreen-page" role="button"><i class="fa fa-arrows-alt"></i></a>
                </li>
                
                <!-- /.messages-menu -->
                <!-- Notifications Menu -->
                
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" data-toggle="dropdown" aria-expanded="false">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Auth::user()->fname }} {{ Auth::user()->lname }}<i class="fa fa-angle-down pull-right"></i></span>
                        <!-- The user image in the navbar-->
                        <img src="{{ asset('admin/resources/img/icons/icon-user.png') }}" class="user-image" alt="User Image">
                    </a>
                    <ul class="dropdown-menu user-menu animated flipInY">
                        <li><a href="{{ route('profile.index') }}"><i class="ti-user"></i> {{ __('Profile') }}</a></li>
                        <li><a href="{{ route('settings.profile') }}"><i class="ti-settings"></i> {{ __('Setting') }}</a></li>
                        <li class="divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="ti-power-off"></i>  {{ __('Logout') }}
                                </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>                                
                    </ul>
                </li>
            </ul>
            
        </div>
    </nav>
</header>