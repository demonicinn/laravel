<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="site-url" content="{{ asset('/') }}">

    <title>My Admin</title>
    
    @if($setting->site_favicon)
    <link rel="icon" href="{{ asset('uploads/site/'.$setting->site_favicon) }}">
    @endif
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Icons -->
    <link href="{{ asset('admin/resources/icons/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/resources/icons/themify-icons/themify-icons.css') }}" rel="stylesheet">
    <!--animate css-->
    <link rel="stylesheet" href="{{ asset('admin/vendor/animate.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/resources/css/main-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/resources/css/skins/all-skins.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/resources/css/demo.css') }}">

</head>
<body class="sidebar-mini skin-grey">
	<div class="wrapper">