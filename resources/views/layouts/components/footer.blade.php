<!-- Start::main-footer -->
<footer class="footer mt-auto py-3 bg-white text-center">
    <div class="container">
        <span class="text-muted"> Copyright © <span id="year"></span>
            <a href="javascript:void(0);" class="text-dark fw-medium">Aroko Health</a>. Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);">
                <span class="fw-medium text-primary">Syneriv</span>
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
{{-- <script src="{{ asset('assets/js/crypto-dashboard.js') }}"></script> --}}

<!-- Sticky JS -->
<script src="{{ asset('assets/js/sticky.js') }}"></script>

<!-- Defaultmenu JS -->
<script src="{{ asset('assets/js/defaultmenu.min.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

<!-- Custom-Switcher JS -->
<script src="{{ asset('assets/js/custom-switcher.min.js') }}"></script>

<!-- Scripts Section -->
@yield('scripts')