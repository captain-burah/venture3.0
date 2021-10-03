<template>
<div>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-secondary">Top Questions</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content container">
    <div class="text-right mb-2 mx-3">
      <router-link to="tutor-discussion-create" >
        <button class="btn btn-info btn-md text-capitalize">
            Ask Question
        </button>
      </router-link>

      <router-link to="tutor-myDiscussion" >
        <button class="btn btn-success btn-md text-capitalize">
            Go to my discusions
        </button>
      </router-link>
    </div>
    <!-- <div class="card">
      <div class="card-body p-0">

        <ul class="nav nav-pills flex-column">

          <li class="nav-item">
            <router-link to="#" class="nav-link text-dark d-flex justify-content-start py-2">
              <i class="nav-icon fas fa-inbox purple py-0"></i>
              <p class="my-auto pl-2 text-left text-dark py-0 mx-auto w-100 text-capitalize">
                Top discussions                    
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
    </div> -->

    <discussions class="mx-3"></discussions>

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