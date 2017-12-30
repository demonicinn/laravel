<div id="left-sidebar" class="sidebar-fixed">
	<div class="bg"></div>
	<nav id="nav" class="sidebar-nav menu-scroll">
		<ul id="menu" class="side-nav metismenu">
			
			<li class="sidebar-header">Menu</li>
			
			<li class="main {{ (Request::path()=='dashboard'||Request::path()=='/')?'active':'' }}">
				<a href="{{route('dashboard')}}" class="collapse">
					<i class="fa fa-tachometer" aria-hidden="true"></i>
					<span class="drop-header">Dashboard</span>
				</a>
			</li>

			<li class="main {{ Request::is('notifications*')?'active':'' }}">
				<a href="{{route('notifications')}}" class="collapse">
					<i class="fa fa-bell" aria-hidden="true"></i>
					<span class="drop-header">Notifications</span>
				</a>
			</li>

			<li class="main {{ Request::is('announcements*')?'active':'' }}">
				<a href="{{route('announcements')}}" class="collapse">
					<i class="fa fa-bullhorn" aria-hidden="true"></i>
					<span class="drop-header">Announcements</span>
				</a>
			</li>

			<li class="main {{ Request::is('notes*')?'active':'' }}">
				<a href="{{route('notes')}}" class="collapse">
					<i class="fa fa-sticky-note-o" aria-hidden="true"></i>
					<span class="drop-header">Notes</span>
				</a>
			</li>

			<li class="main {{ Request::is('milestones*')?'active':'' }}">
				<a href="{{route('milestones')}}" class="collapse">
					<i class="fa fa-stack-exchange" aria-hidden="true"></i>
					<span class="drop-header">Milestones</span>
				</a>
			</li>
			
			<li class="main {{ Request::is('skills*') ? 'active' : '' }}">
				<a href="{{route('skills')}}" class="collapse">
					<i class="fa fa-skyatlas" aria-hidden="true"></i>
					<span class="drop-header">Skills</span>
				</a>
			</li>
			
			<li class="main {{ Request::is('projects*') ? 'active' : '' }}">
				<a href="{{route('projects')}}" class="collapse">
					<i class="fa fa-th" aria-hidden="true"></i>
					<span class="drop-header">Projects</span>
				</a>
			</li>
			
			<li class="main {{ Request::is('tasks*') ? 'active' : '' }}">
				<a href="{{route('tasks')}}" class="collapse">
					<i class="fa fa-tasks" aria-hidden="true"></i>
					<span class="drop-header">Tasks</span>
				</a>
			</li>
			
			<li class="main {{ Request::is('users*') ? 'active' : '' }}">
				<a href="{{route('users')}}" class="collapse">
					<i class="fa fa-users" aria-hidden="true"></i>
					<span class="drop-header">Users</span>
				</a>
			</li>
			
			<li class="main dropdown {{ Request::is('profile*') ? 'active in' : '' }}">
				<a class="chevron collapse" href="#" aria-expanded="true"><i class="fa fa-gear" aria-hidden="true"></i><span class="drop-header">Settings</span></a>
				<ul class="drop-menu one-drop" aria-expanded="true">  
					<li class="{{ Request::is('profile/view') ? 'active' : '' }}"><a href="{{route('profile.view')}}"><i class="fa fa-circle-o" aria-hidden="true"></i> Profile</a></li>
					<li class="{{ Request::is('profile/password') ? 'active' : '' }}"><a href="{{route('profile.password')}}"><i class="fa fa-circle-o" aria-hidden="true"></i> Change Password</a></li>
				</ul>
			</li>
			
		</ul>
	</nav>
</div>


@if(Request::segment(1)=='profile' && Request::segment(2)=='view')
<div id="content" class="profile">
@elseif(Request::segment(1)=='tasks1' && Request::segment(2)=='view1' || Request::segment(2)=='reply1')
<div id="content" class="inbox full">
@elseif(Request::segment(1)=='tasks')
<div id="content" class="inbox">
@else

<div id="content" >
	<!-- breadcrumb -->
	<div class="row">
		<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<h4>@yield('title')</h4>
			<nav class="breadcrumb">
				@if(empty(Request::segment(1)) || Request::segment(1)=='dashboard')
					<p class="text-muted">Welcome to Dashboard</p>
				@else
					<a href="{{route('dashboard')}}">Dashboard</a>				
					@for($i=1; $i <= count(Request::segments()); $i++)
						@if(count(Request::segments())==$i || $i>1 || Request::segment($i)=='profile')
						<a class="active">{{Request::segment($i)}}</a>
						@else
						<a href="{{url('/'.Request::segment($i))}}">{{Request::segment($i)}}</a>
						@endif
					@endfor
				@endif
			</nav>
		</div>
	</div>
@endif
	
	@if(Request::segment(1)!='tasks' && Request::segment(2)!='exit')
	@include('flash::message')
	@endif