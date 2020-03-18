import Classe from "../../models/Classe"

const state = {
  classes: [],
  selectedClasse: null
}

const getters = {
  getClasses(state) {

    return state.classes;
  }
}

const actions = {
  initClasse({ commit }) {
    Classe.all()
      .then(response => {
        commit('setClasses', response)
      })
  },

  createClasse(classe) {
    return new Promise((resolve, reject) => {
      Classe.create(classe)
        .then(response => { resolve(response) })
        .catch(error => { reject(console.log('error ', error)) })
    })
  }
}

const mutations = {
  setClasses(state, classes) {
    state.classes = classes
  }
}

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}