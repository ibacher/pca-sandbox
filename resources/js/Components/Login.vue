<template>
  <div class="flex flex-col justify-center items-center mt-2">
    <form @submit.prevent="submit('/login')">
      <fieldset>
        <div class="mt-1.5 flex-auto">
          <Input
            id="username"
            label="Username"
            type="text"
            required
            v-model="state.username"
          />
        </div>
        <div class="mt-1.5 flex-auto">
          <Input
            id="password"
            label="Password"
            type="password"
            required
            v-model="state.password"
          />
        </div>
        <div class="mt-8 flex-auto">
          <SubmitButton class="w-full h-12" :disabled="state.submitting"
            >Login
          </SubmitButton>
        </div>
      </fieldset>
    </form>
    <div v-if="state.errors && state.errors instanceof String">
      <p class="text-red-600">{{ state.errors }}</p>
    </div>
  </div>
</template>

<script setup lang="ts">
import { inject, reactive } from "vue";
import type { MandeError, MandeInstance } from "mande";
import Input from "@/Components/Input.vue";
import SubmitButton from "@/Components/SubmitButton.vue";
import { useUserStore } from "@/Stores";
import type { UserInfo } from "@/Types";

interface LoginResponse {
  user: UserInfo;
  token: string;
}

const state = reactive({
  username: "",
  password: "",
  submitting: false,
  errors: {},
});

const api: MandeInstance | undefined = inject("api");
if (api === undefined) {
  console.error("Could not load api instance!");
}

async function submit(url: string) {
  state.submitting = true;

  try {
    const response = await api?.post<LoginResponse>(url, {
      username: state.username,
      password: state.password,
    });

    state.submitting = false;

    if (response?.user && response.token) {
      useUserStore().login(response.user, response.token);
    }
  } catch (e) {
    state.submitting = false;

    if (e instanceof Error) {
      const error = e as MandeError<LoginResponse>;
      state.errors = error.body;
      return;
    }
  }
}
</script>
