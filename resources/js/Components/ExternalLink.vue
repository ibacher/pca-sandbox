<template>
  <a
    class="text-cyan-400 hover:text-cyan-200 visited:text-indigo-400"
    target="_blank"
    referrerpolicy="no-referrer"
    v-bind:href="href"
  >
    <slot />
  </a>
</template>
<script setup lang="ts">
import { defineProps } from "vue";

const props = defineProps({ href: String });
</script>
