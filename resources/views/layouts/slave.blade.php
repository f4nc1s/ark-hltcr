<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="dark" data-header-styles="transparent"
	data-width="fullwidth" data-menu-styles="dark" loader="disable" data-toggled="close">

	<head>
		<!-- Meta Data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="{{ env('APP_NAME', 'Aroko Health') }}">
		<meta name="author" content="{{ env('APP_NAME', 'Aroko Health') }}">
		<meta name="robots" content="noindex, nofollow">

		<!-- Page Title -->
		<title>@yield('title')</title>

		<!-- Favicon -->
		<link rel="icon" href="{{ asset('assets/images/ark-imgs/aroko-head-logo.png') }}" type="image/x-icon">

		<!-- Choices JS -->
		<script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

		<!-- Main Theme JS -->
		<script src="{{ asset('assets/js/main.js') }}"></script>
		<!-- Bootstrap Css -->
		<link id="style" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

		<!-- Style Css -->
		<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

		<!-- Icons Css -->
		<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

		<!-- Node Waves Css -->
		<link href="{{ asset('assets/libs/node-waves/waves.min.css') }}" rel="stylesheet">

		<!-- Simplebar Css -->
		<link href="{{ asset('assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">

		<!-- Color Picker Css -->
		<link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

		<!-- Choices Css -->
		<link rel="stylesheet" href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}">

		<!-- FlatPickr CSS -->
		<link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}">

		<!-- Auto Complete CSS -->
		<link rel="stylesheet" href="{{ asset('assets/libs/@tarekraafat/autocomplete.js/css/autoComplete.css') }}">

		<!-- Swiper CSS -->
		<link rel="stylesheet" href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}">

		@yield('css')
		<!-- Include CSS files compiled by Vite -->
		{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
		@yield('js')
	</head>

	<body class="">
		<!-- include the switcher code -->
		@include('layouts.components.switcher')

		<!-- Loader -->
		<div id="loader">
			<img src="{{ asset('assets/images/media/loader.svg') }}" alt="">
		</div>
		<!-- Loader -->
		<div class="page">

			<!-- include the header -->
			@include('layouts.components.header')

			<!-- include the header -->
			@include('layouts.components.sidebar')

			<!-- End::main-sidebar -->
			<!-- Start::app-content -->
			<div class="main-content app-content">
				@yield('content')
			</div>
			<!-- End::app-content -->

			<!-- include the switcher code -->
		@include('layouts.components.footer')
	</body>

	</html>