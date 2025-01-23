import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/styles.css',
                'resources/js/app.js',
                'resources/js/simplebar.js',
                'resources/js/crypto-dashboard.js',
                'resources/js/sticky.js',
                'resources/js/defaultmenu.min.js',
                'resources/js/custom.js',
                'resources/js/main.js',
                'resources/js/custom-switcher.min.js',
                'resources/libs/choices.js/public/assets/styles/choices.min.css',
                'resources/libs/choices.js/public/assets/scripts/choices.min.js',
                'resources/libs/bootstrap/css/bootstrap.min.css',
                'resources/libs/bootstrap/js/bootstrap.bundle.min.js',
                'resources/libs/node-waves/waves.min.css',
                'resources/libs/node-waves/waves.min.js',
                'resources/libs/simplebar/simplebar.min.css',
                'resources/libs/simplebar/simplebar.min.js',
                'resources/libs/@tarekraafat/autocomplete.js/css/autoComplete.css',
                'resources/libs/@tarekraafat/autocomplete.js/autoComplete.min.js',
                'resources/libs/@simonwep/pickr/themes/nano.min.css',
                'resources/libs/@simonwep/pickr/pickr.es5.min.js',
                'resources/libs/flatpickr/flatpickr.min.css',
                'resources/libs/flatpickr/flatpickr.min.js',
                'resources/libs/apexcharts/apexcharts.min.js',
                'resources/libs/swiper/swiper-bundle.min.css',
                'resources/libs/swiper/swiper-bundle.min.js',
              ],
            refresh: true,
        }),
    ],
});
