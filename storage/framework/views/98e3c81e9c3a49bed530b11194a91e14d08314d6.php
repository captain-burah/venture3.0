<?php $__env->startSection('content'); ?>
        <academic-page id="<?php echo e($id); ?>"></academic-page>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appTutor', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>