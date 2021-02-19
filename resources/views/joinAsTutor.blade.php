@extends('layouts.appTutor')

@section('content')
  <!--- Cover --->
  <div class="page-header header-filter purple-filter" data-parallax="true" 
  style="background-image: url({{ asset('img/bg8.jpg')}}); transform: translate3d(0px, 0px, 0px);">
    <div class="container">
      <div class="row ">
          <div class="col-md-5 text-center">
              <div class="brand mobile-view">
                  <h3 class="">{{ __('Free Registrations Now Open')}}</h3>
                  <div class="separator line-separator text-white  pb-0 pt-0">♦</div>
              </div>
              <div class="">
                <a href="#" target="" class="btn btn-primary btn-lg text-left" rel="nofollow" 
                style="min-width: 293.11px;">
                    <i class="fa fa-hashtag"></i>&nbsp {{ __('StudentCast Forum')}}
                </a>
                <a href="#" target="_blank" class="btn btn-warning btn-lg text-left text-dark" rel="nofollow" 
                style="min-width: 293.11px;">
                    <i class="fa fa-graduation-cap"></i>&nbsp {{ __('Tutor Panel')}}
                </a>
                
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 text-right mobile-hide" >
            <h1 class="title text-right">{{ __('Free Registrations Now Open')}}</h1>
          </div>
      </div>
    </div>
  </div>
  <!--- Cover --->

  <!--- Body  --->
  <div class="main main-raised border border-primary">
    <div class="container-fluid">

      <!---   Section 01  Features --->
      <div class="pt-1 section-feature" id="featureSection">
        <div class="text-center">
          
          <!-- Heaing -->
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
            <h1 class="title">{{ __('What do you get?')}}</h1>
            <h5 class="description">
              {{ __("This is the paragraph where you can write more details about your product. 
              Keep you user engaged by providing meaningful information. 
              Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. 
              Add a button if you want the user to see more.") }}
            </h5>
            </div>
          </div>
          <div class="features">

            <!-- Row 01 -->
            <div class="row "> 
              <div class="col-md-4">
                <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">chat</i>
                </div>
                <h4 class="info-title">StudentCast</h4>
                <p>A discussion forum that connects tutors and students together. All 
                  discussions have been categorized under subjects where tutors will
                  be notified of their respective subjects.
                </p>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title">Virtual Learning Environment</h4>
                <p>
                  A user friendly environment with unrealistic facilities to satisfy 
                  both the students and tutors, to function all your everyday needs.
                </p>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">people_outline</i>
                </div>
                <h4 class="info-title">Free Registrations</h4>
                <p>
                  All tutors and students can register for free. Use this opportunity 
                  to explore the interface and feel the experience of this masterpiece.
                </p>
                </div>
              </div>
            </div>

            <!-- Row Two -->
            <div class="row bg-dark"> 
              <div class="col-md-4">
                <div class="info">
                <div class="icon icon-warning">
                  <i class="material-icons">menu_book</i>
                </div>
                <h4 class="info-title text-light">Create Your Courses</h4>
                <p>You have the ability to create any course material by choosing a set of lessons and examinations 
                  the way as you wish to have it.
                </p>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="info">
                <div class="icon icon-warning">
                  <i class="material-icons">task</i>
                </div>
                <h4 class="info-title text-light">Create Your Assessments</h4>
                <p>
                  You can create your examinations, quizes or assessments for students using the Exam Builder in our system
                  or you could upload your examination using a format by downloading our CSV file.
                </p>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="info">
                <div class="icon icon-warning">
                  <i class="material-icons">menu_book</i>
                </div>
                <h4 class="info-title text-light">Create your Lessons</h4>
                <p>
                  With this module, you can easily create your own lesson using the lesson builder or 
                  you could upload your lesson contents supported in, MP4, AVI, MOV, GIF, JPEG, JPG, PNG, PDF, DOCX, PPTX.
                </p>
                </div>
              </div>
            </div>

            <!-- Row Three -->
            <div class="row"> 
              <div class="col-md-4">
                <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">monetization_on</i>
                </div>
                <h4 class="info-title">Payment Module</h4>
                <p>
                  Your payments are made easy using the online payment module called "Payhere.lk", a subsidiary of 
                  Sampath Bank PVT. LTD. The payments will reach to our system and will then be credited to your account 
                  within 7 working days.
                </p>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="info">
                <div class="icon icon-rose">
                  <i class="material-icons">task</i>
                </div>
                <h4 class="info-title">Manage Your Tasks</h4>
                <p>
                  Students need to engage in your course material frequently. You can do that by using our
                  task manager to create tasks and assignments for students to perform and submit when they are 
                  completed.
                </p>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">request_quote</i>
                </div>
                <h4 class="info-title">View Reports</h4>
                <p>
                  Create reports on your students progress, view your payment history and determin your growth 
                  rate with just a click.
                </p>
                </div>
              </div>
              
            </div>
          </div>
          </div>
        </div>
      <!---   /Section 01  Features --->
    </div>

    <!---   Section 02  PayAsYouGo --->
    <div class="section section-PayAsYouGo" id="PayAsYouGo">
      <div class="text-center">
        <!---------- Description Plan ----------->
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
          <h1 class="title">Pricing</h1>
          <h5 class="description">
            This is the paragraph where you can write more details about 
            your product. Keep you user engaged by providing meaningful information.
            Remember that by this time, the user is curious, otherwise he wouldn't 
            scroll to get here. Add a button if you want the user to see more.
          </h5> <br>
          </div>
        </div>
        <!---------- Description Plan ----------->
        <!---------- Starter Plan ----------->
        <div class="container-fluid row col-md-6 mx-1 mx-auto">
          <div class="card border border-danger">
            <div class="card-header card-header-danger py-2">
              <h3 class="card-title">Free Plan</h3>
              <h4 class="category">Students: Unlimited</h4>
            </div>
            <div class="card-body">
              <p>
                {{ __('All tutors will recieve 14 days free, to use the system without selecting a subscription 
                package with unlimited students. Tutors will be restricted with the following options.')}}
              </p>
              <h5>
                Storage: 500 MB
                <br><hr class="bg-danger">
                
                No Subdomain
                <br><hr class="bg-danger">
                            
                Staff Accounts: 2
                <br><hr class="bg-danger">
                            
                Transaction Fee: 10 %
                <br><hr class="bg-danger">

                Free for 14 days
                <br>
              </h5>
              <a href="{{ url(app()->getLocale() . '/free_plan')}}" class="btn btn-white border border-danger text-danger text-capitalize">
                <h5 class="p-0 m-0">Proceed with Free Plan</h5>
              </a>
            </div>
          </div>
        </div>
        <!---------- Starter Plan ----------->

        <div class="features">
          <div class="row mx-1">
            <!---------- Pay As You Go ----------->		  
            <div class="col-lg-3">
              <div class="card border border-warning">
                <div class="card-header card-header-warning">
                  <h3 class="card-title">Pay As You Go</h3>
                  <h4 class="category ">Students: Unlimited</h4>
                </div>
                <div class="card-body">
                  <h5>
                    With EV you only pay for what use, helping your 
                    career remain agile, responsive and always 
                    able to meet scale demands.
                    <br><hr class="bg-warning">
                    
                    Pay-as-you-go pricing allows you to easily adapt to 
                    changing needs without overcommitting budgets 
                    and improving your responsiveness to changes.
                    <br><hr class="bg-warning">
                    
                  </h5>
                  <a href="{{ url(app()->getLocale() . '/pay-as-you-go') }}" class="btn btn-white border border-warning text-dark  text-capitalize">
                    <h5 class="p-0 m-0 font-weight-bold ">Read More</h5>
                  </a>
                </div>
              </div>
            </div>
            <!---------- Pay As You Go ----------->
            <!---------- Beginner ----------->
            <div class="col-lg-3">
              <div class="card border border-primary">
                <div class="card-header card-header-primary">
                  <h3 class="card-title">Beginners Path</h3>
                  <h4 class="category">Students: Up to 25</h4>
                </div>
                <div class="card-body">
                  <h5>
                    Storage: 5 GB
                    <br><hr class="bg-primary">
                    
                    Personalised Subdomain
                    <br><hr class="bg-primary">
                                
                    Fast & Easy Exam & Lesson Module
                    <br><hr class="bg-primary">
                                
                    Staff Accounts: 2
                    <br><hr class="bg-primary">
                                
                    Transaction Fee: Free
                    <br><hr class="bg-primary">
                    
                    LKR 5,000 /mo
                    <br>
                  </h5>
                  <a href="#" class="btn btn-white border border-primary text-primary text-capitalize">
                    <h5 class="p-0 m-0">Go with Starter Plan</h5>
                  </a>
                </div>
              </div>
            </div>
            <!---------- Beginner ----------->
            <!---------- Professionals ----------->
            <div class="col-lg-3">
              <div class="card border border-info">
                <div class="card-header card-header-info">
                  <h3 class="card-title">Professionals Path</h3>
                  <h4 class="category">Students: Up to 250</h4>
                </div>
                <div class="card-body">
                  <h5>
                    Storage: 10 GB
                    <br><hr class="bg-info">
                    
                    Personalised Subdomain
                    <br><hr class="bg-info">
                                
                    Fast & Easy Exam & Lesson Module
                    <br><hr class="bg-info">
                                
                    Staff Accounts: 5
                    <br><hr class="bg-info">
                                
                    Transaction Fee: 05 %
                    <br><hr class="bg-info">
                    
                    LKR 10,000 /mo
                    <br>
                  </h5>
                  <a href="#" class="btn btn-white border border-info text-info text-capitalize">
                    <h5 class="p-0 m-0">Go with Starter Plan</h5>
                  </a>
                </div>
              </div>
            </div>
            <!---------- Professionals ----------->
            <!---------- Masters Path ----------->
            <div class="col-lg-3">
              <div class="card border border-success">
                <div class="card-header card-header-success">
                  <h3 class="card-title">Masters Path</h3>
                  <h4 class="category">Students: Unlimited</h4>
                </div>
                <div class="card-body">
                  <h5>
                    Storage: 15 GB
                    <br><hr class="bg-info">
                    
                    Personalised Subdomain
                    <br><hr class="bg-info">
                                
                    Fast & Easy Exam & Lesson Module
                    <br><hr class="bg-info">
                                
                    Staff Accounts: 10
                    <br><hr class="bg-info">
                                
                    Transaction Fee: 05 %
                    <br><hr class="bg-info">
                    
                    LKR 20,000 /mo
                    <br>
                  </h5>
                  <a href="#" class="btn btn-white border border-success text-success text-capitalize">
                    <h5 class="p-0 m-0">Go with Starter Plan</h5>
                  </a>
                </div>
              </div>
            </div>
            <!---------- Masters Path ----------->
          </div>
        </div>
      </div>
    </div>
    <!---   /Section 02  PayAsYouGo --->

  </div>
  <!--- Body  --->

@endsection