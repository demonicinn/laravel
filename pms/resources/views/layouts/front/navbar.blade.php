<div id="header" class="header-fixed">	
	<div class="header-left">
		<button id="mobile-menu" class="mobile hamburger hamburger--squeeze is-active" type="button">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>
		<div id="brand">
			<a href="{{ url('/') }}" class="brand-wrapper">
				<img src="{{url('img/logo.png')}}" class="img-fluid" alt="">
				<span class="title">PMS</span>
			</a>
		</div>
		<button id="mobile-btn" type="button" class="btn"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
	</div>
	
	<div class="header-toggle">
		<div class="header-content header-hidden">
			<div class="left">				
				<button id="hidden-btn" class="hamburger hamburger--squeeze is-active" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
			
			<div class="right">
				<ul class="nav">
					<li class="nav-item profile dropdown hidden-sm-down">
						<a class="dropdown-toggle" href="#" id="profile_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<div class="user-image">{{ substr(Auth::user()->fname, 0, 1).''.substr(Auth::user()->lname, 0, 1) }}</div>
							{{ Auth::user()->fname.' '.Auth::user()->lname }}
						</a>
						<div class="dropdown-menu" aria-labelledby="profile_dropdown">
							<div class="profile-detalis ">
								<div class="profile-img">
									<img src="{{url('img/profile/profile-drop.jpg')}}" class="img-fluid" alt="">									
								</div>
								<a class="dropdown-item profile-name" href="#">{{ Auth::user()->fname.' '.Auth::user()->lname }}</a>
								<div class="profile-links">
									<a href="#" class="link">Edit Profile </a>
									<a href="#" class="link">View Profile</a>   
								</div>
							</div>
							<a class="dropdown-item single-link" href="#">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								Inbox
							</a>                   
							<a class="dropdown-item single-link" href="#">
								<i class="fa fa-lock" aria-hidden="true"></i>
								Lockscreen
							</a>   
							<div class="dropdown-divider"></div> 
							<a class="dropdown-item single-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
								<i class="fa fa-sign-out" aria-hidden="true"></i>
								Logout
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</div>
					</li>
					
					<li class="nav-item hidden-md-up"><a href="#" class="mobile-link"><i class="fa fa-users" aria-hidden="true"></i>Profile</a></li>
					<li class="nav-item hidden-md-up"><a href="#" id="mobile-slide" class="mobile-link"><i class="fa fa-cog" aria-hidden="true"></i>Settings</a></li>
					<li class="nav-item hidden-md-up"><a href="#" class="mobile-link"><i class="fa fa-envelope" aria-hidden="true"></i>Inbox</a></li>
					<li class="nav-item hidden-md-up"><a href="#" class="mobile-link"><i class="fa fa-sign-out" aria-hidden="true"></i>Sign Out</a></li>
					
				</ul>
			</div>
		</div>
	</div>
</div>

<div id="page">