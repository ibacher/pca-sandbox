import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import { createPinia } from "pinia";
import { mande } from "mande";
import Layout from "@/Components/Layout.vue";


InertiaProgress.init({
  color: "rgb(63, 63, 64)",
});

createInertiaApp({
  resolve: async (name) => {
    const page = (await import(`./Pages/${name}.vue`)).default;
    page.layout ??= (H: typeof h, page: any) => H(Layout, () => page);
    return page;
  },
  setup: ({ el, app, props, plugin }) => {
    const sandboxApp = createApp({
      render: () => h(app, props),
    });

    const pinia = createPinia();
    const api = mande("http://localhost/api");

    sandboxApp.provide("api", api);
    sandboxApp.use(plugin);
    sandboxApp.use(pinia);
    sandboxApp.mount(el);
  },
});
