import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import purge from '@erbelion/vite-plugin-laravel-purgecss'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        purge({
            templates: ['blade'],
            /*paths: [
                'resources/views/!**!/!*.blade.php',
                'resources/{js,views}/!**!/!*.vue'
            ],*/
            safelist: [
                'show','data-bs-popper'  /*for drop down menu classes that being added on run*/
            ]
        })
    ],
});