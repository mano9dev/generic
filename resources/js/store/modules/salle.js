import Salle from "../../models/Salle"

const state = {
  salles: [],
  selectedSalle: null
}

const getters = {
  getSalles(state) {

    return state.salles;
  }
}

const actions = {
  initSalle({ commit }) {
    Salle.all()
      .then(response => {
        commit('setSalles', response)
      })
  },

  createSalle(salle) {
    return new Promise((resolve, reject) => {
      Salle.create(salle)
        .then(response => { resolve(response) })
        .catch(error => { reject(console.log('error ', error)) })
    })
  }
}

const mutations = {
  setSalles(state, salles) {
    state.salles = salles
  }
}

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}