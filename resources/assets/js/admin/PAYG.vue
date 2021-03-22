<template>
<div class="container-fluid mt-7 px-0 mx-0">

    <div class="row mt-5">
      <div class="col-md-12 mb-0 mb-md-0">
        <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h2 class="mb-0 text-center">Settings for Pay As You Go subscription plan</h2>
                </div>
                <p class="lead">
                    Beaware! Any changes here will affect the database structure of our payment schemes.
                    Please think twice before changing any of the below values.
                  </p>
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="row mt-1">
      <div class="col-md-6 mb-5 mb-md-0">
        <enroll></enroll>
      </div>
      <div class="col-md-6 mb-5 mb-md-0">
        <storage></storage>
      </div>
    </div>
    
    <div class="row mt-1">
      <div class="col-md-12 mb-5 mb-md-0">
        <staffinfo></staffinfo>
      </div>
    </div>

    <div class="row mt-1">
      <div class="col-md-12 mb-5 mb-md-0">
        <subdomain></subdomain>
      </div>
    </div>
</div>

</template>

<script>
    import storage from './payg/storage.vue'
    import enroll from './payg/enroll.vue'
    import staffinfo from './payg/staffAccounts.vue'
import subdomain from './payg/subdomain.vue'
    export default {
    components: { storage, enroll, staffinfo, subdomain },
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
