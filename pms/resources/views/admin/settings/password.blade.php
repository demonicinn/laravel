@extends('layouts.app')
@section('title', 'Change Password')
@section('content')
<div class="row">
	<div class="col-md-6">        
		<div class="card">
			<div class="card-heading">
				<h5>@yield('title')</h5>
			</div>
			<div class="card-body">
				<form data-toggle="validator" method="POST" action="{{ route('profile.password') }}">
					{{ csrf_field() }}
					<div class="form-group{{ $errors->has('old') ? ' has-error' : '' }}">
						<label for="password">Old Password</label>
						<div class="form-group">
							<input id="password" type="password" class="form-control" name="old" required>
							@if ($errors->has('old'))
							<span class="help-block">
								<strong>{{ $errors->first('old') }}</strong>
							</span>
							@endif
						</div>
					</div>
					
					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						<label for="password">Password</label>
						<div class="form-group">
							<input id="password" type="password" class="form-control" name="password" required>							
							@if ($errors->has('password'))
							<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
							@endif
						</div>
					</div>
					
					<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
						<label for="password-confirm">Confirm Password</label>
						<div class="form-group">
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
							@if ($errors->has('password_confirmation'))
							<span class="help-block">
								<strong>{{ $errors->first('password_confirmation') }}</strong>
							</span>
							@endif
						</div>
					</div>
					
					<button type="submit" class="btn btn-primary">Change Password</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection