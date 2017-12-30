<div class="inbox-toggle tasks">
	<div class="inbox-sidebar mobile-inbox">
		<div class="inbox-bg"></div>
		<div class="inbox-sidebar-header">
			<h5>@yield('title')</h5>
		</div>
		<ul class="inbox-sidebar-nav">
			@foreach($dataT as $row)
			<li class="sidebar-item {{ ($row->id==$tid)?'active':'' }}">
				<a href="{{ url('tasks/view/'.base64_encode($row->id.'/'.$pid.'/'.time())) }}" class="sidebar-link">
					<i class="fa fa-arrow-circle-right"></i> {{ str_limit($row->title, 50) }}
					<span class="favorite pull-right" title="High Priority">@if($row->priority=='1') <i class="fa fa-star"></i> </span>@endif
				</a>
			</li>
			@endforeach
		</ul>
	</div>
</div>

<div class="inbox-wrapper view-msg-rply">
	<div class="inbox-content-header"> 
		<div class="inbox-contact">
			<div class="media">
				<div class="media-body">
					<h5>Topic: {{ $dataID->title }}</h5>
				</div>
			</div>
		</div>
		<a class="btn btn-round btn-success pull-right" href="{{ url('tasks/reply/'.$pids) }}">Reply</a>
	</div>
	
	<div class="inbox-content inbox-content-message">
		<p class="content">{!! $dataID->description !!}</p>
	</div>
	@if(count($dataFiles)>0)
	<div class="inbox-content-footer">
		<div class="attachment">
			<p><i class="fa fa-paperclip" aria-hidden="true"></i>Attachment({{ count($dataFiles) }}):</p>
			@foreach($dataFiles as $row)
			<a type="button" target="_blank" href="{{ url('images/files/'.$row->name) }}" class="btn btn-primary btn-round btn-xs">{{ $row->name }}</a>
			@endforeach
		</div>
	</div>
	@endif
	
</div>

@section('style')
<style>
	.inbox-wrapper {
		margin-left: 610px;
	}
	.inbox-toggle.tasks, .tasks .inbox-bg, .tasks .inbox-sidebar {
		width: 350px;
	}
</style>
@endsection

