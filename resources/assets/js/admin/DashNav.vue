<template>

    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">Administrator</a>

        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" :src="user">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">{{username}}</span>
                </div>
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
                <form id="logout-form-nav" :action="logout_user" method="POST" style="display: none;">
                  <input type="hidden" name="_token" :value="csrf">
                  
                </form>
            </div>
          </li>
        </ul>
      </div>
    </nav>
</template>

<script>
    export default {
      props: ['brand', 'user', 'logout_user', 'username' ],
      data: function(){
        //const lang = localStorage.getItem('lang') || 'en';
        return {
          //lang: lang,
          csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
      },
      mounted() {
          console.log('Dashboard Navbar mounted.')
      }
    }
</script>
