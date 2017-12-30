@extends('layouts.app')
@section('title', 'Edit Users')
@section('content')
<div class="row">
	<div class="col-md-6">        
		<div class="card">
			<div class="card-heading">
				<h5>@yield('title')</h5>
			</div>
			<div class="card-body">
				<form data-toggle="validator" method="POST" action="{{ route('users.update') }}">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{ $ids }}" required>	
					<div class="row">
						<div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-6">
							<div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
								<label>First Name <em>*</em></label>
								<input type="text" class="form-control" name="fname" value="{{ $dataID->fname }}" required>
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
								<input type="text" class="form-control" name="lname" value="{{ $dataID->lname }}" required>
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
						<select class="form-control" id="role" name="role" value="{{ $dataID->role }}" required>
							<option value="">Select Client</option>
							@foreach($roles as $row)
							<option value="{{ $row->id }}" {{ ($row->id==$dataID->role)?'selected':'' }}>{{ $row->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group" id="designation">
						<label>Designation <em>*</em></label>
						<select class="form-control" name="designation">
							<option value="">Select Designation</option>
							@foreach($designation as $row)
							<option value="{{ $row->id }}" {{ ($row->id==$dataID->designation)?'selected':'' }}>{{ $row->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Email address <em>*</em></label>
						<input type="email" class="form-control"  value="{{ $dataID->email }}" disabled>
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
	
	<div class="col-md-6">        
		<div class="card">
			<div class="card-heading">
				<h5>Change Password</h5>
			</div>
			<div class="card-body">
				<form data-toggle="validator" method="POST" action="{{ route('users.password') }}">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{ $ids }}" required>
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
					<button type="submit" class="btn btn-danger pull-right">Update</button>
				</form>
			</div>
		</div>
	</div>

	
	
</div>
@endsection


@section('script')
<script>
jQuery(function() {
	@if($dataID->role!=2)
	jQuery('#designation').hide();
	@endif
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