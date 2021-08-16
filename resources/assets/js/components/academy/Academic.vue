<template>
<div>
    <div class="main main-raised border border-primary">
            <div class="container-fluid">
                    <div class="row mx-auto">
                        <div class="col-md-10 pb-4 mx-auto mt-3">
                            <div class="card mx-auto bg-white text-dark">
                                <div class="card-header card-header-primary">
                                    <h2 class="card-title">{{ academic.name }}</h2>
                                    <p class="category">by {{ academic.tutor }}</p>
                                </div>
                                <div class="card-body">
                                    <div v-if="!loading">
                                        <h4>Course Duration | {{ academic.duration }} </h4>
                                        <hr/>
                                        <p class="card-text">{{ academic.description }}</p>
                                        <a href="#" class="btn btn-success h4">Enroll</a>  
                                        <h4>Lessons</h4>
                                        <ul>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <div v-else>Data is loading..</div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </div>
</div>

</template>

<script>
export default {    
    data() {
        return {
            academic: null,
            loading: false
        };
    },
    
    created() {
        this.loading = true;
        axios
        .get(`/api/academies/${this.$route.params.id}`)
        .then(response => {
            this.academic = response.data.data,
            this.loading = false
        });
    }
}
</script>
