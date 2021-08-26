
<!--
=========================================================
Enlighten Venture
=========================================================
Copyright 2020 Captain Burah (https://www.instagram.com/captain_burah)

Coded by Khaazen Burah

=========================================================
-->

<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?php echo e(asset('img/favicon/5.png')); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <script> window.laravel = { csrfToken: '<?php echo e(csrf_token()); ?>' } </script>
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    <!-- Fonts and icons     -->
    <link href="<?php echo e(('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')); ?>" rel="stylesheet" >
    <link href="<?php echo e(asset('css/fonts/pe-icon-7-stroke.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/simple-line-icons/css/simple-line-icons.css')); ?>" rel="stylesheet" >
    <link href="<?php echo e(('https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic')); ?>" rel="stylesheet" type="text/css">

    <!-- CSS Files -->
    <link href="<?php echo e(asset('css/material-kit.css?v=2.0.7')); ?>" rel="stylesheet" />

    <link href="<?php echo e(asset('device-mockups/device-mockups.min.css')); ?>" rel="stylesheet" >
    <link href="<?php echo e(asset('css/new-age/landing-page.min.css')); ?>" rel="stylesheet">
</head>

<body class="login-page sidebar-collapse">
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
        <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand " href="<?php echo e(url(app()->getLocale() . '/home')); ?>">
                <img src="<?php echo e(asset('img/favicon/5.png')); ?>" alt="logo" style="height: 32px; width: 32px;" class="mx-1">
                <?php echo e(config('app.name', 'Laravel')); ?>

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <?php if(isset($url)): ?>
                <li class="dropdown nav-item ">
                    <a href="<?php echo e(url(app()->getLocale() . '/tutors')); ?>" class="nav-link text-capitalize">
                        <i class="fa fa-home"></i> <?php echo e(__('Tutors Home')); ?>

                    </a>
                </li>
                <?php endif; ?>
                <li class="dropdown nav-item ">
                    <a href="#" class="dropdown-toggle nav-link text-capitalize" data-toggle="dropdown">
                    <i class="material-icons">language</i> <?php echo e(__('Language')); ?>

                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <?php $__currentLoopData = config('app.available_locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a <?php if(app()->getLocale() == $locale): ?> 
                                style="text-decoration: underline;" 
                                class="dropdown-item text-white bg-success" <?php endif; ?> 
                            href="<?php echo e(route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale)); ?>" class="dropdown-item">
                                
                                <?php echo e(strtoupper($locale )); ?>

                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </li>
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" 
                        href="" target="_blank" data-original-title="Follow us on Twitter" rel="nofollow">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" 
                        href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Like us on Facebook" rel="nofollow">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" 
                        href="" target="_blank" data-original-title="Follow us on Instagram" 
                        rel="nofollow">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                <?php else: ?> 
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout', app()->getLocale())); ?>"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout', app()->getLocale())); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        </div>
    </nav>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>


    <!--   Core JS Files   -->
        <script src="<?php echo e(asset('js/core/jquery.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('js/core/popper.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('js/core/bootstrap-material-design.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('js/plugins/moment.min.js')); ?>"></script>
        <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
        <script src="<?php echo e(asset('js/plugins/bootstrap-datetimepicker.js')); ?>" type="text/javascript"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="<?php echo e(asset('js/plugins/nouislider.min.js')); ?>" type="text/javascript"></script>
        <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
        <script src="<?php echo e(asset('js/material-kit.js?v=2.0.7')); ?>" type="text/javascript"></script>
    <!--   Core JS Files   -->
</body>

</html>