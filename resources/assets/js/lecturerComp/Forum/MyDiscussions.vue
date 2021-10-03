<template>
<div>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    
    <div class="container">
      <div class="row mb-0">
        <div class="col-sm-6">
          <h1>Your Discussions</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content container">
    <div class="text-left mb-0 mt-0">
      <router-link 
        to="tutor-discussion" 
      >
        <button class="btn btn-white border border-dark text-dark text-capitalize btn-md">
            See all discussions
        </button>
      </router-link>
      <router-link 
        to="tutor-discussion-create" 
      >
        <button class="btn btn-white border border-success text-success text-capitalize btn-md">
            Ask a question
        </button>
      </router-link>
    </div>

    <div>
        <div v-if="loading" class="card mt-5">
            <div class="spinner-border text-success" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <!-- <div v-if="!discussions.id">
            <h5>You do not have any questions.</h5>
        </div> -->
        
        <div else v-for="(discussion, id) in discussions" :key="id" class="card mt-3">
            <div class="card-body">
                <div class="p-0 m-0">
                    <router-link :to="{ name: 'tutor-discussion-id', params:{ id: discussion.id } }">
                        <h5>{{ discussion.name }}</h5>
                    </router-link>                    
                </div>
                <p>
                    {{ discussion.content }}
                </p>
            </div>
            
            <div class="card-footer" >
                <img src="/img/faces/camp.jpg" 
                    alt="UserImg" 
                    class="brand-image img-circle elevation-3"
                    style="opacity: .8"
                > 
                <span v-if="discussion.lecturer">
                    {{ discussion.lecturer.fname }} {{ discussion.lecturer.lname }}
                </span>
                <button class="btn border border-danger text-danger text-capitalize mx-2" v-on:click="deleteThread({id: discussion.id})">Delete</button>
                <router-link :to="{ name: 'tutor-discussion-edit', params:{ id: discussion.id } }">
                    <button class="btn btn-white border border-warning text-warning text-capitalize btn-md">
                        Edit
                    </button>
                </router-link>
                
            </div>
        </div>
    </div>

  </section>
</div>
</template>

<script>

export default{
    data() {
        return {
            loading: false,
            userId: localStorage.getItem('tutor_id'),
            discussions: {},
        }
    },
    created() {
        this.loading = true;
        axios
        .get(`/api/tuDiscussions/${this.userId}`)
        .then(response => {
            this.discussions = response.data.data
        });
        this.loading = false
    },
    methods: {
        deleteThread($did){
            axios
            .post('/api/deleteDiscussion', {
                id: $did
            })
            .then(response => {
                Toast.fire({
                    icon: 'success',
                    title: 'Deleted!',
                    text: 'Your question is deleted.',
                });
                location.reload();
            })
        }
    }
}
</script>