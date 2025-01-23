<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

<head>
	<!-- Meta Data -->
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="{{ env('APP_NAME', 'Xinui') }}">
	<meta name="author" content="{{ env('APP_NAME', 'Xinui') }}">
	<meta name="robots" content="noindex, nofollow">

	<!-- Page Title -->
	<title>@yield('title')</title>

	<!-- Favicon -->
	<link rel="icon" href="{{ asset('assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">

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
	@vite(['resources/css/app.css', 'resources/js/app.js'])
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

		<!-- Start::main-footer -->
		<footer class="footer mt-auto py-3 bg-white text-center">
			<div class="container">
				<span class="text-muted"> Copyright © <span id="year"></span>
					<a href="javascript:void(0);" class="text-dark fw-medium">Xintra</a>. Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);">
						<span class="fw-medium text-primary">Spruko</span>
					</a> All rights reserved </span>
			</div>
		</footer>
		<!-- End::main-footer -->
	</div>
	<!-- Start::main-scripts -->
	<!-- Scroll To Top -->
	<div class="scrollToTop">
		<span class="arrow">
			<i class="ti ti-arrow-narrow-up fs-20"></i>
		</span>
	</div>
	<div id="responsive-overlay"></div>
	<!-- Scroll To Top -->
	<!-- Popper JS -->
	<script src="{{ asset('assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

	<!-- Bootstrap JS -->
	<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

	<!-- Node Waves JS-->
	<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

	<!-- Simplebar JS -->
	<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
	<script src="{{ asset('assets/js/simplebar.js') }}"></script>

	<!-- Auto Complete JS -->
	<script src="{{ asset('assets/libs/@tarekraafat/autocomplete.js/autoComplete.min.js') }}"></script>

	<!-- Color Picker JS -->
	<script src="{{ asset('assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

	<!-- Date & Time Picker JS -->
	<script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>

	<!-- Apex Charts JS -->
	<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

	<!-- Swiper JS -->
	<script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

	<!-- Crypto Dashboard -->
	<script src="{{ asset('assets/js/crypto-dashboard.js') }}"></script>

	<!-- Sticky JS -->
	<script src="{{ asset('assets/js/sticky.js') }}"></script>

	<!-- Defaultmenu JS -->
	<script src="{{ asset('assets/js/defaultmenu.min.js') }}"></script>

	<!-- Custom JS -->
	<script src="{{ asset('assets/js/custom.js') }}"></script>

	<!-- Custom-Switcher JS -->
	<script src="{{ asset('assets/js/custom-switcher.min.js') }}"></script>
</body>

</html>