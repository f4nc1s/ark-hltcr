<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="dark" data-header-styles="transparent"
data-width="fullwidth" data-menu-styles="dark" loader="disable" data-toggled="close">

    <head>

        <!-- Meta Data -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="{{ env('APP_NAME', 'Aroko Health') }}">
        <meta name="Author" content="{{ env('APP_NAME', 'Aroko Health') }}">
        <meta name="keywords" content="noindex, nofollow">
        
		<!-- Title -->
        <title> Login | Aroko Healthcare</title>
        {{-- @section('title', 'Gym and SPA | ' . env('APP_NAME', 'Aroko Health')) --}}

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('assets/images/ark-imgs/aroko-head-logo.png') }}" type="image/x-icon">

        <!-- Start::custom-styles -->
            
        <!-- Main Theme JS -->
	    <script src="{{ asset('assets/js/main.js') }}"></script>

        <!-- Bootstrap Css -->
        <link id="style" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Style Css -->
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
        <!-- End::custom-styles -->

	@yield('css')
	<!-- Include CSS files compiled by Vite -->
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	@yield('js')

    </head>

	<body class="bg-white">
        	
        <div class="mx-0 row authentication authentication-cover-main">
            <div class="px-0 col-xxl-6 col-xl-5 col-lg-12 d-xl-block d-none">
                <div class="authentication-cover">
                     <div class="aunthentication-cover-content d-flex align-items-center justify-content-center">
                        {{-- <div>
                            <h3 class="mb-1 text-fixed-white fw-medium">Welcome Henry!</h3>
                            <h6 class="mb-3 text-fixed-white fw-medium">Login to Your Account</h6>
                            <p class="mb-1 text-fixed-white op-6">Welcome to the Admin Dashboard. Please log in to securely manage your administrative tools and oversee platform activities. Your credentials ensure system integrity and functionality.</p>
                        </div> --}}
                    </div>
                    {{-- <div class="authentication-cover-logo">
                        <a href="https://arokohealth.com">
                            <img src="../assets/images/ark-imgs/aroko-logo.png" alt="" class="authentication-brand desktop-white">
                        </a>
                    </div> --}}
                </div>
            </div>
            <div class="col-xxl-6 col-xl-7">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-xxl-7 col-xl-9 col-lg-6 col-md-6 col-sm-8 col-12">
                        {{-- <div class="my-auto border card custom-card"> --}}
                            <div class="p-5 text-center card-body">
                                <h1 class="mb-3">WELCOME TO AROKO HEALTH</h1>
                                <p class="text-muted">Sign in to Aroko Health to take control of your well-being. Access personalized care and connect with providers. Please verify your phone number or email to continue.</p>
                                
                                <div class="mb-3 text-start">
                                    <label for="signin-phone" class="form-label text-default">Phone Number/Email</label>
                                    <div class="input-group">
                                        <select class="form-select" style="max-width: 80px;">
                                            <option selected>+234</option>
                                            <option>+1</option>
                                            <option>+44</option>
                                        </select>
                                        <input type="text" class="form-control" id="signin-phone" placeholder="000-000-0000">
                                    </div>
                                </div>
                                
                                <div class="mb-3 text-start">
                                    <label for="signin-password" class="form-label text-default">Password</label>
                                    <input type="password" class="form-control" id="signin-password" placeholder="Enter Password">
                                </div>
                                
                                <div class="mb-3 form-check text-start">
                                    <input class="form-check-input" type="checkbox" id="termsCheck">
                                    <label class="form-check-label text-muted" for="termsCheck">
                                        I accept the <a href="#" class="text-primary">Terms & Conditions</a> and <a href="#" class="text-primary">Privacy Policy</a>
                                    </label>
                                </div>
                                
                                <button class="btn btn-secondary w-100" disabled>Sign In</button>
                                
                                <div class="my-3 text-center">OR</div>
                                
                                <button class="border btn btn-light w-100 d-flex align-items-center justify-content-center">
                                    <img src="../assets/images/media/apps/google.png" alt="Google" style="width: 20px; height: 20px;">
                                    <span class="ms-2">Sign In with Google</span>
                                </button>
                            </div>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
            
        </div>

        
        <!-- Start::custom-scripts -->
        
        <!-- Bootstrap JS -->
        <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- End::custom-scripts -->

        	
        <!-- Show Password JS -->
        <script src="../assets/js/show-password.js"></script>


    </body>
    
</html>    
<!-- This code use for render base file -->
