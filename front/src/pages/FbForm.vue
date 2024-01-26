<template>
  <div>
    <router-link to="/list">
      <span class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
        >List</span
      >
    </router-link>
    <form class="max-w-sm mt-9 mx-auto">
      <div class="mb-5">
        <label
          for="base-input"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Your Name</label
        >
        <input
          v-model="name"
          type="text"
          id="base-input"
          class="
            bg-gray-50
            border border-gray-300
            text-gray-900 text-sm
            rounded-lg
            focus:ring-blue-500 focus:border-blue-500
            block
            w-full
            p-2.5
          "
        />
      </div>
      <label for="message" class="block mb-2 text-sm font-medium text-gray-900"
        >Your Feedback</label
      >
      <textarea
        v-model="text"
        id="message"
        rows="4"
        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg"
        placeholder="Leave a comment..."
      ></textarea>

      <button
        class="
          mt-4
          bg-blue-500
          hover:bg-blue-700
          text-white
          font-bold
          py-2
          px-4
          rounded-full
        "
        @click.prevent="createFb"
      >
        Create
      </button>
    </form>
  </div>
</template>

<script>
import { defineComponent, ref } from "vue"
import { useStore } from "vuex"

export default defineComponent({
  name: "FbForm",
  setup() {
    const store = useStore()
    const name = ref("")
    const text = ref("")

    const createFb = () => {
      store
        .dispatch("createFb", { note: text.value, writerName: name.value })
        .then(() => {
          name.value = ""
          text.value = ""
        })
    }

    return {
      name,
      text,
      createFb,
    }
  },
})
</script>
