<template>
  <header class="bg-mekom-grey flex flex-row justify-between align-middle">
    <Link class="sm:basis-1/2 md:basis-1/3 ml-2 mt-1 mb-1" href="/">
      <Logo />
    </Link>
    <h1
      class="hidden md:block text-white md:basis-1/3 font-header font-extralight text-2xl text-center p-2"
    >
      {{ appName }}
    </h1>
    <div class="md:basis-1/3 flex md:justify-end">
      <button class="text-white mr-4">
        {{ authUser }}
      </button>
    </div>
    <button class="block md:hidden justify-self-end mr-2" @click="toggleMenu">
      <SidebarIcon class="text-slate-100 h-8 w-8" />
    </button>
  </header>
  <aside
    v-if="showMenu"
    :class="
      (showMenu ? 'block' : 'hidden') +
      ' bg-slate-300 pt-2 pb-2 border-l border-l-gray-500 h-screen w-screen z-10'
    "
  >
    <Sidebar />
  </aside>
</template>

<script setup lang="ts">
import { computed, ref } from "vue";
import { Link, usePage } from "@inertiajs/inertia-vue3";
import Logo from "@/Components/Logo.vue";
import Sidebar from "@/Components/Sidebar.vue";
import SidebarIcon from "@/Components/SidebarIcon.vue";
import type { SandboxPage } from "@/Types";
import { useUserStore } from "@/Stores";

const page = usePage<SandboxPage>();
const userStore = useUserStore();

const appName = computed(() => page.props.value.appName);
const authUser = computed(() => userStore.user?.name);
const showMenu = ref(false);

function toggleMenu() {
  showMenu.value = !showMenu;
}
</script>
