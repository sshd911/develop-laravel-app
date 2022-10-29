import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/input.css',
                'resources/js/app.js',
                'resources/js/onscroll.js',
                'resources/js/closeform.js',
            ],
            refresh: true,
        }),
    ],
});
