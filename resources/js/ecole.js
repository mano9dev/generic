
import VueResource from 'vue-resource';


const Vue = require('vue');

Vue.use(VueResource);
const app = new Vue;
const $http = app.$http;

class Ecole {
  
  static getEnseignants() {
   var promise = new Promise;

    $http.get('/api/structure/matiere')
    .then( (response)=>{
      return promise.resolve(response)
    } )
    .catch( error => { return promise.reject(error) })
  }

  
}