<template>
<div>
  <aside class="main-sidebar sidebar-dark-warning bg-dark elevation-4 border-right border-success"
  style="background-color: ;">
    <!-- Brand Logo -->
    <a href="" class="brand-link navbar-bg text-center">
      <span class="brand-text font-weight-light text-center">Enlight</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel my-3 d-flex rounded-pill border-0">
        <div class="image">
          <img :src="user" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block ">{{username}}</a>
          <hr class="m-0">
        </div>
      </div>
      

      <!-- Sidebar Menu -->
      <nav class="mt-2 bg-transparent">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- 
            Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library 
          -->
          
          <li class="nav-item py-1">
            <a href="" class="nav-link text-light rounded-pill">
              <i class="nav-icon fas fa-school text-warning"></i>
              <p>
                My Academy
                
              </p>
            </a>
          </li>
          <li class="nav-item  py-1 rounded">
            <router-link to="#studentcast" class="nav-link text-light rounded-pill">
              <i class="nav-icon fas fa-hashtag text-danger"></i>
              <p>
                Studentcast
                
              </p>
            </router-link>
          </li>
          
          <!------ Sub-Menu ----->
          <li class="nav-item py-1">
            <router-link to="/Analytics" class="nav-link text-light rounded-pill">
              <i class="nav-icon fas fa-tachometer-alt text-info"></i>
              <p>
                Analytics
              </p>
            </router-link>
          </li>
      
          <li class="nav-item has-treeview py-1">
            <a href="#" class="nav-link text-light rounded-pill">
              <i class="nav-icon fa fa-balance-scale-right text-warning"></i>
              <p>
                Subscriptions
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item py-1">
                <router-link to="/payg" class="nav-link text-light offset-sm-1 rounded-pill">
                  <i class="fas fa-angle-right nav-icon text-light"></i>
                  <p>Pay As You Go</p>
                </router-link>
              </li>
              <li class="nav-item py-1">
                <router-link to="#ds" class="nav-link text-light offset-sm-1 rounded-pill">
                  <i class="fas fa-angle-right nav-icon text-light"></i>
                  <p>Beginners</p>
                </router-link>
              </li>
              <li class="nav-item py-1">
                <router-link to="#gf" class="nav-link text-light offset-sm-1 rounded-pill">
                  <i class="fas fa-angle-right nav-icon text-light"></i>
                  <p>Professionals</p>
                </router-link>
              </li>
              <li class="nav-item py-1">
                <router-link to="#tr" class="nav-link text-light offset-sm-1 rounded-pill">
                  <i class="fas fa-angle-right nav-icon text-light"></i>
                  <p>Masters</p>
                </router-link>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview py-1">
            <a href="#" class="nav-link text-light rounded-pill">
              <i class="nav-icon fa fa-user-graduate text-success"></i>
              <p>
                Tutors
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item py-1">
                <router-link to="#" class="nav-link text-light offset-sm-1 rounded-pill">
                  <i class="fas fa-angle-right nav-icon text-light"></i>
                  <p>All Tutors</p>
                </router-link>
              </li>
              <li class="nav-item py-1">
                <router-link to="#" class="nav-link text-light offset-sm-1 rounded-pill">
                  <i class="fas fa-angle-right nav-icon text-light"></i>
                  <p>Tutors Suggestion Box</p>
                </router-link>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview py-1">
            <a href="#" class="nav-link text-light rounded-pill">
              <i class="nav-icon fa fa-users text-light"></i>
              <p>
                Students
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item py-1">
                <router-link to="#" class="nav-link text-light offset-sm-1 rounded-pill">
                  <i class="fas fa-angle-right nav-icon text-light"></i>
                  <p>All Students</p>
                </router-link>
              </li>
              <li class="nav-item py-1">
                <router-link to="#" class="nav-link text-light offset-sm-1 rounded-pill">
                  <i class="fas fa-angle-right nav-icon text-light"></i>
                  <p>Student Suggestion Box</p>
                </router-link>
              </li>
            </ul>
          </li>

          <li class="nav-item py-1">
            <router-link to="/developer" class="nav-link text-light rounded-pill">
              <i class="nav-icon fas fa-cogs text-info"></i>
              <p>
                Developer
              </p>
            </router-link>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</div>
</template>

<script>

    export default {
        props:[ 'username', 'user' ],
        components: {  },
        data: function(){
            //const lang = localStorage.getItem('lang') || 'en';
            return {
            //lang: lang,
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        },
        mounted() {
            console.log('Dashboard Side navigation mounted.')
        }
    }
</script>
