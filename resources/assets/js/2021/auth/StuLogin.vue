<template>
    <div>
        <navbar></navbar>
        <div
            class="page-header header-filter purple-filter clear-filter bg-warning" 
            style="background-image: url('/img/bg25.jpg'); 
            background-size: cover; background-position:  center;">
            <div class="container py-0 my-0">
                <div class="row col-md-12">
                    <div class="pb-5 mb-5 pt-4 pt-4 bg-info"></div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 ml-auto mr-auto my-auto">
                        <div class="card my-auto">
                            <div>
                                <div class="card-header card-header-warning text-center">
                                    <h3 class="card-title mb-0 pb-0 font-weight-bold"><i class="fa fa-child">
                                        </i>&nbsp; Student Login</h3>
                                    <span class="mb-0 pb-0" style="font-size: .9rem;">
                                        It's Quick & Easy
                                    </span>
                                    <div class="social"></div>
                                </div>

                                <div class="card-body col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" v-model="user.email"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" v-model="user.password" id="exampleInputPassword1">
                                    </div>
                                    <button type="submit" @click="login" class="btn btn-block btn-warning mb-3">
                                        Submit
                                    </button>
                                    <router-link class="text-primary" 
                                        to="/student-register">
                                            <h5><b>Create account</b></h5>
                                    </router-link>
                                    <div class="text-right">
                                        <a class="btn btn-link text-left mx-0 px-0 pb-0 mb-0" href="#resetPassword">
                                            Forgot Password
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <footer class=" col-12 mastfoot mt-auto mx-auto">
                    <div class="inner mx-auto">
                        <p>designed & developed | &copy; 
                            <a href="//www.instagram.com/captain_burah" class="footer-a text-white">
                                Captain Burah
                            </a>
                            . All rights reserved.
                        </p>
                        </div>
                </footer>
            </div>
        </div>
    </div>
</template>
<script>
import navbar from "./Navbar.vue"
export default {
    components: {
        navbar,
    },
    data: () => ({
        user: {
            email: "",
            password: "",
        },
    }),
    created() {
        if(this.$store.getters.getCurrentUserLoginState === true){
            console.log('yes')
            // this.$router.push({ name: 'student-dashboard' });
        }
        else{
            console.log('no')
        }
    },
    methods: {
        login() {
            if (this.$store.dispatch("loginUser", this.user)){
                // this.$router.push({ name: 'student-dashboard' });
                setTimeout(() => this.$router.push({ name: 'student-dashboard' }), 1500);
            };
        }
    }
}
</script>
