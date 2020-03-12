import Filiere from "../../models/Filiere";

// state 
const state = {
  filieres : [],
  createdStatus : null
}

// getters
const getters = {

}

// actions
const actions = {
  getAllFilieres({commit}){
    Filiere.all()
    .then(response => {
      console.log('response.data', response)
      commit('setFilieres', response)
      
    })
  },
  createFiliere({commit},filiere){
    return new Promise((resolve, reject) => {

      Filiere.create(filiere)
      .then(response => {
        commit('pushFiliereToList',response)

        resolve(response)
      })
      
    })

  }

}

// mutations 
const mutations = {
  setFilieres(state, filieres){
    state.filieres = filieres;

    // console.log('state', state);
    // console.log('filieres', filieres);
    // console.log('state filieres', state.filieres)
  },
  pushFiliereToList(state, filiere){
    // state.filieres.splice(0,0,filiere)
    state.filieres.unshift(filiere);
    console.log('state.filieres', state.filieres);
  },

}

export default {
  namespaced : true,
  state,
  actions,
  mutations,
}