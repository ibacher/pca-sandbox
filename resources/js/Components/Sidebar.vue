<template>
  <Login v-if="!isLoggedIn" />
  <Actions v-if="isLoggedIn" />
</template>

<script setup lang="ts">
import { computed } from "vue";
import Login from "@/Components/Login.vue";
import Actions from "@/Components/Actions.vue";
import { useUserStore } from "@/Stores";

const isLoggedIn = computed(() => useUserStore().isLoggedIn);
</script>
