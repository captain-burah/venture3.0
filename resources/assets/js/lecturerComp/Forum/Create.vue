<template>
<div class="container px-5">
    <div class="text-left mb-0">
      <router-link 
        to="tutor-discussion" 
      >
        <button class="btn btn-white btn-md  text-capitalize">
            Go back to discussions
        </button>
      </router-link>
      <router-link 
        to="tutor-myDiscussion" 
      >
        <button class="btn btn-success btn-md text-capitalize">
            Go to my discusions
        </button>
      </router-link>
    </div>
    <div class="card mt-5">
        <div class="card-header card-header-info">
                <h3> Ask a public question </h3>
        </div>
        <div class="card-body mt-0">
            <div class="p-0 m-0">
                <h5>
                    Title
                </h5>
                <div class="form-group">
                    <label for="title">Be specific and imagine you’re asking a question to another person</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="title" 
                        v-model="discussion.name"
                    >
                </div>
            </div>
            <div class="p-0 m-0">
                <h5>
                    Body
                </h5>
                <div class="form-group">
                    <label for="body">Include all the information someone would need to answer your question</label>
                    <textarea 
                        class="form-control" 
                        id="body"
                        rows="7"
                        v-model="discussion.content"
                    ></textarea>
                </div>
            </div>
            <div class="p-0 m-0">
                <h5>
                    Channel
                </h5>
                <div class="form-group">
                    <label for="channel">Choose a particular channel your question relates to</label>
                    <select id="channel" class="form-control custom-select" v-model="discussion.channel">
                        <option 
                            v-for="(channel, cid) in channels" 
                            :key="cid" 
                            :value="channel.id"
                        >{{ channel.name }}
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-footer" >
            <img src="/img/faces/camp.jpg" 
                alt="UserImg" 
                class="brand-image img-circle elevation-3"
                style="opacity: .8"
            > 
            <span>
                {{ user.fname }} {{ user.lname }}
            </span>
        </div>
    </div>

    <div class="mt-2 mb-5 ">
        <button 
            class="btn btn-info btn-md text-capitalize"
            v-on:click="postQuestion"
        >Post your question</button>
    </div>
</div>
</template>
<script>

export default{
    data() {
        return {
            loading: false,
            userId: localStorage.getItem('tutor_id'),
            user: {},
            channels: {},
            userType: 'tutor',
            discussion: {
                name: '',
                content: '',
                channel: '',
            }
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
        .get(`/api/channels`)
        .then(response => {
            this.channels = response.data.data
        });
        this.loading = false
    },
    methods: {
        postQuestion: function(){
            axios
            .post(`/api/createDiscussion`, {
                name: this.discussion.name,
                content: this.discussion.content,
                user: this.userType,
                lecturer_id: this.userId,
                channel_id: this.discussion.channel,
            })
            .then(response => {
                Toast.fire({
                    icon: 'success',
                    title: 'Done!',
                    text: 'Your question is posted',
                });
                var self = this; //you need this because *this* will refer to Object.keys below`

                //Iterate through each object field, key is name of the object field`
                Object.keys(this.discussion).forEach(function(key,index) {
                    self.discussion[key] = '';
                });
            });
        }
    }
}
</script>