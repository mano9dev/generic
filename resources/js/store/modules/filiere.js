import Filiere from "../../models/Filiere";


const state = {
  filieres : []
}

const actions = {
  getAllFilieres({commit}){
    Filiere.all()
    .then(response => {
      console.log('response.data', response)
      commit('setFilieres', response)
    })
  }
}

// mutations 
const mutations = {
  setFilieres(state, filieres){
    state.filieres = filieres;

    console.log('state', state);
    console.log('filieres', filieres);
    console.log('state filieres', state.filieres)
  }
}

export default {
  namespaced : true,
  state,
  actions,
  mutations,
}