import LoginPage from '../components/LoginPage';
import DashboardPage from '../components/DashboardPage';

import {structureRoute} from './structure';
import BlankPage from '../components/BlankPage';

const routes = [
  {
    path : '/',
    component: DashboardPage,
    meta :{
      requiresAuth : true
    }
  },
  { 
    path: '/dashboard',
    component: DashboardPage,
    meta: {
      requiresAuth: true
    }
  },
  {
    path : '/login',
    component: LoginPage,
    meta: {
      requiresAuth: false
    }
  },
  {
    path : '/blankpage',
    component: BlankPage,
    meta: {
      requiresAuth: false
    }
  },
];

for(let i of structureRoute){
  routes.push(i);
  
}
// console.log(routes);

export default routes;