@extends('layouts.app')
@section('title', 'Sign In')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<div class="authentication">
				<div class="authentication-wrapper">
					<div class="authentication-header">
						<h4>@yield('title')</h4>
					</div>
					<div class="authentication-content">								
						<form data-toggle="validator" method="POST" action="{{ route('login') }}">
							{{ csrf_field() }}							
							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<label for="e_mail" class="form-label">Email</label>
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
							
							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<label for="password" class="form-label">Password</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
									<input id="password" type="password" class="form-control" name="password" required>
								</div>
								@if ($errors->has('password'))
								<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
								@endif
								<div class="help-block with-errors"></div>
							</div>
							
							<div class="form-group form-check">
								<div class="checkbox checkbox-primary">   
									<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
									<label for="check_remember">Remember Me</label>
								</div>
							</div>
							
							<div class="form-footer">
								<a class="btn btn-link" href="{{ route('password.request') }}" class="link">Forgot Password ?</a>
								<button type="submit" class="btn btn-primary pull-right">Login</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
