@extends('layouts.app')
@section('title', 'Edit Announcements')
@section('content')
<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-heading">
				<h5>@yield('title')
					<a href="{{route('announcements')}}" class="btn btn-round btn-success space-preview pull-right"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</a>
				</h5>
			</div>
			<div class="card-body">
				<form data-toggle="validator" method="POST" action="{{ route('announcements.update') }}">
				{{ csrf_field() }}
					<input type="hidden" name="id" value="{{ $ids }}" required>	
					<div class="form-group">
						<label>Title <em>*</em></label>
						<input type="text" class="form-control" name="title" value="{{ $dataID->title }}" required>
					</div>
					
					<div class="form-group">
						<label>Message <em>*</em></label>
						<textarea class="form-control" id="editor" name="message" required>{{ $dataID->message }}</textarea>
					</div>
					
					<div class="form-group">
						<label>Status</label><br>
						<label class="radio-inline">
							<input name="status" type="radio" value="1" {{ ($dataID->status==1)?'checked':'' }}>Active &nbsp;&nbsp;
							<input name="status" type="radio" value="0" {{ ($dataID->status==0)?'checked':'' }}>De-active
						</label>
					</div>
					
					<button type="submit" class="btn btn-primary">Update</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

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
</script>
@endsection