import MatierePage from '../components/structure/MatierePage';
import EnseignantPage from '../components/structure/EnseignantPage';
import ClassePage from '../components/structure/ClassePage';
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