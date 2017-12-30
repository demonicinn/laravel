@extends('layouts.app')
@section('title', 'Page Not Found')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<div class="error">
				<div class="error-content">
					<i class="xxl-font fa fa-frown-o" aria-hidden="true"></i>
					<h1 class="xl-font">404</h1>
					<h2>Forbidden</h2>
					<p>Access to this resource on the server is denied</p>
					<a href="{{ url('/') }}" class="btn btn-primary">Home</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
