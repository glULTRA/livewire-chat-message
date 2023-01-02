import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        hmr: {
            host: '192.168.100.250',
            // host: 'localhost',
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                // 'resources/css/chat.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
