import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/fonts.css',
                'resources/css/prism.css',
                'resources/js/prism.js'
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
    // UNNECESSARY WHEN USING ARTISAN SERVE. ONLY FOR DOCKER
    // server: {
    //     host: true,
    //     hmr: {
    //         host: 'localhost'
    //     },
    //     watch: {
    //         usePolling: true,
    //     },
    // }
});
