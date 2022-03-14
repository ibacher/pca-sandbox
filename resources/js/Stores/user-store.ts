import { defineStore } from "pinia";
import type { UserInfo } from "@/Types";

export const useUserStore = defineStore("userStore", {
  state: (): { user?: UserInfo; token?: string } => ({
    user: undefined,
    token: undefined
  }),
  getters: {
    isLoggedIn: (state) => Boolean(state.token),
  },
  actions: {
    login(user: UserInfo, token: string) {
      this.user = user;
      this.token = token;
    },
  },
});
