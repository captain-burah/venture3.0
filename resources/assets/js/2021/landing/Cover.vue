<template>
    <div>
          <!---   Cover   --->
  <div class="page-header header-filter purple-filter" data-parallax="true" 
  style="background-image: url('/img/bg21.jpg'); transform: translate3d(0px, 0px, 0px);">
    <div class="container section-Cover" id="featureCover">
      <div class="row">
            <div class="col-md-5 my-auto text-center">
                <div class="brand mobile-view ">
                    <p class="text-white fontClass" style="font-size: 3.0em; line-height: 1;">
                        <span class="text-warning">Education</span> for everyone</p>
                    <div class="separator line-separator text-white  pb-0 pt-0">♦</div>
                </div>
                <div class="">
                    <a href="#login" class="btn btn-white btn-lg text-dark text-left" 
                    style="min-width: 293.11px;">
                    <i class="fa fa-user"></i>&nbsp; Student Login
                    </a>
                    <a href="#login/tutor" target="" class="btn btn-white btn-lg text-dark text-left" rel="nofollow" 
                    style="min-width: 293.11px;">
                        <i class="fa fa-graduation-cap"></i>&nbsp; Tutor Login
                    </a>
                    <router-link to="/academy"  class="btn btn-warning btn-lg text-dark text-left" rel="nofollow" 
                    style="min-width: 293.11px;">
                        <i class="fa fa-university"></i>&nbsp; Academy
                    </router-link>
                </div>
            </div>
          
            <div class="col-md-7 text-right mobile-hide mr-auto ml-auto" >
                <p class="text-white fontClass" style="font-size: 4.5em; line-height: 1;">
                    <span class="text-warning">Education</span> for everyone
                </p>
                <h4 class="desciption">A centralized online environement to exchange your study materials</h4>
            </div>
          </div>
      </div>
    </div>
  </div>
</template>