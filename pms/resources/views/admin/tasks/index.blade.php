@extends('layouts.app')
@section('title', 'Tasks')
@section('content')
	<div class="cust-slide">
		<div class="inbox-toggle">
			<div class="inbox-sidebar mobile-inbox pro">
			<div class="inbox-bg"></div>
				<div class="inbox-sidebar-header">
					<h5>Projects</h5>
				</div>
				<ul class="inbox-sidebar-nav">
					@foreach($projects as $row)
					<li class="sidebar-item {{ ($row->id==$pid)?'active':'' }}">
						<a href="{{ url('tasks/list/'.base64_encode($row->id.'/'.time())) }}" class="sidebar-link">
							<i class="fa fa-circle"></i> {{ $row->name }}
						</a>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
	
			
		@if(Request::segment(2)=='list')
			@include('admin/tasks/lists')
		@elseif(Request::segment(2)=='add')
			@include('admin/tasks/add')
		@elseif(Request::segment(2)=='view')
			@include('admin/tasks/view')
		@elseif(Request::segment(2)=='edit')
			@include('admin/tasks/edit')
		@elseif(Request::segment(2)=='reply')		
			@include('admin/tasks/reply')
		@endif
	<div>
@endsection





@if(Request::segment(1)=='tasks1' && Request::segment(2)=='view1' || Request::segment(2)=='reply1')
	@section('script')
	<script>
		jQuery(document).ready(function(){
			jQuery('#left-sidebar').addClass('close-sidebar');
			jQuery('#content.inbox.full').addClass('full-width');
			jQuery('.header-left').addClass('hidden');
			jQuery('#hidden-btn.hamburger.hamburger--squeeze').addClass('bg-brand');
			jQuery('.hamburger.hamburger--squeeze').removeClass('is-active');
			jQuery('.reply .reply-send').removeClass('small');
			
			jQuery('#hidden-btn').click(function(){
				jQuery('.reply .reply-send').toggleClass('small');
			});
		});
	</script>
	@endsection
@endif
