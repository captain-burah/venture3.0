<template>
<div class="wrapper" id="app">
  <!-- Navbar -->
  <nav class="main-header elevation-2 navbar sideMenu navbar-expand navbar-bg navbar-white navbar-dark border-bottom border-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
            <i class="fas fa-bars"></i>&nbsp; &nbsp; Dashboard</a>
      </li>
    </ul>
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary sideMenu elevation-4 border-right border-dark">
    <!-- Brand Logo -->
    <a :href="home_student" class="brand-link navbar-bg">
      <img src="/img/rocket.png" alt="Larastart" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Venture 2021</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
        <div class="image">
          <img :src="tutor_img" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <router-link to="/student-dashboard" class="d-block ">Student Name here</router-link>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 bg-transparent">
        <ul class="nav nav-pills nav-sidebar  flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <router-link to="/academy" class="nav-link text-light">
              <i class="nav-icon fas fa-school text-warning"></i>
              <p>
                Academy
                
              </p>
            </router-link>
          </li>
          <li class="nav-item border-bottom border-secondary">
            <router-link to="#studentcast" class="nav-link text-light">
              <i class="nav-icon fas fa-hashtag text-danger"></i>
              <p>
                Studentcast
                
              </p>
            </router-link>
          </li>
          
        <!------ Sub-Menu ----->
        <li class="nav-item">
          <router-link to="/student-dashboard" class="nav-link text-light">
            <i class="nav-icon fas fa-tachometer-alt text-info"></i>
            <p>
              My Dashboard
              
            </p>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/lessons" class="nav-link text-light">
            <i class="nav-icon fas fa-book purple"></i>
            <p>
              My Lessons
              
            </p>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/exams" class="nav-link text-light">
            <i class="nav-icon fas fa-edit text-warning"></i>
            <p>
              My Exams
              
            </p>
          </router-link>
        </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link text-light ">
              <i class="nav-icon fa fa-cog text-success"></i>
              <p>
                Services
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <router-link to="/orders" class="nav-link text-light offset-sm-2">
                  <i class="fas fa-users-cog nav-icon yellow"></i>
                  <p>Orders</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/results" class="nav-link text-light offset-sm-2">
                  <i class="fas fa-university nav-icon yellow"></i>
                  <p>Results</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/assignments" class="nav-link text-light offset-sm-2">
                  <i class="fas fa-university nav-icon yellow"></i>
                  <p>Assignments</p>
                </router-link>
              </li>
            </ul>
          </li>
        <!------ Sub-Menu ----->
          <li class="nav-item">
            <router-link to="/profile" class="nav-link text-light">
              <i class="nav-icon fas fa-user orange"></i>
              <p>
                Profile
                
              </p>
            </router-link>
          </li>
          <li class="nav-item py-1">
            <a class="nav-link text-light rounded-pill" href="javascript:void(0)" 
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="nav-icon fa fa-power-off red"></i>
              <p>
               Logout
              </p>
            </a>
            <form id="logout-form" :action="logout_user" method="POST" style="display: none;">
              <input type="hidden" name="_token" :value="csrf">
              
            </form>
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
      props: ['logout_user', 'tutor_img', 'home_student', 'locale'],
      name: 'Logout',

      data: function(){
        //const lang = localStorage.getItem('lang') || 'en';
        return {
          //lang: lang,
          userState: '',
          csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
      },
      mounted() {
          if(this.$store.getters.getCurrentUserLoginState == true){
              console.log('Its true');
              this.userState = 'login success';
          }else if (this.$store.getters.getCurrentUserLoginState == false){
              console.log("its false");
              this.userState = 'login failed';
          }
          else{
            console.log('something else');
          };

          console.log('Smaster Mounted');
      },
    //   created() {
    //       this.$store.dispatch("setCurrentUserLogin");
    //   },
      methods: {
          logout() {
              axios
                .post('logout_user')
                .then(() => {
                    this.$store.dispatch("setCurrentUserLogout");
                })
                .catch(error => {
                    window.location.href = '/login';
                });
          },
          //handleChange(event){
          //  localStorage.setItem('lang', event.target.value);
          //  window.location.reload();
          //}
      },
      

  }
</script>