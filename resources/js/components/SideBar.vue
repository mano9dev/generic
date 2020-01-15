<template> 
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">Generic 2.0</span>
  </a>
  <!-- <router-link to="/" class="brank-link">
    <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </router-link> -->
  <!-- Sidebar -->
  <div class="sidebar">
  
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
        <li class="nav-item">
          <!-- <a  routerLink="" routerLinkActive="active" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a> -->
          <router-link to="/" class="nav-link">
           <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </router-link>
        </li>
        <li class="nav-item has-treeview" id="structure">
          <a href="" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Structure
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <!-- <a  routerLink="/structure/matiere" routerLinkActive="active"  class="nav-link " >
                <i class="far fa-circle nav-icon"></i>
                <p>Matiere</p>
              </a> -->
              <router-link to="/structure/matiere" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Matiere</p>
              </router-link>
            </li>
            <li class="nav-item">
              <!-- <a routerLink="/structure/enseignant" routerLinkActive="active" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Enseignant</p>
              </a> -->
              <router-link to="/structure/enseignant" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Enseignant</p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/structure/classe" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Classe</p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/structure/filiere" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Filiere</p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/structure/cours" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Cours</p>
              </router-link>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <router-link to="disponibilite" class="nav-link">
            <i class="nav-icon fa fa-table"></i>
            <p>Disponibilité</p>
          </router-link>
        </li>
        <li class="nav-item has-treeview" id="placement">
          <a href="" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Placement
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <router-link to="/placement/manuel" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manuel</p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/placement/automatique" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Automatique</p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/placement/optimisé" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Optimisé</p>
              </router-link>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a routerLink="/placement/planing" class="nav-link" routerLinkActive="active">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              Planing
              <span class="badge badge-info right">2</span>
            </p>
          </a>
        </li>
        <li class="nav-header">AUTRES</li>
  
        <li class="nav-item ">
          <router-link to="/mailbox" class="nav-link">
            <i class="nav-icon far fa-envelope"></i>
            <p>Mailbox <span class="badge badge-info right">6</span></p>
          </router-link>
        </li>
        <li class="nav-item ">
          <router-link to="/login" class="nav-link">
            <i class="nav-icon fa fa-user"></i>
            <p>Login </p>
          </router-link>
        </li>
        <li class="nav-item ">
          <router-link to="/register" class="nav-link">
            <i class="nav-icon fa fa-user-plus"></i>
            <p>Register</p>
          </router-link>
        </li>
        <li class="nav-item ">
          <router-link to="/test" class="nav-link">
            <i class="nav-icon fa fa-cog"></i>
            <p>Testing</p>
          </router-link>
        </li>
        <li class="nav-item ">
          <router-link to="/blankpage" class="nav-link">
            <i class="nav-icon fa fa-cog"></i>
            <p>Blank Page</p>
          </router-link>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

</template>

<script>
export default {
  
}
</script>