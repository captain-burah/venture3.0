<?php $__env->startSection('adminContent'); ?>
  
  <admin-panel
  
    tutor_img="<?php echo e(asset('img/user1.png')); ?>"
    tutor_home="<?php echo e(url(app()->getLocale() . '/home_tutor')); ?>"

    username1="<?php echo e(Auth::user()->fname); ?> <?php echo e(Auth::user()->lname); ?>"
    brand1="<?php echo e(asset('img/favicon/6.png')); ?>"
    user1="<?php echo e(asset('img/faces/marc.jpg')); ?>"

    logout_base="<?php echo e(route('admin.logout')); ?>"

    logout_user1="<?php echo e(url('/admin/logout')); ?>"
  >
  </admin-panel>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>