<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{asset('img/favicon/5.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script> window.laravel = { csrfToken: '{{ csrf_token() }}' } </script>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    <!-- Fonts and icons     -->
    <link href="{{('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons')}}" rel="stylesheet" type="text/css"/>
    <link href="{{('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}" rel="stylesheet" >
    <link href="{{asset('css/fonts/pe-icon-7-stroke.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" >
    <link href="{{('https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic')}}" rel="stylesheet" type="text/css">

    <!-- CSS Files -->
    <link href="{{asset('css/material-kit.min.css?v=2.0.7')}}" rel="stylesheet" />
    <link href="{{('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('device-mockups/device-mockups.min.css')}}" rel="stylesheet" >
    <link href="{{asset('css/new-age/landing-page.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    <style>
      .separator {
        color: #c5a47e;
        margin: 0 auto 20px;
        max-width: 240px;
        text-align: center;
        position: relative;
      }
      .separator:before, .separator:after {
        display: block;
        width: 40%;
        content: " ";
        margin-top: 10px;
        border: 1px solid #c5a47e;
      }
      .separator:before {
        float: left;
      }
      .separator:after {
        float: right;
      }

      .separator-danger {
        color: #e78b90;
      }
      .separator-danger:before, .separator-danger:after {
        border-color: #e78b90;
      }
      .filter .separator {
        color: #FFFFFF;
      }
      .filter .separator:before, .filter .separator:after {
        border-color: #FFFFFF;
      }
      .section-header .separator {
        color: #fff;
        margin: 30px auto;
      }
      .line-separator:before, .line-separator:after {
        border-color: white;
      }

      @media screen and (min-width: 0px) and (max-width: 720px) {
        .mobile-hide{ display: none !important; } 
        .mobile-view{ display:flexbox !important; }
      }
      
      @media screen and (min-width: 720px){
        .mobile-view{ display: none !important;}
      }


      .blockquote {
        margin-bottom: 1rem;
        font-size: 1.25rem;
      }

      .blockquote-footer {
        display: block;
        font-size: 80%;
        color: #6c757d;
      }

      .blockquote-footer::before {
        content: "\2014 \00A0";
      }
      .blockquote {
        padding: 10px 20px;
        margin: 0 0 20px;
        border-right: 5px solid #eee !important;
        border-left: 0px !important;
      }

      .blockquote p {
        font-size: 1.063rem;
        font-style: italic;
      }

      .blockquote small {
        display: block;
        font-size: 80%;
        line-height: 1.42857143;
        color: #777;
      }

      .fontOne{
          font-size: 1rem;
        }

      #progressBar {
        position: relative;
        width: 100%;
        height: 5px;
        background-color: #ddd;
      }

      #barStatus1 {
        position: absolute;
        width: 0%;
        height: 100%;
        background-color: #4CAF50;
      }
      #barStatus2 {
        position: absolute;
        width: 0%;
        height: 100%;
        background-color: #F44336;
      }
      
      
      .footer-aa:hover{
        color: #ffffff;
      }
      .footer-aa:active {
        color: #ffffff;
      }
      .footer-head {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        text-align: center;
      }
    </style>  
</head>
<body class="landing-page sidebar-collapse bg-light">
    <!-- Body -->
  <div id="app">
    <main>
        @yield('content')
    </main>
    <!-- Body -->  
  </div>
    
    <!--  Scripts -->
        <!--   Core JS Files   -->
        <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/core/popper.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/core/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('owlcarousel/owl.carousel.js')}}"></script>
        <script src="{{ asset('js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/plugins/moment.min.js')}}"></script>
        <script src="{{('https://cdn.jsdelivr.net/npm/sweetalert2@10')}}"></script>
        <script src="{{ asset('js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/material-kit.min.js?v=2.0.7')}}" type="text/javascript"></script>

        <!-- Vanilla Javascript -->
        <script>
          $(document).ready(function(){
            $('.loop1').owlCarousel({
                center:false,
                loop:true,
                margin:10,
                autoplay:true,
                autoplayTimeout:1000,
                autoplayHoverPause:true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:3,
                        nav:false
                    },
                    1000:{
                        items:5,
                        nav:true,
                        loop:true
                    }
                }
            });
            $('.loop2').owlCarousel({
                center:true,
                loop:true,
                autoplay:true,
                margin:10,
                autoplayTimeout:3500,
                autoplayHoverPause:true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:2,
                        nav:false
                    },
                    1000:{
                        items:2,
                        nav:true,
                        loop:true
                    }
                }
            });
          });
          function detectScreen(x){
            if (x == 1){
              if (( window.innerWidth <= 700 ) || ( window.innerHeight <= 600 )){
                var screenSize = 'mobile';
                //return document.getElementById('studentReg').style.display='block';
                window.location.href = '/student_registration';
              }
              else{
                //var screenSize = 'notMobile';
                //return window.location.href = 'http://www.google.com';
    
                var studentRegModal = document.getElementById('studentReg');
                //console.log(studentRegModal.dataset.target);
                studentRegModal.dataset.target = "#studentRegModal";
                //console.log(studentRegModal.dataset.target);
              }
            }
            else if (x == 2){
              if (( window.innerWidth <= 800 ) || ( window.innerHeight <= 600 )){
                //var screenSize = 'mobile';
                //return document.getElementById('studentReg').style.display='block';
                window.location.href = '/tutor_registration';
              }
              else{
                //var screenSize = 'notMobile';
                //return window.location.href = 'http://www.google.com';
                var studentRegModal = document.getElementById('tutorReg');
                console.log(studentRegModal.dataset.target);
                studentRegModal.dataset.target = "#tutorRegModal";
                console.log(studentRegModal.dataset.target);
              }
            }
          }
    
          function scrollToCover() {
            if ($('.section-cover').length != 0) {
              $("html, body").animate({
                scrollTop: $('.section-cover').offset().top
              }, 1000);
            }
          }
    
          function scrollToWhoAreWe() {
            if ($('.section-whoAreWe').length != 0) {
              $("html, body").animate({
                scrollTop: $('.section-whoAreWe').offset().top
              }, 1000);
            }
          }
    
          function scrollToFeatures() {
            if ($('.section-feature').length != 0) {
              $("html, body").animate({
                scrollTop: $('.section-feature').offset().top
              }, 1000);
            }
          }
          
          function scrollToContactUs() {
            if ($('.section-ContactUs').length != 0) {
              $("html, body").animate({
                scrollTop: $('.section-ContactUs').offset().top
              }, 1000);
            }
          }
          
        </script>
    <!-- /Scripts -->
</body>
</html>
