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

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-white">
    <div class="mx-0 row authentication authentication-cover-main" x-data="{ step: 1 }">

        <!-- Left Side - Swiper Cover -->
        <div class="px-0 col-xxl-6 col-xl-5 col-lg-12 d-xl-block d-none">
            <div class="authentication-cover">
                <div class="swiper swiper-basic">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/ark-imgs/auth/cover-1.jpeg') }}" class="w-100 h-100 object-fit-cover"
                                alt="Cover Image 1">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/ark-imgs/auth/cover-2.jpeg') }}" class="w-100 h-100 object-fit-cover"
                                alt="Cover Image 2">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Signup Section -->
        <div class="col-xxl-6 col-xl-7">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-xxl-7 col-xl-9 col-lg-6 col-md-6 col-sm-8 col-12">
                    <div class="my-5 border card custom-card">
                        <div class="p-5 card-body">
                            <p class="mb-2 text-center h5">Create Your Account</p>

                            <!-- Registration Form -->
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Step 1: Basic Details -->
                                <div x-show="step === 1">
                                    @include('auth.signup.basic-details')
                                    <button type="button" class="btn btn-primary w-100 mt-3" @click="step = 2">
                                        Next
                                    </button>
                                </div>

                                <!-- Step 2: Create Password -->
                                <div x-show="step === 2">
                                    @include('auth.signup.create-password')
                                    <div class="d-flex justify-content-between mt-3">
                                        <button type="button" class="btn btn-secondary" @click="step = 1">Back</button>
                                        <button type="button" class="btn btn-primary" @click="step = 3">Next</button>
                                    </div>
                                </div>

                                <!-- Step 3: Verify -->
                                <div x-show="step === 3">
                                    @include('auth.signup.verify')
                                    <div class="d-flex justify-content-between mt-3">
                                        <button type="button" class="btn btn-secondary" @click="step = 2">Back</button>
                                        <button type="button" class="btn btn-primary" @click="step = 4">Next</button>
                                    </div>
                                </div>

                                <!-- Step 4: KYC Details -->
                                <div x-show="step === 4">
                                    @include('auth.signup.kyc')
                                    <div class="d-flex justify-content-between mt-3">
                                        <button type="button" class="btn btn-secondary" @click="step = 3">Back</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>

                            <div class="text-center mt-4">
                                <p class="text-muted">Already have an account?
                                    <a href="{{ route('login') }}" class="text-primary">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Swiper JS -->
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <!-- Swiper Initialization -->
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
    <!-- Show Password JS -->
    <script src="{{ asset('assets/js/show-password.js') }}"></script>
</body>
</html>
