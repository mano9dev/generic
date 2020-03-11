import Vue from "vue";
import Vuex from "vuex";
import filiere from "./modules/filiere";

Vue.use(Vuex);

export default new Vuex.Store({
  modules : {
    filiere
  }
})