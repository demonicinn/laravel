<div class="col-sm-4">        
	<div class="card">
		<div class="card-heading">
			<h5>@yield('title')</h5>
		</div>
		<div class="card-body">
			<form data-toggle="validator" method="POST" action="{{ route('skills.addSkills') }}">
				{{ csrf_field() }}
				<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					<label>Name <em>*</em></label>
					<input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
					@if ($errors->has('name'))
					<span class="help-block">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
					@endif
				</div>
				<div class="form-group">
					<label>Status</label><br>
					<label class="radio-inline">
						<input checked="" name="status" type="radio" value="1">Active &nbsp;&nbsp;
						<input name="status" type="radio" value="0">De-active
					</label>
				</div>
				<button type="submit" class="btn btn-primary pull-right">Add</button>
			</form>
		</div>
	</div>
</div>

