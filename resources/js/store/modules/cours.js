import Cours from "../../models/Cours"

const state = {
  cours: [],
  selectedCours: null
}

const getters = {
  getCours(state) {

    return state.cours;
  }
}

const actions = {
  initCours({ commit }) {
    Cours.all()
      .then(response => {
        commit('setCours', response)
      })
  },

  createCours(cours) {
    return new Promise((resolve, reject) => {
      Cours.create(cours)
        .then(response => { resolve(response) })
        .catch(error => { reject(console.log('error ', error)) })
    })
  }
}

const mutations = {
  setCours(state, cours) {
    state.cours = cours
  }
}

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}