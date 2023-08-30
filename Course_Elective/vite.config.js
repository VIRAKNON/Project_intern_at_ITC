import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';1

export default defineConfig({
    css:{
        preprocessorOptions:{
            scss:{
                additionalData: `@import "compass/scss";`,
            },
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/scss/test.scss', 'resources/js/test.js'],
            refresh: true,
        }),
    ],
});
