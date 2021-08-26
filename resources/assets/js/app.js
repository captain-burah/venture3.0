require('./bootstrap');

window.Vue = require('vue');

import store from "./store/index";
import router from "./routes";
import Index from "./Index";


//-------------- Vue SweetAlert v2-------------------------------------------------->
import swal from 'sweetalert2';
window.swal = swal;

const Toast = swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 8000,
  timerProgressBar: true,
  onOpen: (toast) => {
    toast.addEventListener('mouseenter', swal.stopTimer)
    toast.addEventListener('mouseleave', swal.resumeTimer)
  }
});
window.Toast = Toast;

//-------------- Vue Progress-Bar -------------------------------------------------->
import VueProgressBar from 'vue-progressbar';
Vue.use(VueProgressBar, {
  color: '#03e7fc',
  failedColor: '#fc2803',
  thickness: '7px',
  transition: {
    speed: '3s',
    opacity: '0.6s',
    termination: 3000},
  autoRevert: true,
  location: 'top',
  inverse: false
})

//-------------- Vue Filer Imports ----------------------------------------->
import { Form, HasError, AlertError } from 'vform';
import moment from 'moment';

//-------------- Vue Form -------------------------------------------------->
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

//-------------- Vue CKeditor -------------------------------------------------->
import Vue from 'vue';
import CKEditor from '@ckeditor/ckeditor5-vue';
Vue.use( CKEditor );

//-------------- Vue-Routers--------------------------------------------------//
import VueRouter from 'vue-router'
Vue.use(VueRouter)


//------------- Vue Components-------------------------------------------------//
Vue.component(
  'passport-clients',
  require('./components/passport/Clients.vue')
);

Vue.component(
  'passport-authorized-clients',
  require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
  'passport-personal-access-tokens',
  require('./components/passport/PersonalAccessTokens.vue')
);

Vue.component(
  'tutor-dashboard', 
  require('./lecturerComp/Lmaster.vue')
);

Vue.component(
  'student-dashboard', 
  require('./studentComp/Smaster.vue')
);

Vue.component(
  'language-switcher', 
  require('./components/LanguageSwitcher.vue')
);

Vue.component(
  'test-vue', 
  require('./components/test.vue')
);

Vue.component(
  'payg-info', 
  require('./homePage/paygSubs.vue')
);

Vue.component(
  'estimation-calculator', 
  require('./homePage/estimation.vue')
);



Vue.component(
  'academy-page', 
  require('./2021/academy/Academy2.vue')
);
Vue.component(
  'academic-page', 
  require('./2021/academy/Academicc.vue')
);


Vue.component(
  'home-cover', 
  require('./2021/landing/Cover.vue')
);
Vue.component(
  'navbar', 
  require('./2021/landing/Navbar.vue')
);


  //----------------- Admin Components-----------------------------------------//
      Vue.component(
        'admin-panel',
        require('./admin/Dashboard.vue')
      );

      Vue.component(
        'analytics-component', 
        require('./admin/charts/analytics.vue')
      .default);
  //----------------- /Admin Components-----------------------------------------//
//------------- Vue Custom Event-------------------------------------------------//

let Fire = new Vue();
window.Fire = Fire;


//-------------- Vue Filters-------------------------------------------------//
  Vue.filter('upText', function(text){
    return text.charAt(0).toUpperCase() + text.slice(1)
  });

  Vue.filter('myDate', function(created){
    return moment(created).format('MMMM Do YYYY, h:mm:ss a');
  })

// const router = new VueRouter({
//   //mode: 'history',
//   //base: `/${window._locale}/`,
//   routes // short for `routes: routes`
// })

const app = new Vue({
    el: '#app',
    router,
    store,
    components: {
      "index": Index,
    } 
});
