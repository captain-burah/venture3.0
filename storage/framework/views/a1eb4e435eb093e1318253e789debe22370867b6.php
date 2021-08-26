<?php $__env->startSection('content'); ?>
    <div class="container ">
        <!---- Top Margin Spacing ---->
        <div class="row col-md-12">
            <div class="pb-4 mb-4 bg-info"></div>
        </div>
        <!---- Top Spacing ---->
        <div class="row col-md-12 ml-auto mr-auto">
            <!------ Left Pane ------>
            <div class="col-md-6 ml-auto mr-auto ">
                <div class="py-4 my-1">
                    <?php if(isset($url)): ?>
                        <h2 class="text-dark"><?php echo e(__('Join Our Tutorial Panel')); ?></h2>
                    <?php else: ?>
                        <h2 class="text-dark"><?php echo e(__('Join the StudentCast')); ?></h2>
                    <?php endif; ?>
                    <div class="text-right">
                        <img src="<?php echo e(asset('/img/svg/mobile_login2.svg')); ?>" alt="" class="img-fluid" style="height: 300px;">
                    </div>
                    <br>
                    <div class="row col-md-12 text-right mx-0 px-0">
                        <div class="col-md-8 ml-auto text-right mx-0 px-0">
                            <a href="#" target="" 
                        class="btn btn-white btn-lg mobile-view text-dark border 
                        border-danger animate__animated animate__fadeInLeft animate__delay-1s animate__slow	1s" 
                        rel="nofollow">
                            <i class="fa fa-play text-rose"></i>&nbsp <?php echo e(__('learn how to register')); ?>

                        </a>
                        </div>
                        <div class="col-md-4 ml-auto text-right mx-0 px-0">
                            <h4 class="text-dark">
                                <a href="javascript:void(0)" onclick="scrollToForm()" 
                                class="text-dark"><?php echo e(__('or go register now! ')); ?></a>
                            </h4>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!------ Left Pane ------>
            <!------ Right Pane ------>
            <div class="col-md-6 px-0 mx-auto section-regForm my-auto" id="regForm">
                <div class="card col-md-12">
                    <!---------------------- SignUp Heading -------------------------------->
                    <div class="card-header card-header-primary text-center ">
                        <?php if(isset($url)): ?>
                        <h3 class="card-title mb-0 pb-0 font-weight-bold" >
                            <?php echo e(__('Sign Up as Tutor')); ?>

                        </h3>
                        <?php else: ?>
                        <h3 class="card-title mb-0 pb-0 font-weight-bold" >
                            <?php echo e(__('Sign Up as Student')); ?>

                        </h3>
                        <?php endif; ?>
                        
                        <span class="mb-0 pb-0" style="font-size: .9rem;">
                        <?php echo e(__("It's quick & easy")); ?>

                        </span>
                    </div>
                    <!--------------------- /SignUp Heading -------------------------------->  

                    <!---------------------- SignUp Body -------------------------------->
                    <div class="card-body px-3">
                    <?php if(isset($url)): ?>
                        <form class="form" method="POST" id="tutorForm" action="<?php echo e(url(app()->getLocale() . '/tutor/register')); ?>" 
                        aria-label="<?php echo e(__('Register')); ?>" name="tutorForm"> 

                        <input type="text" name="tutor-plan" value="<?php echo e($plan); ?>" class="form-control" style="display: none;"> 
                    <?php else: ?>
                        <form class="form" method="POST" id="studentForm" action="" 
                        aria-label="<?php echo e(__('Register')); ?>" name="studentForm">  
                    <?php endif; ?>
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

                        <!-- Subscription -->
                            <?php if(isset($url)): ?>
                                <div class="form-group-row p-0">
                                    <div class="input-group col-md-12 m-0 p-0 text-right">
                                        <select class="custom-select" id="profession" name="profession" data-toggle="tooltip" 
                                        data-placement="top" title="state your profession" tabindex="0" onchange="yesnoCheck(this);">
                                            <?php if($plan == 'free'): ?>
                                                <option value="free" selected="selected">Free Subcription</option>
                                                <option value="pay_as_you_go">Pay-As-You-Go</option>
                                                <option value="beginners">Beginners Subsription</option>
                                                <option value="professional">Professionals Subscription</option>
                                                <option value="master">Masters Subsription</option>

                                            <?php elseif($plan == 'pay_as_you_go'): ?>
                                                <option value="free">Free Subcription</option>
                                                <option value="pay_as_you_go" selected="selected">Pay-As-You-Go</option>
                                                <option value="beginners">Beginners Subsription</option>
                                                <option value="professional">Professionals Subscription</option>
                                                <option value="master">Masters Subsription</option>

                                            <?php elseif($plan == 'beginner_plan'): ?>
                                                <option value="free" >Free Subcription</option>
                                                <option value="pay_as_you_go">Pay-As-You-Go</option>
                                                <option value="beginners" selected="selected">Beginners Subsription</option>
                                                <option value="professional">Professionals Subscription</option>
                                                <option value="master">Masters Subsription</option>

                                            <?php elseif($plan == 'professional_plan'): ?>
                                                <option value="free" >Free Subcription</option>
                                                <option value="pay_as_you_go">Pay-As-You-Go</option>
                                                <option value="beginners">Beginners Subsription</option>
                                                <option value="professional" selected="selected">Professionals Subscription</option>
                                                <option value="master">Masters Subsription</option>

                                            <?php elseif($plan == 'master_plan'): ?>
                                                <option value="free" >Free Subcription</option>
                                                <option value="pay_as_you_go">Pay-As-You-Go</option>
                                                <option value="beginners">Beginners Subsription</option>
                                                <option value="professional">Professionals Subscription</option>
                                                <option value="master" selected="selected">Masters Subsription</option>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <!-- /Subscription -->

                        <!--  /Gender  -->
                            <!-- <div class="form-group row mb-0">
                                <div class="form-group col-md-12">
                                    <label for="gender"><?php echo e(__('Gender')); ?></label>
                                    <select name="gender" class="form-control <?php echo e($errors->has('gender') ? ' is-invalid' : ''); ?>" 
                                        value="<?php echo e(old('gender')); ?>" required >
                                        <option value="">Choose..</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>

                                    <?php if($errors->has('gender')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('gender')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div> -->
                        <!--  /Gender  -->

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
                        
                        <div class="form-group p-0">
                            <input type="checkbox"/> <?php echo e(__("I have read & agreed to the ")); ?> 
                            <a href=""><?php echo e(__("Privacy Policy")); ?></a><?php echo e(__(" article and i give my consent to withold & use my information.")); ?>

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