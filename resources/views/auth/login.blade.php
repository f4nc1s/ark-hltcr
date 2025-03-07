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

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/ark-imgs/aroko-head-logo.png') }}" type="image/x-icon">

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Style Css -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="../assets/libs/swiper/swiper-bundle.min.css">

    @yield('css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('js')

</head>

<body class="bg-white">

    <div class="mx-0 row authentication authentication-cover-main">
        <!-- Left Side - Swiper Cover -->
        <div class="px-0 col-xxl-6 col-xl-5 col-lg-12 d-xl-block d-none">
            <div class="authentication-cover">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/ark-imgs/auth/cover-1.jpeg') }}" class="w-100 h-100 object-fit-cover"
                                alt="Cover Image 1">
                        </div>
                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/ark-imgs/auth/cover-2.jpeg') }}" class="w-100 h-100 object-fit-cover"
                                alt="Cover Image 2">
                        </div>
                        <!-- Slide 3 -->
                        {{-- <div class="swiper-slide">
                            <img src="{{ asset('assets/images/cover3.jpg') }}" class="w-100 h-100 object-fit-cover"
                                alt="Cover Image 3">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="col-xxl-6 col-xl-7">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-xxl-7 col-xl-9 col-lg-6 col-md-6 col-sm-8 col-12">
                    <div class="p-5 text-center card-body">
                        <h1 class="mb-3">Welcome to Aroko Health</h1>
                        <p class="text-muted">Sign in to Aroko Health to take control of your well-being.</p>
        
                        <div class="mb-3 text-start">
                            <label for="signin-identifier" class="form-label text-default">Phone Number or Email</label>
                            <input type="text" class="form-control" id="signin-identifier" placeholder="Enter your phone number or email">
                        </div>
        
                        <div class="mb-3 text-start">
                            <label for="signin-password" class="form-label text-default">Password</label>
                            <input type="password" class="form-control" id="signin-password" placeholder="Enter Password">
                        </div>
        
                        <div class="mb-3 form-check text-start">
                            <input class="form-check-input" type="checkbox" id="termsCheck">
                            <label class="form-check-label text-muted" for="termsCheck">
                                I accept the <a href="#" class="text-primary">Terms & Conditions</a> and
                                <a href="#" class="text-primary">Privacy Policy</a>
                            </label>
                        </div>
        
                        <button class="btn btn-secondary w-100" disabled>Sign In</button>
        
                        <div class="my-3 text-center">OR</div>
        
                        <button class="border btn btn-light w-100 d-flex align-items-center justify-content-center">
                            <img src="../assets/images/media/apps/google.png" alt="Google" style="width: 20px; height: 20px;">
                            <span class="ms-2">Sign In with Google</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Swiper JS -->
     <script src="../assets/libs/swiper/swiper-bundle.min.js"></script>

     <!-- Internal Swiper JS -->
     <script src="../assets/js/swiper.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            autoplay: {
                delay: 5000, // 5 seconds
                disableOnInteraction: false
            },
            effect: "fade",
            speed: 1000
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Show Password JS -->
    <script src="../assets/js/show-password.js"></script>

</body>

</html>
