<style>
.widget-user-header{
    background-position: center center;
    background-size: cover;
    height: 250px !important;
}

.card-footer{
    padding: 10px !important;
    margin: 2px !important;
}
.cards-a{
    text-decoration: none;
    color: #fff;
}
</style>

<template>
    <div class="container">
        <div class="row ">
<!-----------------------------------------Profile Header-------------------------------------------------->
            <div class="col-md-12 mt-3  ">
                <div class="card card-wall card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header text-white" style="background-image:url('./img/bg3-2.jpg')">
                        <h3 class="widget-user-username text-right">Elizabeth Pierce</h3>
                        <h5 class="widget-user-desc text-right">Student</h5>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle" src="img/rocket.png" alt="User Avatar">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block ">
                                    <h5 class="description-header">3</h5>
                                    <span class="description-text"> <a href="#"> Courses Enrolled</a></span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">34</h5>
                                    <span class="description-text">  <a href="#">Exams </a></span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">35</h5>
                                    <span class="description-text">  <a href="#">HomeWork </a></span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
<!-----------------------------------------Profile Details-------------------------------------------------->
            <div class="col-md-12 mt-3">
                <div class="card card-wall">
        <!-----------------------------------------Buttons -------------------------------------------------->
                    <div class="card-header card-header-warning text-light p-2">
                        <ul class="nav nav-pills text-light">
                            <li class="nav-item text-light">
                                <a class="nav-link text-light" href="#activity"  data-toggle="tab">Activity</a>
                            </li>

                            <li class="nav-item text-light">
                                <a class="nav-link text-light active" href="#settings"  data-toggle="tab">Settings</a>
                            </li>
                        </ul>
                    </div><!-- /.card-header -->

                    <div class="card-body">
                        <div class="tab-content">
        <!-----------------------------------------Activity tab-------------------------------------------------->

                            <div class="tab-pane" id="activity">
                                <!-- Post -->
                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="" alt="">
                                        <span class="username">
                                            <a href="#">Jonathan Burke Jr.</a>
                                            <a href="#" class="float-right btn-tool">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </span>
                                        <span class="description">Shared publicly - 7:30 PM today</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        Lorem ipsum represents a long-held tradition for designers,
                                        typographers and the like. Some people hate it and argue for
                                        its demise, but others ignore the hate as they create awesome
                                        tools to help create filler text for everyone from bacon lovers
                                        to Charlie Sheen fans.
                                    </p>

                                    <p>
                                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                                        <span class="float-right">
                                            <a href="#" class="link-black text-sm">
                                                <i class="far fa-comments mr-1"></i> Comments (5)
                                            </a>
                                        </span>
                                    </p>

                                    <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                                </div>
                                <!-- /.post -->

                                <!-- Post -->
                                <div class="post clearfix">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="" alt="">
                                        <span class="username">
                                            <a href="#">Sarah Ross</a>
                                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                        </span>
                                        <span class="description">Sent you a message - 3 days ago</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        Lorem ipsum represents a long-held tradition for designers,
                                        typographers and the like. Some people hate it and argue for
                                        its demise, but others ignore the hate as they create awesome
                                        tools to help create filler text for everyone from bacon lovers
                                        to Charlie Sheen fans.
                                    </p>

                                    <form class="form-horizontal">
                                        <div class="input-group input-group-sm mb-0">
                                        <input class="form-control form-control-sm" placeholder="Response">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-danger">Send</button>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.post -->

                                <!-- Post -->
                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="" alt="">
                                        <span class="username">
                                            <a href="#">Adam Jones</a>
                                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                        </span>
                                        <span class="description">Posted 5 photos - 5 days ago</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <img class="img-fluid" src="" alt="">
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <img class="img-fluid mb-3" src="" alt="">
                                                    <img class="img-fluid" src="" alt="">
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-sm-6">
                                                    <img class="img-fluid mb-3" src="" alt="">
                                                    <img class="img-fluid" src="" alt="">
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <p>
                                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                                        <span class="float-right">
                                            <a href="#" class="link-black text-sm">
                                                <i class="far fa-comments mr-1"></i> Comments (5)
                                            </a>
                                        </span>
                                    </p>

                                    <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                                </div>
                                <!-- /.post -->
                            </div>
        
        <!-----------------------------------------Settings Tab-------------------------------------------------->
        
                            <div class="tab-pane active" id="settings">
                                <div class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label pb-1">First Name</label>
                                        <div class="col-sm-10">

                                            <input v-model="user.fname" type="text" name="fname"
                                                placeholder="Sherlock" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="contact" class="col-sm-2 col-form-label">Last Name</label>
                                        <div class="col-sm-10">

                                            <input v-model="user.lname" type="text" name="lname"
                                                placeholder="Holmes"
                                                class="form-control" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">

                                            <input v-model="user.email" type="text" name="email"
                                                placeholder="sherlock_holmes@gmail.com"
                                                class="form-control">
                                        </div>
                                    </div>
                                

                                    <div class="form-group row">
                                        <label for="photo" class="col-sm-2 col-form-label">Profile Picture</label>
                                        <div class="col-sm-10">
                                            <!-- <input  type="file" @change="updateProfile"  > -->
                                            <input type="file" id="file" ref="file" v-on:change="handleFileUpload()" 
                                                class="form-input" name="dp"
                                            />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input v-model="user.password" type="password" name="password" id="inputPassword"
                                                placeholder="Password" autocomplete="current-password"
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <button v-on:click="submitForm" type="submit" class="btn btn-success btn-block">Update</button>
                                    </div>

                                </div>

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
                user: {
                    fname: '',
                    lname: '',
                    email: '',
                    password : '',
                    dp: '',

                }
            }
        },
        mounted() {
            console.log('Component mounted.')
        },

        methods:{
            submitForm(){
                axios
                .post(
                    '/api/user/updateinfo', 
                    this.user,
                    {
                        headers: 
                        {
                            'Content-Type': 'Multipart/form-data'
                        }
                    }
                )
                .then( response => 
                {
                    console.log( response );
                })
            },
        },
    }
</script>