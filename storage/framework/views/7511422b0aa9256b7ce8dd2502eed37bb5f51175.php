<?php $__env->startSection('content'); ?>
  <!---   Cover   --->
  <div class="page-header header-filter purple-filter clear-filter section-cover" data-parallax="true" 
  style="background-image: url(<?php echo e(asset('img/bg4.jpg')); ?>); transform: translate3d(0px, 0px, 0px);" id="coverSection">
    <div class="container text-center mx-auto my-auto d-flex align-content-center flex-wrap" >
      <h1 class="cover-heading mx-auto">
        <?php echo e(__('Your journey starts now!')); ?>

      </h1>
      <div class="col-md-6 mx-auto">
        <a href="<?php echo e(('/en/home')); ?>" class="btn btn-white btn-lg text-dark" style="min-width: 212.91px;">
          <i class="fa fa-graduation-cap"></i>
          &nbsp <?php echo e(__('English')); ?>

        </a>
        <a href="<?php echo e(('/sn/home')); ?>" target="" class="btn btn-warning btn-lg text-dark" rel="nofollow" style="min-width: 212.91px;">
            <i class="fa fa-university"></i>
            &nbsp <?php echo e(__('සිංහල')); ?>

        </a>
      </div>
      <div class="footer-head">
        <p class="p-4 text-light">
          <?php echo e(__('Developed & Coded by')); ?> 
          
          <span class="badge badge badge-light text-dark">
            <i class="fa fa-hashtag text-info"></i> Captain Burah</span>
        </p>
      </div>
    </div>
    
  </div>
  <!---   Cover   --->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.landingApp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>