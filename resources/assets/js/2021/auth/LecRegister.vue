<template>
    <div>
        <navbar></navbar>
        <div
            class="page-header header-filter purple-filter clear-filter bg-info" 
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
                                <div class="card-header card-header-info text-center">
                                    <h3 class="card-title mb-0 pb-0 font-weight-bold"><i class="fa fa-child">
                                        </i>&nbsp; Tutor Registration</h3>
                                    <span class="mb-0 pb-0" style="font-size: .9rem;">
                                        It's Quick & Easy
                                    </span>
                                    <div class="social"></div>
                                </div>

                                <div class="card-body col-md-12">

                                    <div class="form-group-row">
                                        <div class="form-row col-md-12 p-0">
                                            <!--  First Name  -->
                                            <div class="form-group col-md-6 pt-0">
                                                <input type="text" class="form-control" v-model="user.fname"
                                                name="fname" placeholder="First Name" required autofocus>
                                            </div>
                                            <!--  /First Name  -->

                                            <!--  Last Name  -->
                                            <div class="form-group col-md-6 pt-0">
                                                <input type="text" class="form-control" v-model="user.lname"
                                                name="lname" placeholder="Last Name" required autofocus>
                                            </div>
                                            <!--  /Last Name  -->
                                        </div>
                                    </div>

                                     <!--  Email  -->
                                    <div class="form-group p-0">
                                        <input type="email" class="form-control" v-model="user.email"
                                        name="email" placeholder="Email Address"
                                        autocomplete=""  required>
                                    </div>
                                    <!--  /Email  -->
                                    
                                    <div class="form-group  p-0">
                                        <!--  Password  password & password_confirmation-->
                                    
                                        <input id="password" type="password" v-model="user.password"
                                        class="form-control" 
                                        name="password" placeholder="Password" autocomplete="off" required>
                                    
                                        <!-- <div class="col-md-6">
                                            <input id="password-confirmation" type="password" class="form-control" name="password_confirmation" 
                                            placeholder="Confirm Password" required>
                                        </div> -->
                                        <!--  Password  -->
                                    </div>

                                    <button type="submit" class="btn btn-block btn-success" @click="register">
                                        Register
                                    </button>

                                    <div class="mx-auto text-center">
                                        <a class="text-primary text-center" 
                                            href="#register">
                                                <h5><b>Create account</b></h5>
                                        </a>
                                    </div>

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
            fname: "",
            lname: "",
            email: "",
            password: "",
        },
    }),
    methods: {
        register() {
            this.$store.dispatch("registerTutor", this.user );
        }
    }
}
</script>