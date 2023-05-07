import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
 

    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/animate.css',
                'resources/css/style.css',
                'resources/js/app.js',
                'resources/js/wow.min.js',
                'resources/js/jquery.min.js',
                'resources/js/ckeditor.js',
                'resources/js/script.js',
            ],
            // require('flowbite/plugin'),
            refresh: true,
        }),
    ],
});
