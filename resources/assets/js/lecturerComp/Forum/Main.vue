<template>
<div>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>StudentCast Forum</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-3">

        <router-link 
          to="#compose.html" 
        >
          <button class="btn btn-primary btn-block mb-3">
              Create Discussion
          </button>
        </router-link>

        <div class="card">
          <div class="card-body p-0">

            <ul class="nav nav-pills flex-column">

              <li class="nav-item">
                <router-link to="#" class="nav-link text-dark d-flex justify-content-start py-2">
                  <i class="nav-icon fas fa-inbox purple py-0"></i>
                  <p class="my-auto pl-2 text-left text-dark py-0 mx-auto w-100 text-capitalize">
                    All discussions                    
                  </p>
                </router-link>
              </li>

              <li class="nav-item">
                <router-link to="#" class="nav-link text-dark d-flex justify-content-start py-2">
                  <i class="nav-icon fas fa-inbox purple py-0"></i>
                  <p class="my-auto pl-2 text-left text-dark py-0 mx-auto w-100 text-capitalize">
                    My discussions                    
                  </p>
                </router-link>
              </li>

            </ul>
          </div>
          <!-- /.card-body -->
        </div>

      </div>


      <div class="col-md-9">

        <discussions></discussions>

      </div>

    </div>
  </section>
</div>
</template>

<script>
import discussions from './Discussions.vue';

export default{
    components: {
        discussions,
        
    },
    data() {
        return {
            
        }
    },
    created() {
        
    },

}
</script>