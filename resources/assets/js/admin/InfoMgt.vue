<template>
<div class="container-fluid mt-7 px-0 mx-0">

    <div class="row mt-5">
      <div class="col-md-12 mb-0 mb-md-0">
        <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h1 class="mb-0">Information for Pay As You Go</h1>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="row mt-1">
      <div class="col-md-6 mb-5 mb-md-0">
        <storage></storage>
      </div>
      <div class="col-md-6 mb-5 mb-md-0">
        <student></student>
      </div>
    </div>
</div>

</template>

<script>
    import storage from './payg/storage.vue'
    import student from './payg/students.vue'
    export default {
    components: { storage, student },
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
