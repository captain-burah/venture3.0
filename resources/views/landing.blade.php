@extends('layouts.appLanding')

@section('content')
  <!---   Cover   --->
  <!-- style="background-image: url({{asset('img/bg15.jpg')}}); transform: translate3d(0px, 0px, 0px);" -->
  <div class="page-header bg-white " data-parallax="true" 
   id="coverSection">
    <div class="row container text-center mx-auto my-auto d-flex align-content-center flex-wrap" >
      <div class="col-md-12">
        <h1 class="cover-heading mx-auto mb-5 mt-0 text-dark animate__animated animate__fadeInUp animate__delay-1s"
        style="font-size: 4.5em">
        {{ __('Enlighten Venture')}}
        </h1>
      </div>
      <div class="col-md-12 mx-auto animate__animated animate__fadeInDown animate__delay-2s animate__fast	800ms">
        <a href="{{ url('/en/home')}}" class="btn btn-success btn-lg text-light" style="min-width: 212.91px;">
          <i class="fa fa-graduation-cap"></i>
          &nbsp {{ __('English')}}
        </a>
        <a href="{{ url('/sn/home')}}" target="" class="btn btn-warning btn-lg text-dark" rel="nofollow" style="min-width: 212.91px;">
            <i class="fa fa-university"></i>
            &nbsp {{ __('සිංහල')}}
        </a>
      </div>
      <div class="footer-head mb-5">
        <p class="p-4 text-light small animate__animated animate__fadeInUp animate__delay-2s animate__fast	800ms">
          {{ __('Brought to you by ')}} 
          &nbsp
          <span class="badge badge badge-light text-dark">
            <i class="fa fa-hashtag text-primary"></i>
            Captain_Burah
          </span>
        </p>
      </div>
    </div>
    
  </div>
  <!---   Cover   --->

@endsection