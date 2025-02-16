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
        <title> Signup | Aroko Healthcare </title>

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

        



    </head>

	<body class="bg-white">

        	
        <div class="mx-0 row authentication authentication-cover-main">
            <div class="col-xxl-6 col-xl-7">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-xxl-7 col-xl-9 col-lg-6 col-md-6 col-sm-8 col-12">
                        <div class="my-5 border card custom-card">
                        <div class="p-5 card-body">
                                <p class="mb-2 text-center h5">Sign Up</p>
                                <p class="mb-4 text-center text-muted op-7 fw-normal">Welcome! Begin by creating your account.</p>
                                <div class="flex-wrap gap-2 mb-3 d-flex justify-content-between flex-lg-nowrap">
                                    <button class="border btn btn-lg d-flex align-items-center justify-content-center flex-fill btn-light">
                                        <span class="avatar avatar-xs">
                                            <img src="../assets/images/media/apps/google.png" alt="">
                                        </span>
                                        <span class="lh-1 ms-2 fs-13 text-default">Signup with Google</span>
                                    </button>
                                </div>
                                <div class="my-3 text-center authentication-barrier">
                                    <span>OR</span>
                                </div>
                                <div class="row gy-3">
                                    <div class="col-xl-12">
                                        <label for="signup-firstname" class="form-label text-default">Full Name<sup class="fs-12 text-danger">*</sup></label>
                                        <input type="text" class="form-control" id="signup-firstname" placeholder="full name">
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="signup-password" class="form-label text-default">Password<sup class="fs-12 text-danger">*</sup></label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control create-password-input" id="signup-password" placeholder="password">
                                            <a href="javascript:void(0);" class="show-password-button text-muted" onclick="createpassword('signup-password',this)"  id="button-addon2"><i class="align-middle ri-eye-off-line"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="signup-confirmpassword" class="form-label text-default">Confirm Password<sup class="fs-12 text-danger">*</sup></label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control create-password-input" id="signup-confirmpassword" placeholder="confirm password">
                                            <a href="javascript:void(0);" class="show-password-button text-muted" onclick="createpassword('signup-confirmpassword',this)"  id="button-addon21"><i class="align-middle ri-eye-off-line"></i></a>
                                        </div>
                                        <div class="mt-3 form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label text-muted fw-normal fs-14" for="defaultCheck1">
                                            </label>
                                            By creating a account you agree to our 
                                            <a href="terms-conditions.php.html" class="text-success"><u>Terms & Conditions</u></a> and <a class="text-success"><u>Privacy Policy</u></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 d-grid">
                                    <button class="btn btn-primary">Create Account</button>
                                </div>
                                <div class="text-center">
                                    <p class="mt-3 mb-0 text-muted">Already have an account? <a href="sign-in-basic.php.html" class="text-primary">Sign In</a></p>
                                </div>
                                <div class="mt-3 text-center btn-list">
                                    <button class="btn btn-icon btn-wave btn-primary-light">
                                        <i class="ri-facebook-line lh-1 align-center fs-17"></i>
                                    </button>
                                    <button class="btn btn-icon btn-wave btn-primary1-light">
                                        <i class="ri-twitter-x-line lh-1 align-center fs-17"></i>
                                    </button>
                                    <button class="btn btn-icon btn-wave btn-primary2-light">
                                        <i class="ri-instagram-line lh-1 align-center fs-17"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-0 col-xxl-6 col-xl-5 col-lg-12 d-xl-block d-none">
                <div class="overflow-hidden authentication-cover">
                    <div class="authentication-cover-logo"> 
                        {{-- <a href="index.php.html"> 
                            <img src="../assets/images/brand-logos/desktop-white.png" alt="" class="authentication-brand desktop-white"> 
                        </a>  --}}
                    </div>
                    <div class="aunthentication-cover-content d-flex align-items-center justify-content-center">
                        <div>
                            {{-- <h3 class="mb-1 text-fixed-white fw-medium">Welcome Henry!</h3>
                            <h6 class="mb-3 text-fixed-white fw-medium">Login to Your Account</h6>
                            <p class="mb-1 text-fixed-white op-6">Welcome to the Admin Dashboard. Please log in to securely manage your administrative tools and oversee platform activities. Your credentials ensure system integrity and functionality.</p> --}}
                        </div>
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
