<template>
    <div>
        <nav class="main-header elevation-2 navbar sideMenu navbar-expand navbar-bg navbar-light
        navbar-white border-bottom border-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav mr-auto mb-0">
                <li class="nav-item mt-1">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                    <i class="fas fa-bars"></i>&nbsp; &nbsp; Administrator</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Profile Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fas fa-user-circle"></i> Profile
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: -58px;">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-sm">{{username}}</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-sm">My Profile</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                            <a href="javascript:void(0)" class="dropdown-item" 
                            onclick="event.preventDefault(); document.getElementById('logout-form-nav').submit();">
                                <i class="nav-icon fa fa-power-off red"></i>
                                <span> Logout</span>
                            </a>
                            <form id="logout-form-nav" :action="logout_user" method="POST" style="display: none;">
                                <input type="hidden" name="_token" :value="csrf">
                                @csrf
                            </form>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
    export default {
        props: ['user', 'logout_user', 'username' ],
        components: {  },
        data: function(){
            //const lang = localStorage.getItem('lang') || 'en';
            return {
            //lang: lang,
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        },
        mounted() {
            console.log('Footer mounted.')
        }
    }
</script>
