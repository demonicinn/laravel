
<header class="site-header {{ (Request::segment(1))?'sub-header':'home-header' }}">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <div class="site-logo">
          <a href="{{ url('/') }}">
            @if($setting->site_logo)
            <img src="{{ asset('uploads/site/'.$setting->site_logo) }}">
            @endif
          </a>
        </div>
      </div>
      
      <div class="col-md-7">
        <div class="header-ryt">
          <div class="top-right">
            <div class="social-icon">
              <ul>
                @if($setting->facebook)
                <li>
                  <a href="{{ $setting->facebook }}">
                    <i class="fa fa-facebook" aria-hidden="true"></i> 
                  </a>
                </li>
                @endif

                @if($setting->twitter)
                <li>
                  <a href="{{ $setting->twitter }}">
                    <i class="fa fa-twitter" aria-hidden="true"></i> 
                  </a>
                </li>
                @endif

                @if($setting->youtube)
                <li>
                  <a href="{{ $setting->youtube }}">
                    <i class="fa fa-youtube-play" aria-hidden="true"></i> 
                  </a>
                </li>
                @endif

                @if($setting->vimeo)
                <li>
                  <a href="{{ $setting->vimeo }}">
                    <i class="fa fa-vimeo-square" aria-hidden="true"></i> 
                  </a>
                </li>
                @endif
                
              </ul>
            </div>
            <div class="site-nav">
              <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <button type="button" class="navbar-toggle collapsed close-icon" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                    <h3>menu</h3>
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="{{ url('/') }}">Home Page <span class="sr-only">(current)</span></a></li>
                      <li><a href="about-us.html">About Us</a></li>
                      <li><a href="{{ route('success.stories') }}">Success Stories</a></li>
                      <li><a href="{{ route('program.index') }}">Our Programs</a></li>
                      <li><a href="contact.html">Contact Us</a></li>
                      <li><a href="acadmy.html">Book With Us</a></li>
                    </ul>

                    <div class="social-icon">
                      <a href="mailto:{{ $setting->support_email }}">{{ $setting->support_email }}</a>
                      <ul>
                        
                        @if($setting->facebook)
                        <li>
                          <a href="{{ $setting->facebook }}">
                            <i class="fa fa-facebook" aria-hidden="true"></i> 
                          </a>
                        </li>
                        @endif

                        @if($setting->twitter)
                        <li>
                          <a href="{{ $setting->twitter }}">
                            <i class="fa fa-twitter" aria-hidden="true"></i> 
                          </a>
                        </li>
                        @endif

                        @if($setting->youtube)
                        <li>
                          <a href="{{ $setting->youtube }}">
                            <i class="fa fa-youtube-play" aria-hidden="true"></i> 
                          </a>
                        </li>
                        @endif

                        @if($setting->vimeo)
                        <li>
                          <a href="{{ $setting->vimeo }}">
                            <i class="fa fa-vimeo-square" aria-hidden="true"></i> 
                          </a>
                        </li>
                        @endif

                      </ul>
                    </div>
                  </div>
                  <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
              </nav>
            </div>
          </div>
          <!--top-right-->
          <div class="login-info">
            <ul>
              <!-- Authentication Links -->
              @guest
                <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
              @else
                <li><a href="javascript:void(0)">{{ Auth::user()->fname }} {{ Auth::user()->lname }}</a>
                  <ul class="sub-profile-info">
                    <li><a href="{{ route('profile.index') }}">{{ __('Profile') }}</a></li>					
                    <li><a href="{{ route('cart.index') }}">{{ __('Cart') }}</a></li>					
                    <li><a href="{{ route('settings.profile') }}">{{ __('Settings') }}</a></li>					
                    @if(Auth::user()->roles_id==1)
                    <li><a href="{{ route('admin.dashboard.index') }}">{{ __('Admin') }}</a></li>
                    @endif
                    <li>
                      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>
                    </li>                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                  </ul>
                </li>                
              @endguest
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
