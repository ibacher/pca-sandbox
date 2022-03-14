<template>
  <Header />
  <div class="flex flex-row ml-2">
    <main class="lg:basis-3/4 md:basis-2/3 pr-2 pt-2 h-screen">
      <slot />
    </main>
    <aside
      class="hidden md:block md:basis-1/3 lg:basis-1/4 bg-slate-300 pt-2 pb-2 border-l border-l-gray-500 h-screen"
    >
      <Sidebar />
    </aside>
  </div>
</template>

<script setup lang="ts">
import Header from "@/Components/Header.vue";
import Sidebar from "@/Components/Sidebar.vue";
</script>
