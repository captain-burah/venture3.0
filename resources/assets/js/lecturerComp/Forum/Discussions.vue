<template>
<div>
    <div class="card card-primary card-outline mt-0">
        
        <div class="card-body p-0">
            <div class="mailbox-controls">

                <div class="form-group pt-3">
                    <label for="tutors">Search based on the subjects</label>
                    <select id="tutors" class="form-control custom-select" v-model="selectedTopic">
                        <option 
                            v-for="(channel, cid) in channels" 
                            :key="cid" 
                            :value="channel.id"
                        >{{ channel.name }}
                        </option>
                    </select>

                    <button type="button" class="btn btn-warning btn-sm checkbox-toggle" v-on:click="search({id: selectedTopic})">
                        <i class="fas fa-search pr-2"></i>
                            Search
                        </button>   
                </div>
            </div>
        </div>
    </div>

    <div>
        <div v-if="loading" class="card mt-3">
            <div class="spinner-border text-success" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <div else v-for="(discussion, id) in forum" :key="id" class="card mt-3">
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
                <span v-if="discussion.user">
                    {{ discussion.user.fname }} {{ discussion.user.lname }}
                </span>
            </div>
        </div>
        
    </div>
    
</div>
</template>
<script>

export default{
    data() {
        return {
            loading: false,
            forum: {},
            selectedTopic: '',
            channels: {},
        }
    },
    created() {
        this.loading = true;
        axios
        .get(`/api/channels`)
        .then(response => {
            this.channels = response.data.data
        });
        axios
        .get(`/api/discussions`)
        .then(response => {
            this.forum = response.data.data
        });
        this.loading = false
    },
    methods: {
        search($id){
            axios
            .post(`/api/filterDiscussion`, {
                cid: $id
            })
            .then(response => {
                this.forum = response.data.data
            });
        }
    }
}
</script>