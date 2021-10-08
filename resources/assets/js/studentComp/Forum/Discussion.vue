<template>
<div>
    <div class="container px-5">
        <div class="text-left mb-0 mt-0">
            <router-link to="/student-discussion" >
                <button class="btn btn-white border border-dark text-dark text-capitalize btn-md">
                    See all discussions
                </button>
            </router-link>

            <router-link to="/student-discussion-create" >
                <button class="btn btn-white border border-success text-success text-capitalize btn-md">
                    Ask a question
                </button>
            </router-link>
        </div>
        <div class="card mt-5">
            <div class="card-header card-header-primary">
                 <h3>{{ discussion.name }}</h3>
            </div>
            <div class="card-body">
                <div class="p-0 m-0">
                   
                    <div>
                        <p>
                            <span class="text-secondary">Asked </span>{{ time }} 
                            <span class="text-secondary">Precisely at </span>{{ precise }}
                        </p>
                    </div>
                </div>
                <hr>
                <p>
                    {{ discussion.content }}
                </p>
                <div class="mt-2 ml-0">
                    <img src="/img/faces/camp.jpg" 
                        alt="UserImg" 
                        class="brand-image img-circle elevation-3 ml-0"
                        style="opacity: .8"
                    > 
                    <span>
                        <span v-if="discussion.lecturer">
                            {{ discussion.lecturer.fname }} {{ discussion.lecturer.lname }}
                        </span>
                        <span v-if="discussion.user">
                            {{ discussion.user.fname }} {{ discussion.user.lname }}
                        </span>
                    </span>
                </div>

                <!---------- Asnwers ---------------------->
                <h2 class="ml-3 mt-3">Answers</h2>
                <div class="ml-3 ">
                    <div v-for="(reply, id) in replies" :key="id" class="card mt-0 pt-0">
                        <div class="card-body mt-0">
                            <div class="p-0 m-0">
                                <div>
                                    <p>
                                        <span class="text-secondary">Replied </span>{{ reply.created_at | formatDate }}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <p>
                                {{ reply.content }}
                            </p>
                        </div>
                    
                        <div class="card-footer" >
                            <img src="/img/faces/camp.jpg" 
                                alt="UserImg" 
                                class="brand-image img-circle elevation-3"
                                style="opacity: .8"
                            > 
                            <div v-if="reply.lecturer">
                                <span >
                                    {{ reply.lecturer.fname }} {{ reply.lecturer.lname }}
                                </span>
                                <div v-if="user.id === reply.lecturer.id">
                                    <button class="btn border border-danger text-danger text-capitalize mx-2" v-on:click="deleteReply({id: reply.id})">
                                        Delete
                                    </button>
                                    <!-- <router-link :to="{ name: 'tutor-discussion-edit', params:{ id: discussion.id } }">
                                        <button class="btn btn-white border border-warning text-warning text-capitalize btn-md">
                                            Edit
                                        </button>
                                    </router-link> -->
                                </div>
                            </div>
                            <div v-if="reply.user">
                                <span>
                                    {{ reply.user.fname }} {{ reply.user.lname }}
                                </span>
                                <div v-if="user.id === reply.user.id">
                                    <button class="btn border border-danger text-danger text-capitalize mx-2" v-on:click="deleteReply({id: reply.id})">
                                        Delete
                                    </button>
                                    <!-- <router-link :to="{ name: 'tutor-discussion-edit', params:{ id: discussion.id } }">
                                        <button class="btn btn-white border border-warning text-warning text-capitalize btn-md">
                                            Edit
                                        </button>
                                    </router-link> -->
                                </div>
                            </div>   
                        </div>
                    </div>

                    <!---------- Your Answer ---------------->
                    <div class="card mt-0 pt-0">
                        <div class="card-body mt-0">
                            <div class="p-0 m-0">
                                <h5 class="text-secondary">Your Answer </h5>
                            </div>
                            <div class="form-group pt-1">
                                <textarea 
                                    class="form-control" 
                                    id="body"
                                    rows="7"
                                    v-model="myReply.content"
                                ></textarea>
                            </div>
                        </div>
                    
                        <div class="card-footer" >
                            <img src="/img/faces/camp.jpg" 
                                alt="UserImg" 
                                class="brand-image img-circle elevation-3"
                                style="opacity: .8"
                            > 
                            <span>
                                {{ user.fname }}
                                {{ user.lname }}
                            </span>
                        </div>
                    </div>
                    <div class="mt-2 mb-5 ">
                        <button 
                            class="btn btn-info btn-md text-capitalize"
                            v-on:click="postReply"
                        >Post your reply</button>
                    </div>
                    <!---------- Your Answer ---------------->

                </div>
                <!---------- Asnwers ------------->
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
            discussion: {},
            replies: {},
            precise: '',
            time: '',
            myReply: {
                content: '',
            },
            user: {},
            userId: localStorage.getItem('user_id'),
            userType: 'user',
        }
    },
    created() {
        this.loading = true;
        axios
        .get(`/api/tutor/fetch/${this.userId}`)
        .then(response => {
            this.user = response.data.data
        });
        axios
        .get(`/api/discussions/${this.$route.params.id}`)
        .then(response => {
            this.discussion = response.data.data[0],
            this.precise = response.data.precise,
            this.time = response.data.time
        });
        axios
        .get(`/api/replies/${this.$route.params.id}`)
        .then(response => {
            this.replies = response.data.data
        });
        this.loading = false
    },
    methods: {
        postReply: function(){
            axios
            .post(`/api/createReply`, {
                content: this.myReply.content,
                user: this.userType,
                user_id: this.userId,
                discussion_id: this.discussion.id,
            })
            .then(response => {
                Toast.fire({
                    icon: 'success',
                    title: 'Done!',
                    text: 'Your reply is posted',
                });
                location.reload();
            });
        },
        deleteReply($did){
            axios
            .post('/api/deleteReply', {
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