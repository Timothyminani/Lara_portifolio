import './bootstrap';
import '../css/app.css';
import 'aos/dist/aos.css';
import AOS from 'aos';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

createInertiaApp({
  resolve: name => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el);
  },
});


AOS.init({
  duration: 2500, // how long the animation lasts
  once: false, // only animate once
   mirror: false,
})