<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>@yield('title') - PMS</title>
		<!-- Styles -->
		@include('layouts/front/styles')
	</head>
	<body class="{{Auth::guest()?'':'style'}}">
		@if (Auth::guest())
			@yield('content')
		@else
			@include('layouts/front/navbar')
			@include('layouts/front/sidebar')
			@yield('content')
			@include('layouts/front/footer')
		@endif
		<!-- Scripts -->
		@include('layouts/front/scripts')
	</body>
</html>
