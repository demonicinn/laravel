@extends('layouts.app')
@section('title', 'Reset Password')
@section('content')
<div class="row">
	<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<div class="authentication">				
			<div class="authentication-wrapper">
				<div class="authentication-header">
					<h4>@yield('title')</h4>
				</div>
				<div class="authentication-content">
					@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
					@endif
					<form data-toggle="validator" method="POST" action="{{ route('password.email') }}">
						{{ csrf_field() }}	
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="e_mail" class="form-label">E-Mail Address</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
							</div>
							@if ($errors->has('email'))
							<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
							@endif
							<div class="help-block with-errors"></div>
						</div>
						
						<div class="form-footer">
							<a href="{{ route('login') }}" class="link">Sign In</a>
							<button type="submit" class="btn btn-primary pull-right disabled">Send Password Reset Link</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
