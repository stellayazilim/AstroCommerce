import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['AstroCommerce/Api/Web/resources/css/app.css', 'AstroCommerce/Api/Web/resources/js/app.js'],
            refresh: true,
        }),
    ],
});
