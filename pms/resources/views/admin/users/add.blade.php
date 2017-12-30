@extends('layouts.app')
@section('title', 'Add Users')
@section('content')
<div class="row">
	<div class="col-md-6">        
		<div class="card">
			<div class="card-heading">
				<h5>@yield('title')
					<a href="{{route('users')}}" class="btn btn-round btn-success space-preview pull-right"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</a>
				</h5>
			</div>
			<div class="card-body">
				<form data-toggle="validator" method="POST" action="{{ route('users.register') }}">
					{{ csrf_field() }}					
					<div class="row">
						<div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-6">
							<div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
								<label>First Name <em>*</em></label>
								<input type="text" class="form-control" name="fname" value="{{ old('fname') }}" required>
								@if ($errors->has('fname'))
								<span class="help-block">
									<strong>{{ $errors->first('fname') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-6">
							<div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
								<label>Last Name <em>*</em></label>
								<input type="text" class="form-control" name="lname" value="{{ old('lname') }}" required>
								@if ($errors->has('lname'))
								<span class="help-block">
									<strong>{{ $errors->first('lname') }}</strong>
								</span>
								@endif
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Role <em>*</em></label>
						<select class="form-control" id="role" name="role" value="{{ old('role') }}" required>
							<option value="">Select Client</option>
							@foreach($roles as $row)
							<option value="{{ $row->id }}">{{ $row->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group" id="designation">
						<label>Designation <em>*</em></label>
						<select class="form-control" name="designation" value="{{ old('designation') }}">
							<option value="">Select Designation</option>
							@foreach($designation as $row)
							<option value="{{ $row->id }}">{{ $row->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<label>Email address <em>*</em></label>
						<input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
						@if ($errors->has('email'))
						<span class="help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						<label>Password <em>*</em></label>
						<input type="password" class="form-control" name="password" required>
						@if ($errors->has('password'))
						<span class="help-block">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group">
						<label>Confirm Password <em>*</em></label>
						<input type="password" class="form-control" name="password_confirmation" required>
					</div>
					<div class="form-group">
						<label>Status</label><br>
						<label class="radio-inline">
							<input checked name="status" type="radio" value="1">Active &nbsp;&nbsp;
							<input name="status" type="radio" value="0">De-active
						</label>
					</div>					
					<button type="submit" class="btn btn-primary pull-right">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection


@section('script')
<script>
jQuery(function() {
	jQuery('#designation').hide(); 
	jQuery('#role').change(function(){
		if(jQuery('#role').val() == '2') {
			jQuery('#designation').show();
			jQuery('#designation').find('select').attr('required', 'required');
		} else {
			jQuery('#designation').hide();
			jQuery('#designation').find('select').removeAttr('required');
		} 
	});
});
</script>
@endsection