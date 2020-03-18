import Vue from "vue";
import Vuex from "vuex";
import filiere from "./modules/filiere";
import classe from "./modules/classe";

Vue.use(Vuex);
const state = {
  annee_scolaire:[
    {id : 1, promotion : '2018-2019'},
    {id : 2, promotion : '2019-2020'},
  ],
  niveau : [
    {id:1, annee:'1ère année'},
    {id:2, annee:'2ème année'},
    {id:3, annee:'3ème année'}
  ]
}
export default new Vuex.Store({
  state,
  modules : {
    filiere,
    classe
  }
})