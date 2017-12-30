<div class="inbox-wrapper">
	<div class="inbox-content-header">  
		<h5>Edit Task
			<a href="{{ url('tasks/list/'.base64_encode($pid.'/'.time())) }}" class="btn btn-round btn-success space-preview pull-right"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</a>
		</h5>
	</div>
	@include('flash::message')
	<form data-toggle="validator" method="POST" action="{{ route('tasks.update') }}">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $pids }}" required>
		<div class="inbox-content inbox-new-message">
			<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
				<label>Title <em>*</em></label>
				<input type="text" class="form-control" name="title" value="{{ $dataID->title }}" required>
				@if ($errors->has('title'))
				<span class="help-block">
					<strong>{{ $errors->first('title') }}</strong>
				</span>
				@endif
			</div>
					
			<div class="form-group">
				<label>Type <em>*</em></label>
				<select class="form-control" name="type" required>
					<option value="">Select Type</option>
					<option value="1" {{ ($dataID->type=='1') ? 'selected="selected"' : '' }}>New</option>
					<option value="2" {{ ($dataID->type=='2') ? 'selected="selected"' : '' }}>Old</option>
					<option value="3" {{ ($dataID->type=='3') ? 'selected="selected"' : '' }}>Bug</option>
				</select>
				</div>	
			
			<div class="form-group">
				<label>Description <em>*</em></label>
				<textarea class="form-control" id="editor" name="description" required>{{ $dataID->title }}</textarea>
			</div>
			
			<div class="form-group">
				<label>File Upload </label>
				<p class="valid">jpeg,jpg,png,pdf,txt,docx,csv (max size 4Mb)<p>
				<p id="alert"></p>
				<div class="file-wrapper">
					@foreach($dataFiles as $file)
					<div class="stats-style-2">
						<div class="stats-body">
							<a target="_blank" href="{{ url('images/files/'.$file->name) }}">{{ $file->name }}</a>
							<span>
								<a href="javascript:void(0)" class="delimg" style="color: red;"><i class="fa fa-minus-circle"></i><input type="hidden" name="files[]" value="{{ $file->name }}"/></a>
							</span>
						</div>
					</div>
					@endforeach
				</div>
						
				<div class="file-path-wrapper"></div>
				<input type="file" class="form-control images">
			</div>
			
			<div class="form-group">
				<label>Progress <em>*</em></label>
				<select class="form-control" name="progress" required>
					<option value="">Select Type</option>
					@foreach($progress as $row)
					<option value="{{ $row->id }}" {{ ($row->id == $dataID->progress) ? 'selected="selected"' : '' }}>{{ $row->name }}</option>
					@endforeach
				</select>
			</div>
			
			<div class="form-group">
				<label>Priority</label><br>
				<label class="radio-inline">
					<input name="priority" type="checkbox" value="1" {{ ($dataID->priority==1) ? 'checked' : '' }}> Yes
				</label>
			</div>
			
			<div class="form-group">
				<label>Status</label><br>
				<label class="radio-inline">
					<input name="status" type="radio" value="1" {{ ($dataID->status==1)?'checked':'' }}>Active &nbsp;&nbsp;
					<input name="status" type="radio" value="0" {{ ($dataID->status==0)?'checked':'' }}>De-active
				</label>
			</div>
			
		</div>		
		
		<div class="inbox-content-footer justify-content-end">
			<div class="buttons ">
				<button type="submit" class="btn btn-danger">Update</button>
			</div>
		</div>
	</form>
	
</div>


@section('style')
<style>
.stats-style-2 {
  margin-bottom: 5px;
}
.file-wrapper {
    margin: 10px 0;
}
</style>
@endsection

@section('script')
{!!Html::script('https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js')!!}
<script>
	CKEDITOR.replace('editor');
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