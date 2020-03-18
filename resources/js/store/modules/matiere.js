import Matiere from "../../models/Matiere"

const state = {
  matieres: [],
  selectedEnseignant: null
}

const getters = {
  getMatieres(state) {

    return state.matieres;
  }
}

const actions = {
  initMatiere({ commit }) {
    Matiere.all()
      .then(response => {
        commit('setMatieres', response)
      })
  },

  createMatiere(matiere) {
    return new Promise((resolve, reject) => {
      Matiere.create(matiere)
        .then(response => { resolve(response) })
        .catch(error => { reject(console.log('error ', error)) })
    })
  }
}

const mutations = {
  setMatieres(state, matieres) {
    state.matieres = matieres
  }
}

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}