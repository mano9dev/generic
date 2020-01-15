import MatierePage from '../components/structure/MatierePage';
import EnseignantPage from '../components/structure/EnseignantPage';
import ClassePage from '../components/structure/ClassePage';
import FilierePage from '../components/structure/FilierePage';
import CoursPage from '../components/structure/CoursPage';


export const structureRoute = [
  {
    path: '/structure/matiere',
    component: MatierePage,
    meta: {
      requiresAuth: true
    }
  },
  {
    path: '/structure/filiere',
    component: FilierePage,
    meta: {
      requiresAuth: true
    }
  },
  {
    path: '/structure/classe',
    component: ClassePage,
    meta: {
      requiresAuth: true
    }
  },
  {
    path: '/structure/enseignant',
    component: EnseignantPage,
    meta: {
      requiresAuth: true
    }
  },
  {
    path: '/structure/cours',
    component: CoursPage,
    meta: {
      requiresAuth: true
    }
  }

]