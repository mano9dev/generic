import Enseignant from "../../models/Enseignant"

const state = {
  enseignants : [],
  selectedEnseignant : null
}

const getters = {
  getEnseignants(state){

    return state.enseignants;
  }
}

const actions = {
  initEnseignant({commit}){
    Enseignant.all()
    .then(response => {
      commit('setEnseignants', response)
    })
  },

  createEnseignant(enseignant){
    return new Promise((resolve, reject) =>{
      Enseignant.create(enseignant)
      .then(response => { resolve( response)})
      .catch(error => { reject(console.log('error ', error)) })
    })
  }
}

const mutations = {
  setEnseignants(state, enseignants){
    state.enseignants = enseignants
  }
}

export default {
  namespaced : true,
  state,
  getters,
  actions,
  mutations
}