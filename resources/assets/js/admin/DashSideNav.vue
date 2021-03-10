<template>
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" 
        aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="">
        <img :src="brand" class="navbar-brand-img" alt="...">
      </a>

      <!-- Collapse User Info-->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" 
          aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" :src="user">
              </span>
            </div>
          </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <a href="" class="dropdown-item">
                <i class="ni ni-single-02"></i> 
                <span>My profile</span>
              </a>
              <div class="dropdown-divider"></div>
                <a href="javascript:void(0)" class="dropdown-item" 
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
                <form id="logout-form-side" :action="logout_user" method="POST" style="display: none;">
                  <input type="hidden" name="_token" :value="csrf">
                  
                </form>
            </div>
        </li>
      </ul>

      <!-- Collapse Left Side Menu-->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="">
                <img :src="brand" class="navbar-brand-img" alt="...">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" 
              aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>

        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <router-link to="/Analytics" class="nav-link" >
              <i class="ni ni-tv-2 text-primary"></i> Analytics
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/admin_info" class="nav-link" >
              <i class="ni ni-bulb-61 text-blue"></i> Information Mgt
            </router-link>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ni ni-pin-3 text-orange"></i> Tutor Requests
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ni ni-single-02 text-yellow"></i> Customer Service
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ni ni-bullet-list-67 text-red"></i> User Info
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ni ni-key-25 text-info"></i> Admin Staff
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ni ni-circle-08 text-pink"></i> Register
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">

        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Documentation</h6>

        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ni ni-spaceship"></i> Getting started
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ni ni-palette"></i> Foundation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ni ni-ui-04"></i> Components
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
    export default {
        props: ['brand', 'user', 'logout_user', 'user-name'],
        data: function(){
        //const lang = localStorage.getItem('lang') || 'en';
        return {
          //lang: lang,
          csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
      },
      mounted() {
            console.log('Dashboard Side-Navbar mounted.')
        }
    }
</script>
