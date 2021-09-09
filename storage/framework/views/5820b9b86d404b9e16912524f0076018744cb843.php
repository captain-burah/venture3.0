<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="row col-md-12">
        <div class="title col-md-6">
            <?php echo e($message1); ?>

        </div>
        <div class="col-md-6 sub-title m-b-md"><?php echo e($message2); ?></div>
    </div>
    <div class="row sub-sub-title col-md-12 m-b-md">
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <p style="font-weight: bold;">Error Message: <span style="color:; font-weight: bold;"><?php echo e($message3); ?></span></p>
        <p>Please grab a screen-shot or photo of this error message and reach out to our admin to rectify this problem.</p>
    </div>
    <div class="links">
        <a>-Enlight-</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>