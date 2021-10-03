<template>
<div class="wrapper" id="app">
  <!-- Navbar -->
  <nav class="main-header elevation-2 navbar sideMenu navbar-expand navbar-bg navbar-white navbar-dark border-bottom border-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
            <i class="fas fa-bars"></i>&nbsp; &nbsp; Dashboard</a>
      </li>
    </ul>
    <button class="btn btn-dark" @click="userLogout" role="button">
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
          <p class="d-block my-auto pl-2">Student Name</p>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 bg-transparent">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <router-link to="/academy" class="nav-link text-light d-flex justify-content-start">
              <i class="nav-icon fas fa-school text-warning "></i>
              <p class="my-auto pl-2 text-left text-light">
                Academy
                
              </p>
            </router-link>
          </li>

          <li class="nav-item border-bottom border-secondary">
            <router-link to="#studentcast" class="nav-link text-light d-flex justify-content-start">
              <i class="nav-icon fas fa-hashtag text-danger"></i>
              <p class="my-auto pl-2 text-left text-light">
                Studentcast
                
              </p>
            </router-link>
          </li>

        <!------ Sub-Menu ----->
        <li class="nav-item">
          <router-link to="/student-dashboard" class="nav-link text-light d-flex justify-content-start">
            <i class="nav-icon fas fa-tachometer-alt text-info"></i>
            <p class="my-auto pl-2 text-left text-light">
              My Dashboard
              
            </p>
          </router-link>
        </li>

        <li class="nav-item">
          <router-link to="/student-courses" class="nav-link text-light d-flex justify-content-start">
            <i class="nav-icon fas fa-book purple"></i>
            <p class="my-auto pl-2 text-left text-light">
              My Courses
              
            </p>
          </router-link>
        </li>

        <li class="nav-item">
          <router-link to="/exams" class="nav-link text-light d-flex justify-content-start">
            <i class="nav-icon fas fa-edit text-warning"></i>
            <p class="my-auto pl-2 text-left text-light">
              My Exams
              
            </p>
          </router-link>
        </li>
        
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link text-light  d-flex justify-content-start">
              <i class="nav-icon fa fa-cog text-success"></i>
              <p class="my-auto pl-2 text-left text-light">
                Services
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <router-link to="/orders" class="nav-link text-light offset-sm-2 d-flex justify-content-start">
                  <i class="fas fa-users-cog nav-icon yellow"></i>
                  <p class="my-auto pl-2 text-left text-light">Orders</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/results" class="nav-link text-light offset-sm-2 d-flex justify-content-start">
                  <i class="fas fa-university nav-icon yellow"></i>
                  <p class="my-auto pl-2 text-left text-light">Results</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/assignments" class="nav-link text-light offset-sm-2 d-flex justify-content-start">
                  <i class="fas fa-university nav-icon yellow"></i>
                  <p class="my-auto pl-2 text-left text-light">Assignments</p>
                </router-link>
              </li>
            </ul>
          </li>
        <!------ Sub-Menu ----->
          <li class="nav-item">
            <router-link to="/profile" class="nav-link text-light d-flex justify-content-start">
              <i class="nav-icon fas fa-user orange"></i>
              <p class="my-auto pl-2 text-left text-light">
                Profile
                
              </p>
            </router-link>
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
        <div class="container-fluid">
            <!-- for example router view -->
            <router-view></router-view>
            
            <!-- set progressbar -->
            <vue-progress-bar></vue-progress-bar>
        </div>        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  <!-- /.content -->
<!-- /.content-wrapper -->



<!-- Main Footer -->
  <footer class="main-footer sideMenu text-secondary pt-2 pb-2 border-top border-secondary text-sm">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Captain_Burah
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021-2022 <a href="#">Venture</a>.</strong> All rights reserved. {{ userState }}
  </footer>
<!-- ./Main Footer -->

</div>
</template>        
<script>
    export default {
      name: 'Dashboard',

      data: function(){
        return {
          logOut: '',
          userState: '',
          // userDetails: null,

        }
      },
      methods: {
          userLogout: function() {
              axios
                .post(`api/user/logout`)
                .then( response => {
                    if (sessionStorage.getItem('student_token')) {
                      sessionStorage.clear();
                      localStorage.clear();
                      this.$router.push({ name: 'student-login' });
                    }
                    else {
                      console.log('no token');
                      localStorage.clear();
                      this.$router.push({ name: 'student-login' });
                    }
                })
          },
      },
      
      mounted() {
          if (sessionStorage.getItem('student_token') != null) {
              console.log('token is true');
          }
          else {
              console.log('token is false');
              this.$router.push({ name: 'student-login' });
          }
      },
  }
</script>