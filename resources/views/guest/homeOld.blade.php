@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            
    <!---   Section 03  Contact Us --->
        <div class="section section-whoAreWe" style="background-image: url({{ asset('img/bg19.jpg')}}); 
        background-size: cover; background-position: top center; min-height: 700px;"  id="WhoAreWe">
          <div class="container">
            <h1 class="title text-center">The Team</h1>
            <!--- Khaazen --->
            <div class="row">
              <div class="col-md-4 mx-auto">
                <div class="card bg-dark image-preview mx-auto" style="width: 20rem;">
                  <img class="image-preview__image card-img-top img-raised rounded-circle img-fluid mt-3" 
                  src="{{ asset('img/faces/tkb.jpeg')}}" rel="nofollow" alt="Card image cap"
                  style="">
                  <div class="card-header card-header-info">
                    <h4 class="text-center description p-0 m-0 text-white">Tuan Burah</h4>
                  </div>
                  <div class="card-body">
                    <h5 class="mt-0 description text-center">CEO, Developer & Founder of Enlighten Venture</h5>
                    <p class="description text-center">
                      Member of British Computer Society Royale Charter (MBCS)<br>
                      Matrix Institute of Information Technology (MIIT)
                    </p>
                    <div class="row col-md-8 mx-auto">
                      <div class="col-md-4 mx-auto">
                        <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </div>
                      <div class="col-md-4 mx-auto">
                        <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </div>
                      <div class="col-md-4 mx-auto">
                        <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--- Khaazen --->
            <div class="row ">
              <!--- Yoshell --->
              <div class="col-md-4 my-auto mx-auto">
                <div class="card bg-dark image-preview mx-auto" style="width: 20rem;">
                  <img class="image-preview__image card-img-top img-raised rounded-circle img-fluid mt-3" 
                  src="{{ asset('img/faces/dave.jpg')}}" rel="nofollow" alt="Card image cap"
                  style="">
                  <div class="card-header card-header-info">
                    <h4 class="text-center description p-0 m-0 text-white">Yoshell Delile</h4>
                  </div>
                  <div class="card-body">
                    <h5 class="mt-0 description text-center">Founder of Enlighten Venture</h5>
                    <p class="description text-center">
                      B.Sc. in Agriculture Resource Management & Technology <br> University of Ruhuna Faculty of Agriculture (URFA)
                    </p>
                    <div class="row col-md-8 mx-auto">
                      <div class="col-md-4 mx-auto">
                        <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </div>
                      <div class="col-md-4 mx-auto">
                        <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </div>
                      <div class="col-md-4 mx-auto">
                        <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--- Yoshell --->
              <!--- Hansaka --->
              <div class="col-md-4 my-auto mx-auto">
                <div class="card bg-dark image-preview mx-auto" style="width: 20rem;">
                  <img class="image-preview__image card-img-top img-raised rounded-circle img-fluid mt-3" 
                  src="{{ asset('img/faces/marc.jpg')}}" rel="nofollow" alt="Card image cap"
                  style="">
                  <div class="card-header card-header-info" style="width: 10rem;">
                    <h4 class="text-center description p-0 m-0 text-white">Hansaka Chathurangana</h4>
                  </div>
                  <div class="card-body">
                    <h5 class="mt-0 description text-center">Founder of Enlighten Venture</h5>
                    <p class="description text-center">
                      Chartered Accountant Audit <br> Institute of Chatered Accountants of Sri Lanka
                    </p>
                    <div class="row col-md-8 mx-auto">
                      <div class="col-md-4 mx-auto">
                        <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </div>
                      <div class="col-md-4 mx-auto">
                        <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </div>
                      <div class="col-md-4 mx-auto">
                        <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--- Hansaka --->
              <!--- Aatiqa --->
              <div class="col-md-4 my-auto mx-auto">
                <div class="card bg-dark image-preview mx-auto" style="width: 20rem;">
                  
                  <img class="image-preview__image card-img-top img-raised rounded-circle img-fluid mt-3" 
                  src="{{ asset('img/faces/avatar.jpg')}}" rel="nofollow" alt="Card image cap"
                  style="">
                  <div class="card-header card-header-rose">
                    <h4 class="text-center description p-0 m-0 text-white">Aatiqa Burah</h4>
                  </div>
                  <div class="card-body">
                    <h5 class="mt-0 description text-center">Designer & Founder of Enlighten Venture</h5>
                    <p class="description text-center">
                      Ba. in Information Technology <br> University of Colombo School of Computing (UCSC)
                    </p>
                    <div class="row col-md-8 mx-auto">
                      <div class="col-md-4 mx-auto">
                        <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </div>
                      <div class="col-md-4 mx-auto">
                        <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </div>
                      <div class="col-md-4 mx-auto">
                        <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--- Aatiqa --->
            </div>            
          </div>
        </div>
    <!---   /Section 03  Contact Us --->
        </div>
    </div>
</div>
@endsection
