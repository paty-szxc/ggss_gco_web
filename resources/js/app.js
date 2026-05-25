import './bootstrap';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

// === Vuetify Setup ===
import 'vuetify/styles';
import { createVuetify } from 'vuetify';
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';
import '@mdi/font/css/materialdesignicons.css';

// Import our custom CSS AFTER Vuetify to ensure our overrides (!important) win
import '../css/app.css';

const vuetify = createVuetify({
    components,
    directives,
    defaults: {
        VTextField: {
            variant: 'solo',
            color: 'primary', 
            density: 'comfortable', 
        },
        VSelect: {
            variant: 'solo',
        },
        VTextarea: {
            variant: 'solo',
        },
        VFileInput: {
            variant: 'solo',
        },
    },
});
// =====================

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(vuetify);

        // Add global $asset helper
        app.config.globalProperties.$asset = (path) => {
            if (!path) return '';
            if (path.startsWith('http')) return path;
            const base = props.initialPage.props.asset_url || '/';
            const cleanPath = path.startsWith('/') ? path.substring(1) : path;
            // Remove 'public/' if it's at the start of the path
            const finalPath = cleanPath.startsWith('public/') ? cleanPath.substring(7) : cleanPath;
            return `${base}${finalPath}`;
        };

        return app.mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});