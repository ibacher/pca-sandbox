<template>
  <div>
    <label :for="id" class="text-xs" v-if="label && id">{{ label }}</label>
  </div>
  <div>
    <input
      :id="id"
      class="h-12 bg-gray-100 pl-2 pr-2 border-b border-b-gray-500 w-full"
      v-bind="$attrs"
      :value="modelValue"
      @input="updateValue"
    />
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  props: {
    id: String,
    label: String,
    modelValue: String,
  },
  methods: {
    updateValue(event: InputEvent) {
      this.$emit(
        "update:modelValue",
        (event?.target as HTMLInputElement)?.value
      );
    },
  },
});
</script>
