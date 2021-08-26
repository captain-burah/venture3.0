<template>
<div>
    <!--  Nav  -->
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" 
    color-on-scroll="100" id="sectionsNav">
        <div class="container">
          <div class="navbar-translate my-auto">
              <router-link to="/home" class="navbar-brand">
                <img src="/img/favicon/5.png" alt="logo" style="height: 32px; width: 32px;" class="mx-1">
                Enlighten Venture 
              </router-link>
              <button class="navbar-toggler" type="button" data-toggle="collapse" 
              aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Menu</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
              </button>
          </div>
          <div class="collapse navbar-collapse">
            <!---   Navbar Left   --->
            <ul class="navbar-nav mx-auto text-center">
                <!--- Register --->
                <li class="nav-item mx-4">
                    <a class="nav-link" href="javascript:void(0)" onclick="scrollToFeatures()">
                        Register
                    </a>
                </li>
                <!------ Register ------>
                
                <!------ About Us ------>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="#aboutUs">
                        About
                    </a>
                </li>
                <!------ About Us ------>              
            </ul>
            <!---   Navbar Left   --->


            <!---   Navbar Right   --->
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link p-3" rel="tooltip" title="" data-placement="bottom" 
                href="#" target="_blank" 
                data-original-title="Follow us on Twitter">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-3" rel="tooltip" title="" data-placement="bottom" 
                href="#" target="_blank" 
                data-original-title="Like us on Facebook">
                  <i class="fa fa-facebook-square"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-3" rel="tooltip" title="" data-placement="bottom" 
                href="#" target="_blank" 
                data-original-title="Follow us on Instagram">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
              <!--
              <li class="nav-item">
                <a class="nav-link p-3" rel="tooltip" title="" data-placement="bottom" 
                href="#"
                data-original-title="Call Us On">
                  <i class="fa fa-phone"></i>{{ __(' +94 77 637 1444')}}
                </a>
              </li>-->
            </ul>
            <!---   Navbar Right   --->
          </div>
        </div>
    </nav>
    <!--  Nav  -->
</div>
</template>