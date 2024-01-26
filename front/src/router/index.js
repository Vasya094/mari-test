import { createRouter, createWebHistory } from "vue-router"
import FbForm from "./../pages/FbForm.vue";
import FbList from "./../pages/FbList.vue";

const routes = [
  { path: "/form", component: FbForm },
  { path: "/list", component: FbList },
]

const router = createRouter({
  // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
  history: createWebHistory(),
  routes, // short for `routes: routes`
})

export default router
