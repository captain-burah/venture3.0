@extends('layouts.appTutor')

@section('content')
  <!--- Cover --->
  <div class="page-header header-filter purple-filter" data-parallax="true" 
  style="background-image: url({{ asset('img/bg8.jpg')}}); transform: translate3d(0px, 0px, 0px);">
    <div class="container">
      <div class="row mx-auto">

        <div class="col-md-6 text-center mobile-hide" >
            <h1 class="title text-center">{{ __('Pay-As-You-Go?')}}</h1>
        </div>

        <div class=" col-md-6 text-center my-auto" >
          <div class="brand mobile-view">
            <h3 class="">{{ __('Pay-As-You-Go?')}}</h3>
            <div class="separator line-separator text-white  pb-0 pt-0">♦</div>
          </div>
          <div class="card ml-auto" style="width: 22rem;">
            <div class="card-body">
              <div class="brand mobile-view">
                  <a href="{{ url(app()->getLocale() . '/pay_as_you_go') }}" 
                    class="btn btn-primary btn-lg text-left " 
                    style="min-width: 293.11px;">
                      <i class="fa fa-user-plus"></i>&nbsp {{ __('Register Now!')}}
                  </a>
              </div>
              <div class="my-auto py-auto">
                <a href="{{ url(app()->getLocale() . '/createEstimate') }}" 
                  class="btn btn-warning btn-lg text-left text-dark" 
                style="min-width: 293.11px;">
                <i class="fa fa-calculator"></i>&nbsp {{ __('Create Estimate')}}
                </a>
            </div>
            <div class="my-auto py-auto mobile-hide">
              <a href="{{ url(app()->getLocale() . '/pay_as_you_go') }}" 
                class="btn btn-primary btn-lg text-left " 
              style="min-width: 293.11px;">
                <i class="fa fa-user-plus"></i>&nbsp {{ __('Register Now!')}}
              </a>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!--- Cover --->

  <!--- Body  --->
  <div class="main main-raised border border-primary">
    <div class="container-fluid">

      <!---   Section 01  Features --->
      <div class="pt-1 section-feature pb-2" id="featureSection">
        <div class="text-center">

          <!-- Heaing -->
          <div class="row text-justify">
            <div class="col-md-10 ml-auto mr-auto pt-3">
            <h5 class="">
              {{ __("With EV you only pay for what you use, helping you or your organization to remain agile,
               responsive and always able to meet scale demands. Pay-as-you-go pricing allows you to easily adapt to changing business needs without overcommitting 
                budgets and improving your responsiveness to changes. With a pay as you go model, you can adapt your 
                business depending on need and not on forecasts, reducing the risk or overprovisioning or missing capacity.")}}</h5>
            <h5>{{ __('By paying for services on a scalable basis, you can redirect your focus to innovation and invention, 
                reducing procurement complexity and enabling your career to be fully elastic.')}}</h5>
                <h5 class=""> {{('The advantage of using the Pay-As-You-Go subcription plan compared to the rest 
                is because it provides an in-built Service Monitoring System that would study your progress once a day 
                in order to provide reliable and flexible updgrading facilities to your notice.')}}</h5>
            </div>
          </div>

          <div class="features">
            <!-- Row Two -->
            <div class="row bg-dark"> 
              <div class="col-md-4">
                <div class="info">
                <div class="icon icon-warning">
                  <i class="material-icons">money_off</i>
                </div>
                <h4 class="info-title text-light">Free 14 Day Trial</h4>
                <p>
                    The system is free to use for the first 14 days after registration in respective to the features provided. 
                    After the 14 days are completed you will need to pay a monthly value of <span class="text-warning font-weight-bold">
                    LKR 2,500/= </span> starting from the day you make the payment, to continue using the system.
                </p>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="info">
                <div class="icon icon-warning">
                  <i class="material-icons">backup</i>
                </div>
                <h4 class="info-title text-light">Free 500 MB Cloud Storage</h4>
                <p>
                  This limit of storage is provided just for you to learn and understand the functionalities of EV.
                  In order to use more storage you will need to purchase an additional storage slot, which would then be added to your 
                  monthly checkout. 
                </p>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="info">
                <div class="icon icon-warning">
                  <i class="material-icons">point_of_sale</i>
                </div>
                <h4 class="info-title text-light">10% Transaction Fee</h4>
                <p>
                  This rate of transaction fee has been calibrated to avoid unnecessary fraudulent accounts, as this would be the only means of 
                  payment a free account holder would need to process, in order to use the system.
                </p>
                </div>
              </div>
            </div>
            <hr class="m-0 p-0 bg-warning text-light">

            <!-- Row Three -->
            <div class="row bg-dark"> 
                <div class="col-md-4">
                  <div class="info">
                  <div class="icon icon-warning">
                    <i class="material-icons">people_outline</i>
                  </div>
                  <h4 class="info-title text-light">Unlimited Students</h4>
                  <p>
                      There is no limit for your student enrollments as this gives you the opportunity to grow.
                  </p>
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="info">
                  <div class="icon icon-warning">
                    <i class="material-icons">web_asset_off</i>
                  </div>
                  <h4 class="info-title text-light">No Personalised Subdomain Inititally</h4>
                  <p>
                    A personalised subdomain would not be granted to a free-tier account holder. To grant access to a personalised subdomain 
                    the tutor will need to activate it via the settings menu with affect to your monthly checkout payments.
                  </p>
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="info">
                  <div class="icon icon-warning">
                    <i class="material-icons">manage_accounts</i>
                  </div>
                  <h4 class="info-title text-light">01 Staff Account</h4>
                  <p>
                    A tutor in a free-tier account has the ability to create a single staff account with custom privileges.
                     
                  </p>
                  </div>
                </div>
              </div>

          </div>
        </div>
      </div>
      <!---   /Section 01  Features --->



      <!---   Section 02  Estimation --->
      <div class="pt-1 section-feature pb-2" id="featureSection">
        <div class="text-center">
          <div class="row text-center">
            <div class="col-md-10 ml-auto mr-auto pt-3">
              
            </div>
          </div>
        </div>
      </div>



      <!---   Section 02  Table --->
      <div id="">
        <payg-info></payg-info>
      </div>
      
      <!---   /Section 01  Features --->

    </div>
  </div>
  <!--- Body  --->

@endsection