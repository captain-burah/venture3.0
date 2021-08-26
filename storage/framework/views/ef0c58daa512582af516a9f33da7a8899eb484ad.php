<?php $__env->startSection('stuContent'); ?>
  
  <student-dashboard
    logout_user="<?php echo e(route('logout', app()->getLocale())); ?>"
    tutor_img="<?php echo e(asset('img/user1.png')); ?>"
    home_student="<?php echo e(url(app()->getLocale() . '/home_tutor')); ?>"
    locale="<?php echo e(app()->getLocale()); ?>"
    link-en="<?php echo e(route(Route::currentRouteName(), 'en')); ?>"
    link-sn="<?php echo e(route(Route::currentRouteName(), 'sn')); ?>"
  ></student-dashboard>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('student.stuLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>