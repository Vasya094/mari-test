import axios from "axios"
import { createStore } from "vuex"

const store = createStore({
  state() {
    return {
      feedbacks: [],
      loading: false,
    }
  },
  getters: {
    feedbacks: (state) => state.feedbacks,
  },
  mutations: {
    addFeedback(state, payload) {
      state.feedbacks.push(payload.data)
    },
    setFeedbackList(state, payload) {
      state.feedbacks = payload.data
    },
    setLoading(state, payload) {
      state.loading = payload.data
    },
  },
  actions: {
    async getFbList({ commit }) {
      try {
        commit('setLoading', true)
        const data = await axios.get("http://127.0.0.1:8000/api/feedbacks")
        console.log(data)
        commit({
          type: "setFeedbackList",
          data: data.data,
        })
      } catch (e) {
        console.log(e)
      } finally {
         commit('setLoading', false)
      }
    },
    async createFb({ commit }, data) {
      try {
        commit('setLoading', true)
        const resp = await axios.post("http://127.0.0.1:8000/api/feedbacks", data)
        console.log(resp)
        commit({
          type: "addFeedback",
          data: resp.data,
        })
      } catch (e) {
        console.log(e)
      } finally {
         commit('setLoading', false)
      }
    },
  },
})

export default store
