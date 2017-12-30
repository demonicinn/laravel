<div class="col-sm-4">        
	<div class="card">
		<div class="card-heading">
			<h5>@yield('title')</h5>
		</div>
		<div class="card-body">
			<form data-toggle="validator" method="POST" action="{{ route('skills.update') }}">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $ids }}" required>				
				<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					<label>Name <em>*</em></label>
					<input type="text" class="form-control" name="name" value="{{ $dataID->name }}" required>
					@if ($errors->has('name'))
					<span class="help-block">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
					@endif
					</div>
				<div class="form-group">
						<label>Status</label><br>
						<label class="radio-inline">
							<input name="status" type="radio" value="1" {{ ($dataID->status==1)?'checked':'' }}>Active &nbsp;&nbsp;
							<input name="status" type="radio" value="0" {{ ($dataID->status==0)?'checked':'' }}>De-active
						</label>
					</div>
				<button type="submit" class="btn btn-danger pull-right">Update</button>
			</form>
		</div>
	</div>
</div>
