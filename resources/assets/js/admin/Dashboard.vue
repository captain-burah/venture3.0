<template>
<div class="" id="app">

  <!-- Sidenav -->
  <DashSideNav 
    :brand="brand1" 
    :logout_user="logout_user1" 
    :user="user1"
    :username="username1">
  </DashSideNav>

  <!-- Main content -->
  <div class="main-content">

    <!-- Top navbar -->
    <DashNav  
      :brand="brand1" 
      :logout_user="logout_user1" 
      :user="user1"
      :username="username1">
    </DashNav>

    <DashHeader></DashHeader>

    
    <!-- Page content -->
    <div class="container-fluid mt--7 px-0" id="app">
        <!-- for example router view -->
        <router-view></router-view>

        
        <vue-progress-bar></vue-progress-bar>
      <!-- Charts -->

      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              <strong>© 2021 <a href="" class="font-weight-bold ml-1" target="_blank">Enlighten Venture</a>.</strong>
              All rights reserved.
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">Captain Burah</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">Terms and Conditions</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>

    </div>
  </div>

</div>
</template>
<script>
    import DashHeader from './DashHeader.vue';
    import DashBody from './DashBody.vue';
    import DashNav from './DashNav.vue';
    import DashSideNav from './DashSideNav.vue';

    export default {
      props: ['brand1', 'user1', 'logout_user1', 'username1' ],
      components: { DashHeader, DashBody, DashNav, DashSideNav },

      data: function(){
        //const lang = localStorage.getItem('lang') || 'en';
        return {
          //lang: lang,
          csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
      },
      methods: {
          logout() {
              axios.post('logout_user')
                  .catch(error => {
                      window.location.href = '/admin';
                  });
          },
          //handleChange(event){
          //  localStorage.setItem('lang', event.target.value);
          //  window.location.reload();
          //}
      },
      mounted() {
          console.log('Admin-Panel mounted.')
      }
    }
</script>
