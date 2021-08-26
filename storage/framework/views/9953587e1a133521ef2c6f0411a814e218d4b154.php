<?php $__env->startSection('content'); ?>
    <div class="container">
        <!---- Top Margin Spacing ---->
        <div class="row col-md-12">
            <div class="pb-5 mb-5 bg-info"></div>
        </div>
        <!---- Top Spacing ---->
        <div class="row col-md-12 ml-auto mr-auto">
            <!------ Right Pane ------>
            <div class="col-md-6 px-0 mx-auto section-regForm my-auto" id="regForm">
                <div class="card col-md-12">
                    <!---------------------- SignUp Heading -------------------------------->
                    <div class="card-header card-header-primary text-center ">
                        <h3 class="card-title mb-0 pb-0 font-weight-bold" >
                            <?php echo e(__('Admin Registration')); ?>

                        </h3>
                    </div>
                    <!--------------------- /SignUp Heading -------------------------------->  

                    <!---------------------- SignUp Body -------------------------------->
                    <div class="card-body px-3">
                        <form class="form" method="POST" id="adminForm" action="<?php echo e(url(app()->getLocale() . '/admin_reg')); ?>" 
                        aria-label="<?php echo e(__('Register')); ?>" name="studentForm"> 

                        <?php echo csrf_field(); ?>

                        <div class="form-group-row">
                            <div class="form-row col-md-12 p-0">


                                <!--  First Name  -->
                                <div class="form-group col-md-6 pt-0">
                                    <input type="text" class="form-control<?php echo e($errors->has('fname') ? ' is-invalid' : ''); ?>" 
                                    name="fname" placeholder="<?php echo e(__('First name')); ?>" value="<?php echo e(old('fname')); ?>" required autofocus>

                                    <?php if($errors->has('fname')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('fname')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <!--  /First Name  -->




                                <!--  Last Name  -->
                                <div class="form-group col-md-6 pt-0">
                                    <input type="text" class="form-control<?php echo e($errors->has('lname') ? ' is-invalid' : ''); ?>" 
                                    name="lname" placeholder="<?php echo e(__('Last name')); ?>" value="<?php echo e(old('lname')); ?>" required autofocus>

                                    <?php if($errors->has('lname')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('lname')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <!--  /Last Name  -->
                            </div>
                        </div>




                        <!--  Email  -->
                        <div class="form-group p-0">
                            <input type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" 
                            name="email" placeholder="<?php echo e(__('Email address')); ?>"
                            autocomplete="" value="<?php echo e(old('email')); ?>" required>

                            <?php if($errors->has('email')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <!--  /Email  -->




                        <div class="form-group row p-0">
                            <!--  Password  password & password_confirmation-->
                            <div class="col-md-6">
                                <input id="password" type="password" 
                                class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" 
                                name="password" placeholder="<?php echo e(__("Password")); ?>" autocomplete="off" required>
                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <input id="password-confirmation" type="password" class="form-control" name="password_confirmation" 
                                placeholder="<?php echo e(__("Confirm Password")); ?>" required>
                            </div>
                            <!--  Password  -->
                        </div>
                        



                        <button type="submit" class="btn btn-block btn-success">
                        <?php echo e(__('Register')); ?>

                        </button>
                    </form>
                    </div>
                    <!--------------------- /SignUp Body -------------------------------->
                </div>
            </div>
             <!------ Right Pane ------>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appReg', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>