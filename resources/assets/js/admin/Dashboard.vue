<template>
<div class="wrapper" id="app">

  <!-- Navbar -->
  <navbar 
    :username="username1"
    :logout_user="logout_base"
  ></navbar>

  <!-- Main Sidebar Container -->
  <sidebar
    :user="user1"
    :username="username1"
  ></sidebar>

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

  <!-- Footer -->
  <footer class="main-footer sideMenu text-secondary pt-2 pb-2 border-top border-secondary text-sm">
    <foot></foot>
  </footer>
  <!-- /.Footer -->

</div>
</template>
<script>
import foot from './Footer.vue';
import navbar from './Navbar.vue';
import sidebar from './Sidebar.vue';

    export default {
      props: ['brand1', 'user1', 'logout_user1', 'username1', 'logout_base' ],
      components: { sidebar, foot, navbar  },

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
