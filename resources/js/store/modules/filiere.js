import Filiere from "../../models/Filiere";

// state 
const state = {
  filieres : [],
  createdStatus : null,
  selectedFiliere : null
}

// getters
const getters = {
  getFilieres(state){

    return state.filieres;
  },
  selectedFiliere(state){

    return state.selectedFiliere;
  }
}

// actions
const actions = {
  initFiliere({commit}){
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
        commit('selected', response)

        resolve(response)
      })
      
    })
  },

  setSelected({commit}, filiere){
    commit('selected',filiere)
  }

}

// mutations 
const mutations = {
  setFilieres(state, filieres){
    state.filieres = filieres;

  },
  pushFiliereToList(state, filiere){
    // state.filieres.splice(0,0,filiere)
    state.filieres.unshift(filiere);
    console.log('state.filieres', state.filieres);
  },

  selected(state, filiere){
    
    state.selectedFiliere= filiere;
  },

}

export default {
  namespaced : true,
  state,
  getters,
  actions,
  mutations,
}