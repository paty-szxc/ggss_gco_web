import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import vuetify, { transformAssetUrls } from 'vite-plugin-vuetify'; // Added

export default defineConfig({
    base: '/ggss_gco_web/build/',
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls, // Helps Vuetify find images
            },
        }),
        vuetify({ autoImport: true }), // The magic auto-import plugin
    ],
});