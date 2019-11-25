<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Gaaw Food || Food Delivery</title>
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ asset('images/icon.png') }}">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
	<link rel="stylesheet" href="{{ asset('style.css') }}">

	<!-- Cusom css -->
 <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

 <!-- Modernizer js -->
 <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
</head>
<body>

    @include('layout.nav')
