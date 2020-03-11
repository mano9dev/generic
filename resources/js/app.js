/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// const Ecole = require('./ecole').default;
import Ecole from "./ecole";

window.Vue = require('vue');
window.Ecole = new Ecole;

import { extend } from 'vee-validate';
import { required } from 'vee-validate/dist/rules';

// Add the required rule
extend('required', {
  ...required,
  message: 'This field is required'
});

// console.log('ecole',window.ecole);


import VueRouter from 'vue-router';
import VueResource from 'vue-resource';
import { ValidationProvider } from 'vee-validate';;
import Vuetify from 'vuetify';

import routes from './routes/routes'; 
import NavBar from './components/NavBar';
import SideBar from './components/SideBar';

import store from './store/index';

Vue.use(VueRouter);
Vue.use(VueResource);
Vue.use(Vuetify);

Vue.component('validator-provider',ValidationProvider);
Vue.component('nav-bar',NavBar);
Vue.component('side-bar', SideBar);

const router = new VueRouter({
    mode : 'history',
    routes,
})
router.beforeEach((to, from, next) => {

    // console.log('to',to);
    if (to.matched.some(record => record.meta.requiresAuth)) {

      if (sessionStorage.getItem('api') ==null) {
        next('login');
      } else {
        next();
      }
    } else {
        next();
    }
    
})

/** 
*Write global filter for vuejs
*
*/
Vue.filter('find', function(value,arg) {

  if (Array.isArray(value) || value instanceof Array) {
    
    
  }
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//  Vue.component('login',require('./components/Login.vue').default);

const app = new Vue({
    el: '#app',
    router,
    store,
    data : {
        
    },
    methods : {

      logout(){
        
        router.push('login');
      },
      canIncludeNav(){
        // console.log(window.location.pathname);
        
        return window.location.pathname == '/login' ? false : true ; 
      },
      canIncludeSideBar(){
        return window.location.pathname == '/login' ? false : true ;
      }
    },
    mounted(){
      /* Echo.channel('test')
        .listen('App\\Events\\EnseignantCreated', (e) => {
          //
          console.log('event', e);
        }); */
    }
});
