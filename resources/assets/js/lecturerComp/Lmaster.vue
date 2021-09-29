<template>
<div class="wrapper" id="app">
 
  <!-- Navbar -->
  <nav class="main-header elevation-2 navbar sideMenu navbar-expand-lg navbar-bg navbar-white navbar-dark border-bottom border-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
            <i class="fas fa-bars"></i>&nbsp; &nbsp; Menu</a>
      </li>
      
    </ul>
    <button class="btn btn-dark" @click="tutorLogout" role="button">
      Logout
    </button>
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary sideMenu elevation-4 border-right border-dark">
    <!-- Brand Logo -->
    <router-link to="/" class="brand-link navbar-bg text-center">
      <span class="brand-text font-weight-light text-light w-100 text-center">EV Academy</span>
    </router-link>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
        <div class="image">
          <img src="/img/rocket.png" alt="Larastart" class="brand-image img-circle elevation-3"
           style="opacity: .8">
        </div>
        <div class="text-light d-flex justify-content-start">
          <p class="d-block my-auto pl-2">Tutor Name</p>
        </div>
      </div>
      

      <!-- Sidebar Menu -->
      <nav class="mt-2 bg-transparent">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- 
            Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library 
          -->
          
          <li class="nav-item">
            <router-link to="/academy" class="nav-link text-light d-flex justify-content-start py-2">
              <i class="nav-icon fas fa-school text-warning py-0"></i>
              <p class="my-auto pl-2 text-left text-light py-0">
                Academy
                
              </p>
            </router-link>
          </li>
          
          <li class="nav-item  py-1 rounded">
            <router-link to="/tutor-discussion" class="nav-link text-light d-flex justify-content-start py-2">
              <i class="nav-icon fas fa-hashtag text-danger py-0"></i>
              <p class="my-auto pl-2 text-left text-light py-0">
                Studentcast
                
              </p>
            </router-link>
          </li>
          
          <!------ Sub-Menu ----->
          <li class="nav-item">
          <router-link to="/tutor-dashboard" class="nav-link text-light d-flex justify-content-start py-2">
            <i class="nav-icon fas fa-tachometer-alt text-info py-0"></i>
            <p class="my-auto pl-2 text-left text-light py-0">
              My Dashboard
              
            </p>
          </router-link>
        </li>
          
          <li class="nav-item">
            <router-link to="/tutor-course" class="nav-link text-light d-flex justify-content-start py-2">
              <i class="nav-icon fas fa-book purple py-0"></i>
              <p class="my-auto pl-2 text-left text-light py-0">
                Courses
                
              </p>
            </router-link>
          </li>

          <li class="nav-item">
            <router-link to="/tutor-lesson" class="nav-link text-light d-flex justify-content-start py-2">
              <i class="nav-icon fas fa-book purple py-0"></i>
              <p class="my-auto pl-2 text-left text-light py-0">
                Lessons
                
              </p>
            </router-link>
          </li>
          
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link text-light d-flex justify-content-start py-2">
              <i class="nav-icon fa fa-copy text-success py-0"></i>
              <p class="my-auto pl-2 text-left text-light py-0">
                My Exams
                <i class="nav-icon right fas fa-angle-left py-0"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item py-1">
                <router-link to="createPapers" class="nav-link text-light offset-sm-2 d-flex justify-content-start py-2">
                  <i class="fas fa-angle-right nav-icon text-light py-0"></i>
                  <p class="my-auto pl-2 text-left text-light py-0">Create Paper</p>
                </router-link>
              </li>
              <li class="nav-item ">
                <router-link to="/categories" class="nav-link text-light offset-sm-2 d-flex justify-content-start py-2">
                  <i class="fas fa-angle-right nav-icon text-light  py-0"></i>
                  <p class="my-auto pl-2 text-left text-light py-0">Categories</p>
                </router-link>
              </li>
              <li class="nav-item ">
                <router-link to="/bank" class="nav-link text-light offset-sm-2 d-flex justify-content-start py-2">
                  <i class="fas fa-angle-right nav-icon text-light py-0 "></i>
                  <p class="my-auto pl-2 text-left text-light py-0">Question Bank</p>
                </router-link>
              </li>
              <li class="nav-item ">
                <router-link to="/examAnalysis" class="nav-link text-light offset-sm-2 d-flex justify-content-start py-2">
                  <i class="fas fa-angle-right nav-icon text-light py-0 "></i>
                  <p class="my-auto pl-2 text-left text-light py-0">Exam Analysis</p>
                </router-link>
              </li>
              <li class="nav-item ">
                <router-link to="/archive" class="nav-link text-light offset-sm-2 d-flex justify-content-start py-2">
                  <i class="fas fa-angle-right nav-icon  text-light py-0"></i>
                  <p class="my-auto pl-2 text-left text-light py-0">Archive</p>
                </router-link>
              </li>
            </ul>
          </li>

          <li class="nav-item ">
            <router-link to="/Schedules" class="nav-link text-light d-flex justify-content-start py-2">
              <i class="nav-icon fas fa-edit text-warning py-0"></i>
              <p class="my-auto pl-2 text-left text-light py-0">
                My Schedules
                
              </p>
            </router-link>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link text-light d-flex justify-content-start py-2">
              <i class="nav-icon fa fa-copy text-success py-0"></i>
              <p class="my-auto pl-2 text-left text-light py-0">
                Settings
                <i class="nav-icon right fas fa-angle-left py-0"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <router-link to="/tutor-subscriptions" class="nav-link text-light d-flex justify-content-start py-2">
                  <i class="fas fa-users-cog nav-icon text-secondary py-0"></i>
                  <p class="my-auto pl-2 text-left text-light py-0">
                    Subscriptions
                  </p>
                </router-link>
              </li>

              <li class="nav-item">
                <router-link to="/Staff" class="nav-link text-light d-flex justify-content-start py-2">
                  <i class="fas fa-users-cog nav-icon text-secondary py-0"></i>
                  <p class="my-auto pl-2 text-left text-light py-0">
                    Staff Mgt.
                  </p>
                </router-link>
              </li>

              <!------ Sub-Menu ----->
              <li class="nav-item ">
                <router-link to="/tutor-profile" class="nav-link text-light d-flex justify-content-start py-2">
                  <i class="nav-icon fas fa-user orange py-0"></i>
                  <p class="my-auto pl-2 text-left text-light py-0">
                    Profile
                  </p>
                </router-link>
              </li>
            </ul>
          </li>

          

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper bg-wallColor">   
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid" id="app">
            <!-- for example router view -->
            <router-view></router-view>
            
            <!-- set progressbar -->
            <vue-progress-bar></vue-progress-bar>
        </div>        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  <!-- /.content -->

  <footer class="main-footer sideMenu text-secondary pt-2 pb-2 border-top border-secondary text-sm">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Captain_Burah
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021-2022 <a href="#">Venture</a>.</strong> All rights reserved.
  </footer>
</div>

</template>
<script>
    export default {
      name: 'Dashboard',

      data: function(){
        return {
          // csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
      },
      methods: {
          tutorLogout: function() {
              axios
                .post(`api/tutor/logout`)
                .then( response => {
                    if (sessionStorage.getItem('tutor_token')) {
                      localStorage.clear();
                      sessionStorage.clear();
                      this.$router.push({ name: 'tutor-login' });
                    }
                    else {
                      console.log('no token')
                    }
                })
          },
      },
      mounted() {
         if (sessionStorage.getItem('tutor_token') != null) {
              console.log('token is true');
          }
          else {
              console.log('token is false');
              this.$router.push({ name: 'tutor-login' });
          }
      },

  }
</script>