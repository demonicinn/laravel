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
		<a class="btn btn-round btn-success pull-right" href="{{ url('tasks/view/'.$pids) }}">Back</a>
	</div>
	
	
	<div class="col-md-12">
		<div class="reply"> 
			<div class="reply-send small">	@include('flash::message')
				<form data-toggle="validator" method="POST" action="{{ route('tasks.reply') }}">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{ $pids }}" required>
					<div class="row">
						<div class="col-md-10">
							<div class="form-group">
								<textarea class="form-control" name="message" placeholder="Your message" rows="3" required></textarea>
								<div class="attach_file_div">
									<div class="inner_attach">
										<input type="file" class="form-control images">
										<i class="fa fa-paperclip" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2">							
							<div class="buttons ">
								<button type="submit" class="btn btn-primary">send</button>
							</div>
						</div>
					</div>
					<div class="col-md-10">
						<div class="upload_files">
							<p id="alert"></p>									
							<div class="file-path-wrapper"></div>
						</div>
					</div>
				</form>
			</div>
			
			<div class="reply-box">
				@foreach($dataReply as $row)
				<div class="direct-chat-msg {{ (Auth::user()->id==$row->uid)?'right':'' }}">					
					<div class="direct-chat-img" title="{{ $row->fname.' '.$row->lname }}">{{ ucfirst(substr($row->fname, 0, 1)).''.ucfirst(substr($row->lname, 0, 1)) }}</div>
					<div class="msgouter_box">
						<p>{{ $row->message }}</p>
						@if($row->files=='1')
							@foreach($dataFiles as $file)
							@if($row->id==$file->tableId)
							<div class="attachfiles"><i class="fa fa-paperclip"></i> <a target="_blank" href="{{ url('images/files/'.$file->name) }}">{{ $file->name }}</a></div>
							@endif
							@endforeach
						@endif
						<div class="direct-chat-timestamp pull-left">{{ date('jS F Y H:ma',strtotime($row->created_at)) }}</div>
					</div>
				</div>
				@endforeach
			</div>
			
		</div>
	</div>
	
	
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


@section('script')
<script>
	jQuery(document).ready(function(){	
		jQuery('.images').change(function () {
			if (jQuery(this).val() != '') {
        upload();
			}
		});		
		function upload() {
			jQuery('#alert').html('');
			jQuery('#alert').removeClass();
			var file_data = jQuery('.images').prop('files')[0];
      var form_data = new FormData();
      form_data.append('file', file_data);
			jQuery.ajax({
				type: 'post',
				url: '{{ route('upload') }}',
				data: form_data,
				contentType: false,
				cache: false,
				processData: false,
				headers: {
					'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
				},
				success: function (data) {
					if (data.fail) {
						jQuery('#alert').addClass('danger');
						jQuery('#alert').html(data.errors.file);
					}
					else {
						jQuery('.file-path-wrapper').append('<div class="stats-style-2"><div class="stats-body"><a target="_blank" href="{{ url('images/files') }}/'+data+'">'+data+'</a><span><a href="javascript:void(0)" class="delimg" style="color: red;"><i class="fa fa-minus-circle"></i><input type="hidden" name="files[]" value="'+data+'"/></a></span></div></div>');
						jQuery('#alert').addClass('success');
						jQuery('#alert').html('File Successfully Uploaded!');
					}
					jQuery('.images').val('');
				},
				error: function (xhr, status, error) {
					alert(xhr.responseText);
				}
			});
		}
		
		jQuery(document).on('click', '.delimg', function() {
			jQuery('#alert').html('');
			var filename = jQuery(this).find('input').val();			
			var div = jQuery(this).parent('span').parent('div');
			removeFile(filename, div);
		});
		
		function removeFile(filename, div) {
			if (filename != '')
			if (confirm('Are you sure want to remove file!'))
			$.ajax({
				url: "{{ route('upload.remove') }}?filename="+filename,
				type: 'POST',
				contentType: false,
				cache: false,
				processData: false,
				headers: {
					'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
				},
				success: function (data) {
					jQuery('#alert').addClass('success');
					jQuery('#alert').html('File Deleted Successfully!');
					div.remove();
				},
				error: function (xhr, status, error) {
					alert(xhr.responseText);
				}
			});
		}
		
	});
</script>
@endsection
