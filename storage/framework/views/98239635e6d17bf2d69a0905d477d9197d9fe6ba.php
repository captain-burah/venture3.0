<?php $__env->startSection('content'); ?>
  <!--- Cover --->
  <div class="page-header header-filter purple-filter" data-parallax="true" 
  style="background-image: url(<?php echo e(asset('img/bg12.jpg')); ?>); transform: translate3d(0px, 0px, 0px);">
    <div class="container">
      <div class="row mx-auto">

        <div class="col-md-6 text-center mobile-hide" >
            <h1 class="title text-center"><?php echo e(__('Estimate Calculator')); ?></h1>
        </div>

        <div class=" col-md-6 text-center my-auto" >
          <div class="brand mobile-view">
            <h3 class=""><?php echo e(__('Estimate Calculator')); ?></h3>
            <div class="separator line-separator text-white  pb-0 pt-0">♦</div>
          </div>
          <div class="card ml-auto" style="width: 22rem;">
            <div class="card-body">

              <div class="brand mobile-view">
                  <a href="<?php echo e(url(app()->getLocale() . '/pay_as_you_go')); ?>" 
                    class="btn btn-primary btn-lg text-left " 
                    style="min-width: 293.11px;">
                      <i class="fa fa-user-plus"></i>&nbsp <?php echo e(__('Register Now!')); ?>

                  </a>
              </div>

            <div class="my-auto py-auto mobile-hide">
              <a href="<?php echo e(url(app()->getLocale() . '/pay_as_you_go')); ?>" 
                class="btn btn-primary btn-lg text-left " 
              style="min-width: 293.11px;">
                <i class="fa fa-user-plus"></i>&nbsp <?php echo e(__('Register Now!')); ?>

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
              <?php echo e(__("With EV you only pay for what you use, helping you or your organization to remain agile,
               responsive and always able to meet scale demands. Pay-as-you-go pricing allows you to easily adapt to changing business needs without overcommitting 
                budgets and improving your responsiveness to changes. With a pay as you go model, you can adapt your 
                business depending on need and not on forecasts, reducing the risk or overprovisioning or missing capacity.")); ?></h5>
            <h5><?php echo e(__('By paying for services on a scalable basis, you can redirect your focus to innovation and invention, 
                reducing procurement complexity and enabling your career to be fully elastic.')); ?></h5>
                <h5 class=""> <?php echo e(('The advantage of using the Pay-As-You-Go subcription plan compared to the rest 
                is because it provides an in-built Service Monitoring System that would study your progress once a day 
                in order to provide reliable and flexible updgrading facilities to your notice.')); ?></h5>
            </div>
          </div>

        </div>
      </div>
      <!---   /Section 01  Features --->


      <div id="">
          <estimation-calculator></estimation-calculator>
      </div>
      
    </div>
  </div>
  <!--- Body  --->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appTutor', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>