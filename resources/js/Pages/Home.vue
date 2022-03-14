<template>
  <p>
    Welcome to the <em>{{ appName }}</em
    >!
  </p>
  <br />
  <p>
    The <em>{{ appName }}</em> is a simple application built on a
    <ExternalLink href="https://laravel.com">Laravel</ExternalLink>
    backend with a
    <ExternalLink href="https://vuejs.org">Vue 3</ExternalLink>
    frontend meant to serve as a lab environment for working with PHP and modern
    development techniques.
  </p>
  <br />
  <p>
    The <em>{{ appName }}</em> has been developed by
    <ExternalLink href="https://mekomsolutions.com"
      >Mekom Solutions
    </ExternalLink>
    as a training environment.
  </p>
</template>

<script setup lang="ts">
import { computed } from "vue";
import { usePage } from "@inertiajs/inertia-vue3";
import ExternalLink from "@/Components/ExternalLink.vue";
import type { SandboxPage } from "@/Types";

const page = usePage<SandboxPage>();
const appName = computed(() => page.props.value.appName);
</script>
