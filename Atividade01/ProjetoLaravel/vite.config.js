import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: {
                'app.css': 'resources/css/app.css',
                'app.js': 'resources/js/app.js',
            },
            output: 'public/build',
            manifest: true,
            refresh: true,
        }),
    ],
});
