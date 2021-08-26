<?php $__env->startSection('content'); ?>
  <!---   Cover   --->
  <div class="page-header header-filter purple-filter" data-parallax="true" 
  style="background-image: url(<?php echo e(asset('img/bg21.jpg')); ?>); transform: translate3d(0px, 0px, 0px);">
    <div class="container section-Cover" id="featureCover">
      <div class="row">
          <div class="col-md-5 my-auto text-center">
              <div class="brand mobile-view ">
                  <p class="text-white fontClass" style="font-size: 3.0em; line-height: 1;"><span class="text-warning"><?php echo e(__('Education')); ?></span><?php echo e(__(' for everyone')); ?></p>
                  <div class="separator line-separator text-white  pb-0 pt-0">♦</div>
              </div>
              <div class="">
                <a href="<?php echo e(route('login', app()->getLocale())); ?>" class="btn btn-white btn-lg text-dark text-left" 
                  style="min-width: 293.11px;">
                  <i class="fa fa-user"></i>&nbsp <?php echo e(__(' Student Login')); ?>

                </a>
                <a href="<?php echo e(url(app()->getLocale() . '/login/tutor')); ?>" target="" class="btn btn-white btn-lg text-dark text-left" rel="nofollow" 
                style="min-width: 293.11px;">
                    <i class="fa fa-graduation-cap"></i>&nbsp <?php echo e(__('Tutor Login')); ?>

                </a>
                <a href="<?php echo e(url('/academy')); ?>" target="_blank" class="btn btn-warning btn-lg text-dark text-left" rel="nofollow" 
                style="min-width: 293.11px;">
                    <i class="fa fa-university"></i>&nbsp <?php echo e(__('Open Academy')); ?>

                </a>
            </div>
          </div>
          
          <div class="col-md-7 text-right mobile-hide mr-auto ml-auto" >
            <p class="text-white fontClass" style="font-size: 4.5em; line-height: 1;"><span class="text-warning"><?php echo e(__('Education')); ?></span><?php echo e(__(' for everyone')); ?></p>
            <h4 class="desciption"><?php echo e(__('A centralized online environement to exchange your study materials')); ?></h4>
              <!-- Carousel Card -->
              <!---
              <div class="card card-carousel">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" 
                data-interval="3000">
                  
                  <div class="carousel-inner">
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo e(asset('img/bg2.jpg')); ?>" alt="First slide">
                      <div class="carousel-caption d-none d-md-block">
                        <h4>
                          <i class="material-icons">location_on</i>
                          Yellowstone National Park, United States
                        </h4>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo e(asset('img/bg3.jpg')); ?>" alt="Second slide">
                      <div class="carousel-caption d-none d-md-block">
                        <h4>
                          <i class="material-icons">location_on</i>
                          Somewhere Beyond, United States
                        </h4>
                      </div>
                    </div>
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="<?php echo e(asset('img/bg.jpg')); ?>" alt="Third slide">
                      <div class="carousel-caption d-none d-md-block">
                        <h4>
                          <i class="material-icons">location_on</i>
                          Yellowstone National Park, United States
                        </h4>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" 
                  data-slide="prev">
                    <i class="material-icons">keyboard_arrow_left</i>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" 
                  data-slide="next">
                    <i class="material-icons">keyboard_arrow_right</i>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              --->
              <!-- End Carousel Card -->
            </div>
          </div>
      </div>
    </div>
  </div>
  <!---   Cover   --->
  
  <!---------- Body ----------->
  <div class="main main-raised" style="overflow: hidden;">
    <div class="container mx-0">
      <!---   Section   Features ---> 
      <div class="section-feature" id="featureSection">
        <div class="text-center">
          <div class="features py-5">
            <div class="row col-md-12 mx-auto px-0 mx-0">
              <div class="col-md-6 mx-auto text-right my-auto">
                <h1 class="fontClass fontH text-dark" style="font-size: 4.0em;"><?php echo e(__('Join Now Free!')); ?></h1>
                <h1 class="fontClass fontH text-secondary mt-0" style="font-size: 3.0em;">& be a part of the Community</h1>
                <a href="<?php echo e(route('register', app()->getLocale())); ?>" 
                  class="btn btn-white btn-lg text-dark text-center border border-warning text-capitalize" 
                  style="min-width: 200.11px;">
                  <i class="fa fa-user"></i>&nbsp <?php echo e(__(" I'm a Student")); ?>

                </a>
                <a href="<?php echo e(url(app()->getLocale() . '/tutors')); ?>" target="" 
                  class="btn btn-white btn-lg text-dark text-center border border-info text-capitalize" rel="nofollow" 
                style="min-width: 200.11px;">
                    <i class="fa fa-graduation-cap"></i>&nbsp <?php echo e(__(" I'm a Tutor")); ?>

                </a>
              </div>
              <div class="col-md-6 mx-auto text-left mt-3 my-auto">
                <div class="text-left" >
                  <img src="<?php echo e(asset('img/svg/graduation.svg')); ?>" class="rounded" style="height: 50vh; width: auto;">
                </div>
                
              </div>
            </div>
          </div>
          </div>
        </div>
      <!---   /Section   Features --->
    </div>

    <!---   Section   Specs --->
    <div class="section text-center pb-5 mb-5 pt-5 mt-0">
      <div class="features bg-white">
        <!---  First row --->
        <div class="row container col-md-10 mx-auto px-3 py-0">
          <div class="col-md-4 border-bottom border-default pt-3 pb-4">
            <p class="text-dark text-left my-0 fontClass fontH">
              <?php echo e(__('Free registrations')); ?>

            </p>
            <p class="text-left description fontClass fontP">
              <?php echo e(('for Students and Tutors to explore the system.')); ?>

            </p>
          </div>
          <div class="col-md-4 my-auto">
              <div class="text-center mobile-hide">
                <img src="<?php echo e(asset('img/svg/celebrate.svg')); ?>" class="rounded " style="height: 10vh; width: auto;">
            </div>
          </div>
          <div class="col-md-4 border-bottom border-default pt-3 pb-4">
            <p class="text-dark text-left my-0 fontClass fontH">
              <?php echo e(__('A StudentCast forum')); ?>

            </p>
            <p class="text-left description fontClass fontP">
              <?php echo e(('for Tutors & Students to connect & create open discussions.')); ?>

            </p>
          </div>
        </div>
        <!---  First row --->
        <!---  Second row --->
        <div class="row container col-md-10 mx-auto px-3 py-0">
          <div class="col-md-4 border-bottom border-default pt-3 pb-4">
            <p class="text-dark text-left my-0 fontClass fontH">
              <?php echo e(__('Academy module')); ?>

            </p>
            <p class="text-left description fontClass fontP">
              <?php echo e(('to view, display and advertise lessons/tutors.')); ?>

            </p>
          </div>
          <div class="col-md-4 my-auto">
              <div class="text-center mobile-hide">
                <img src="<?php echo e(asset('img/svg/youtube.svg')); ?>" class="rounded " style="height: 12vh; width: auto;">
            </div>
          </div>
          <div class="col-md-4 border-bottom border-default pt-3 pb-4">
            <p class="text-dark text-left my-0 fontClass fontH">
              <?php echo e(__('Upload contents')); ?>

            </p>
            <p class="text-left description fontClass fontP">
              <?php echo e(('such as xlsx, docx, pptx mp4, jpg, png, gif, pdf.')); ?>

            </p>
          </div>
        </div>
        <!---  Second row --->
        <!---  Third row --->
        <div class="row container col-md-10 mx-auto px-3 py-0">
          <div class="col-md-4 border-bottom border-default pt-3 pb-4">
            <p class="text-dark text-left my-0 fontClass fontH">
              <?php echo e(__('Unlimited cloud space')); ?>

            </p>
            <p class="text-left description fontClass fontP">
              <?php echo e(('for tutors to host their lessons.')); ?>

            </p>
          </div>
          <div class="col-md-4 my-auto">
              <div class="text-center mobile-hide">
                <img src="<?php echo e(asset('img/svg/goingUp.svg')); ?>" class="rounded " style="height: 10vh; width: auto;">
            </div>
          </div>
          <div class="col-md-4 border-bottom border-default pt-3 pb-4">
            <p class="text-dark text-left my-0 fontClass fontH">
              <?php echo e(__('Individual & group')); ?>

            </p>
            <p class="text-left description fontClass fontP">
              <?php echo e(('tutoring with efficiently calculated subscriptions.')); ?>

            </p>
          </div>
        </div>
        <!---  Third row --->
      </div>
    </div>
    <!---   /Section   Specs --->

    <!---   Section   Aims --->
    <div class="section text-center py-3">
      <div class="features bg-primary">
        <div class="row px-3 py-5 ">
          <div class="owl-carousel owl-theme owl-loaded loop2">
            <div class="item mx-2">
              <div class="info py-4 mx-auto">  
                <h2 class="text-light text-justify my-2"><?php echo e(__('Aims')); ?></h2>
                <p class="text-justify text-white">
                  Enlighten Venture aims to produce the next generation 
                  of leaders in Sri Lanka. Our mission is to provide the 
                  best all-round education environment for students & tutors in a caring, disciplined 
                  and inspiring atmosphere.
                </p>
              </div>
            </div>
            <div class="item mx-2">
              <div class="info py-4 mx-1 mx-auto"">
                <h2 class="text-light text-justify my-2"><?php echo e(__('Ethos')); ?></h2>
                <p class="text-justify text-white">
                  True to the principles of its founders, 
                  Enlighten Venture has always endeavoured to instill 
                  and nurture qualities such as respect, compassion, 
                  self-discipline, fairness, dignity, equity, honesty and integrity. 
                  As a virtual learning environment (VLE), but with users from many 
                  different communities, we believe that these virtues are 
                  valued not only by our users, but by members of all professional bodies.
                </p>
              </div>
            </div>
            <div class="item mx-2">
              <div class="info py-4 mx-1 mx-auto"">
                <h2 class="text-light text-justify my-2"><?php echo e(__('Mission')); ?></h2>
                <p class="text-white text-justify">
                  Our users should leave the VLE confident, articulate, 
                  well-balanced and able to think for themselves. 
                  They should be comfortable both in operations and in their 
                  functionality. We are ambitious and determined, 
                  yet sensitive to the needs of our users, supporting the 
                  critical and creative thinkers, who are ready to make a 
                  positive difference to their country and to the world.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!---   /Section   Aims --->
    
    <!---   Section   User friendly --->
    <div class="section text-center pb-5 pt-5 mt-5">
      <div class="features bg-white">
        <!---  First row --->
        <div class="row container col-md-10 mx-auto px-3 py-0">
          <div class="col-md-12  pt-3 pb-0 mb-0">
            <p class="text-secondary text-left my-0 fontClass fontH" style="font-size: 4.5em;">
              <?php echo e(__('Student')); ?>

            </p>
            <br>
            <p class="text-dark text-left my-0 fontClass fontH" style="font-size: 4.0em; line-height: 1;">
              <?php echo e(__('Friendly takes over bordem.')); ?>

            </p>
          </div>
        </div>
        <div class="row col-md-12 container-fluid m-0 p-0 my-auto" style="overflow: hidden;">
          <div class="text-center mx-auto">
            <p class="container col-md-12 fontClass fontP description pt-3 pb-0 my-0 mobile-view">
              <?php echo e(__('"One of the best student friendly environment in your hands"')); ?>

            </p>
          <p class="container col-md-10 text-right fontClass fontP description mobile-hide m-0 p-0 pt-5" style="position:absolute;">
            <?php echo e(__('"We give you the best student friendly environment"')); ?>

          </p>
            <img src="<?php echo e(asset('img/svg/dashboard.svg')); ?>" class="img-fluid rounded mobile-hide" style="height: auto; width: 70vw;">
            <img src="<?php echo e(asset('img/svg/dashboard.svg')); ?>" class="img-fluid rounded mobile-view" style="height: auto; width: 100vw;">
            <p class="container col-md-10 fontClass fontP description">
              <?php echo e(__('With a dedicated research program made on the')); ?>

              <span class="text-dark"><?php echo e(('psychology of learning patterns of a student')); ?></span>
              <?php echo e((', from colors, geometric shapes, graphic contents, 
              visualization, fonts, etc, we bring you our most outstanding result over the past 10 months of hard work.')); ?>

            </p>
        </div>
      </div>
        <!---  First row --->
      </div>
    </div>
    <hr class="bg-dark">
    <!---   /Section  User friendly --->
   
    <!---   Section   Pay as you go --->
    <div class="section text-center pb-5 pt-5 ">
      <div class="features bg-white">
        <!---  First row --->
        <div class="row container col-md-10 mx-auto px-3 py-0 pb-3">
          <div class="col-md-12  pt-3 pb-0 mb-0">
            <p class="text-secondary text-left my-0 fontClass fontH" style="font-size: 4.5em;">
              <?php echo e(__('Tutors')); ?>

            </p>
            <br>
            <p class="text-dark text-left my-0 fontClass fontH" style="font-size: 4.0em; line-height: 1;">
              <?php echo e(__('Save more with Pay-As-You-Go.')); ?>

            </p>
          </div>
        </div>
        <div class="row col-md-12 container-fluid m-0 p-0 my-auto" style="overflow: hidden;">
          <div class="text-center mx-auto">
            <p class="container col-md-12 fontClass fontP description pt-3 pb-0 my-0 mobile-view">
              <?php echo e(__('"A worthwhile contribution to all tutors."')); ?>

            </p>
            <p class="container col-md-10 text-right fontClass fontP description mobile-hide m-0 p-0 pt-5pb-" style="position:absolute;">
              <?php echo e(__('"A worthwhile contribution to all tutors."')); ?>

            </p>
            <img src="<?php echo e(asset('img/svg/money2.svg')); ?>" class="img-fluid rounded mobile-hide" style="height: auto; width: 60vw;">
            <img src="<?php echo e(asset('img/svg/money2.svg')); ?>" class="img-fluid rounded mobile-view" style="height: auto; width: auto;">
            <p class="container col-md-10 fontClass fontP description pt-4">
              <?php echo e(__('With EV you only pay ')); ?>

              <span class="text-dark"><?php echo e(('for what you use,')); ?></span>
              <?php echo e((' helping your career remain agile, responsive and always able to meet scale demands. 
              Pay-as-you-go pricing allows you to easily adapt to changing needs without overcommitting budgets and improving your responsiveness to changes.')); ?>

            </p>
          </div>
        </div>
        <!---  First row --->
      </div>
    </div>
    <!---   /Section  Pay as you go --->
    <hr class="bg-dark">
    <!---   Section   StudentCast --->
    <div class="section text-center pb-5 pt-5 mt-0">
      <div class="features bg-white">
        <!---  First row --->
        <div class="row container col-md-10 mx-auto px-3 py-0 pb-3">
          <div class="col-md-12  pt-3 pb-0 mb-0">
            <p class="text-secondary text-left my-0 fontClass fontH" style="font-size: 4.5em;">
              <?php echo e(__('Forum')); ?>

            </p>
            <br>
            <p class="text-dark text-left my-0 fontClass fontH" style="font-size: 4.0em; line-height: 1;">
              <?php echo e(__('Take your discussions to the StudentCast')); ?>

            </p>
          </div>
        </div>
        <div class="row col-md-12 container-fluid m-0 p-0 my-auto" style="overflow: hidden;">
          <div class="text-center mx-auto">
            <div class="container col-md-10 mx-auto">
              <p class=" fontClass fontP description pt-3 pb-0 my-0 mobile-view">
                <?php echo e(__('"A worthwhile contribution to all tutors."')); ?>

              </p>
              <p class="col-md-10 text-left fontClass fontP description mobile-hide pt-5" style="position:absolute;">
                <?php echo e(__('"A worthwhile contribution to all tutors."')); ?>

              </p>
            </div>
            <img src="<?php echo e(asset('img/svg/chat1.svg')); ?>" class="img-fluid rounded mobile-hide" style="height: auto; width: 60vw;">
            <img src="<?php echo e(asset('img/svg/chat1.svg')); ?>" class="img-fluid rounded mobile-view" style="height: auto; width: auto;">
            <p class="container col-md-10 fontClass fontP description pt-4">
              <?php echo e(__('StudentCast is a question and answer discussion forum for professional tutors and enthusiast students ')); ?>

              <span class="text-dark"><?php echo e(('to create open discussions')); ?></span>
              <?php echo e((' on a wide range of topics categorized under the name of the subject such as Science, English, Applied Mathematics, 
              Physics, Business, Economics, Accounting, Social Studies, Fine Arts, Applied Arts, Music, etc.')); ?>

            </p>
          </div>
        </div>
        <!---  First row --->
      </div>
    </div>
    <!---   /Section  StudentCast --->
    
    <!---   Section   Clients --->
    <div class="section section-Clients  py-5 my-5" id="Clients">
      <div class="row container mx-4 mx-auto">
        <div class="col-md-10 ml-auto mr-auto border border-white">
          <p class="text-secondary text-center my-0 fontClass fontH mt-0 mb-5" style="font-size: 4.5em; line-height: 1;">
            <?php echo e(__('Our')); ?>

            <span class="text-dark my-0 fontClass "> <?php echo e(__('Clients')); ?></span>
          </p>
          <br>
          <div class="row">  
            <div class="owl-carousel owl-theme owl-loaded loop1">
              
              <div class="item"><img src="<?php echo e(asset('img/logos/cb.png')); ?>" class="mx-1"></div>
              <div class="item"><img src="<?php echo e(asset('img/logos/sampath.svg')); ?>" class="mx-1"></div>
              <div class="item"><img src="<?php echo e(asset('img/logos/lp.png')); ?>" class="mx-1"></div>
              <div class="item"><img src="<?php echo e(asset('img/logos/cybergate.png')); ?>" class="mx-1"></div>
              <div class="item"><img src="<?php echo e(asset('img/logos/dhl2.png')); ?>" class="mx-1"></div>
              <div class="item"><img src="<?php echo e(asset('img/logos/tkb.png')); ?>" class="mx-1"></div>
              <div class="item"><img src="<?php echo e(asset('img/logos/studentcast.png')); ?>" class="mx-1"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!---   /Section  Clients --->

    <!---   Section    Customer Feedback --->
    <div class="section text-center py-0">
      <div class="features bg-dark pt-5">
        <div class="row col-md-11 px-3 mx-auto">
          <p class="text-secondary ml-auto text-center my-0 fontClass fontH mt-4 mb-4" style="font-size: 3.5em; line-height: 1;">
            <?php echo e(__('Satisfied ')); ?><?php echo e(__('Customers')); ?>

            <span class="text-dark my-0 fontClass "> </span>
          </p>
          <div class="owl-carousel owl-theme owl-loaded loop2 border-right border-left border-secondary">
            <div class="item mx-2 my-auto">
              <div class="info py-4 mt-3">  
                <p class="text-light text-center fontClass my-2" style="font-size: 2.0em"><?php echo e(__('Subhani Anandaviel')); ?></p>
                <p class="text-justify text-white">
                  Brilliant! Highly recommend!
                  I'd like to thank the developer for giving me the opportunity & entrusting me to test this 
                  this wonderful app with my students.
                  It was fun and interesting working with EV and I hope others would  
                  work with it too. I will spread the message as much as i could.
                </p>
                <p class="text-light text-center fontClass" style="font-size: 1.2em">
                  -Undergraduate and A/L tutor-
                </p> 
              </div>
            </div>
            <div class="item mx-2 my-auto">
              <div class="info py-4 mt-3">  
                <p class="text-light text-center fontClass my-2" style="font-size: 2.0em"><?php echo e(__('Wajira Samarakoon')); ?></p>
                <p class="text-white text-justify">
                  As a tutor, I have found this app very useful to suffice my daily needs in my field, 
                  amidst the difficulties we face in the current pandemic. I hope other lecturers would 
                  take my word, as i am completely satisfied with EV.
                </p>
                <p class="text-light text-center fontClass" style="font-size: 1.2em">
                  -Advanced Level Combined Mathematics-
                </p>
              </div>
            </div>
            <div class="item mx-2 my-auto">
              <div class="info py-4 mt-3">  
                <p class="text-light text-center fontClass my-2" style="font-size: 2.0em"><?php echo e(__('Sandun Warnakulasooriya')); ?></p>
                <p class="text-white text-justify">
                  මෙවැනි පද්ධතියක් නිර්මාණ කරපු පුද්ගලයාට මම ස්තුති කරනවා. 
                  මම LMS විශාල ප්‍රමාණයක් පාවිච්චි කර ඇති  නමුත් මෙය ඒවා අතරින් සුවිශේෂී වේ. 
                  මම උපාධි අපේක්ෂකයෙක් වන අතර 10 ශ්‍රේණිය සදහා ඉතිහාසය උගන්වන ගුරුවරයෙකි. 
                  මෙම අනගි පද්ධතිය අපිට ළමුන් සමග විශේෂාංග රැසක් භාවිතා කරමින් සම්බන්ධ වීමට අවස්ථාව සලසයි
                </p>
                <p class="text-light text-center fontClass" style="font-size: 1.2em">
                  -Undergraduate and O-Level Tutor-
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!---   /Section   Customer Feedback --->

    <!---   Section  Contact Us --->
    <div class="section section-ContactUs pb-5 bg-dark" id="ContactUs">
      <div class="row container mx-auto py-5">
        <div class="col-md-8 ml-auto mr-auto p-5 border border-light">
          <p class="text-secondary text-center my-0 fontClass fontH mt-4 mb-4" style="font-size: 2.5em; line-height: 1;">
            <?php echo e(__('Leave ')); ?><?php echo e(__('us your feedback')); ?>

            <span class="text-dark my-0 fontClass "> </span>
          </p>
          <form class="contact-form" method="POST" action="">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating text-light"><?php echo e(__('Your Name')); ?></label>
                  <input type="text" class="form-control text-light">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating text-light"><?php echo e(__('Your Email')); ?></label>
                  <input type="email" class="form-control text-light">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mx-auto">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating text-light"><?php echo e(__('Occupation (optional)')); ?></label>
                  <input type="text" class="form-control text-light">
                </div>
              </div>
            </div>
            <div class="form-group bmd-form-group">
              <label for="exampleMessage" class="bmd-label-floating text-light"><?php echo e(__('Your Message')); ?></label>
              <textarea type="text" class="form-control text-light" rows="4" id="exampleMessage"></textarea>
            </div>
            <div class="row">
              <div class="col-md-4 ml-auto mr-auto text-center">
                <button type="submit" class="btn btn-primary btn-raised">
                  Send Message
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!---   /Section  Contact Us --->
  </div>
  <!---------- Body ----------->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appHome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>