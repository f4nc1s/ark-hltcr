<!DOCTYPE html>
<html lang="en" data-theme-mode="dark">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="{{ env('APP_NAME', 'Aroko Health') }}">
    <meta name="Author" content="{{ env('APP_NAME', 'Aroko Health') }}">
    <meta name="keywords" content="noindex, nofollow">

    <!-- Title -->
    <title>Login | Aroko Healthcare</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/ark-imgs/aroko-head-logo.png') }}" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

    <!-- Custom Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

    @yield('css')
</head>

<body class="bg-light">

    <div class="container-fluid">
        <div class="row vh-100">
            <!-- Left Side - Swiper Cover -->
            <div class="col-xl-5 d-none d-xl-block p-0">
                <div class="swiper mySwiper h-100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/ark-imgs/auth/cover-1.jpeg') }}" class="w-100 h-100 object-fit-cover" alt="Cover Image 1">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/ark-imgs/auth/cover-2.jpeg') }}" class="w-100 h-100 object-fit-cover" alt="Cover Image 2">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Login Form -->
            <div class="col-xl-7 d-flex align-items-center justify-content-center">
                <div class="card shadow-lg p-4 rounded w-100" style="max-width: 400px;">
                    <div class="text-center">
                        <img src="{{ asset('assets/images/ark-imgs/aroko-head-logo.png') }}" width="100" alt="Aroko Logo">
                        <h2 class="mt-3">Welcome Back!</h2>
                        <p class="text-muted">Sign in to Aroko Health to take control of your well-being.</p>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="signin-identifier" class="form-label">Phone Number or Email</label>
                            <input type="text" class="form-control" name="identifier" id="signin-identifier" placeholder="Enter your phone number or email" required>
                        </div>

                        <div class="mb-3">
                            <label for="signin-password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="signin-password" placeholder="Enter Password" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Sign In</button>

                        <div class="text-center mt-3">
                            <small class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="text-primary">Register here</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Swiper & Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            effect: "fade",
            speed: 1000
        });
    </script>

    <!-- SweetAlert for Notifications -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            confirmButtonColor: '#3085d6',
        });
    </script>
    @endif

    @if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Login Failed!',
            text: '{{ session('error') }}',
            confirmButtonColor: '#d33',
        });
    </script>
    @endif
</body>

</html>
