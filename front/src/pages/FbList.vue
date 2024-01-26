<template>
  <div>
    <router-link to="/form">
      <span class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
        >Form</span
      >
    </router-link>
    <div class="mt-9">
      <div class="" v-for="fb in fbList" :key="fb.id">
        <div
          class="
            mx-auto
            my-1
            block
            max-w-sm
            p-6
            bg-white
            border border-gray-200
            rounded-lg
            shadow
            hover:bg-gray-100
          "
        >
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
            Name: {{ fb.writerName }}
          </h5>
          <p class="font-normal text-gray-700 dark:text-gray-400">
            Text: {{ fb.note }}
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { computed, defineComponent, onMounted } from "vue"
import { useStore } from "vuex"

export default defineComponent({
  name: "FbForm",
  setup() {
    const store = useStore()
    const fbList = computed(() => store.getters["feedbacks"])

    onMounted(() => {
      store.dispatch("getFbList")
    })

    return {
      fbList,
    }
  },
})
</script>
