<!DOCTYPE html>
<html  lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="<?php echo e(asset('img/favicon/5.png')); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <script> window.laravel = { csrfToken: '<?php echo e(csrf_token()); ?>' } </script>
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    <!-- Fonts and icons     -->
    <link rel="stylesheet" type="text/css" 
    href="<?php echo e(('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons')); ?>" />
    <link rel="stylesheet" href="<?php echo e(('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')); ?>">
    <link href="<?php echo e(asset('css/fonts/pe-icon-7-stroke.css')); ?>" rel="stylesheet">

    <!-- CSS Files -->
    <link href="<?php echo e(asset('css/material-kit.min.css?v=2.0.7')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset("demo/demo.css")); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>

<body 
<?php if(isset($url)): ?>
    class="bg-info login-page sidebar-collapse"
<?php else: ?>
    class="bg-warning login-page sidebar-collapse"
<?php endif; ?>>
    <!---  Nav  -->
    <nav class="navbar fixed-top navbar-expand-lg" id="sectionsNav">
        <div class="container ">
            <div class="navbar-translate">
                <a class="navbar-brand" href="<?php echo e(url(app()->getLocale() . '/home')); ?>">
                    <img src="<?php echo e(asset('img/favicon/5.png')); ?>" alt="logo" style="height: 32px; width: 32px;" class="mx-1">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                aria-label="Toggle navigation">
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
                        <a href="<?php echo e(route('register', app()->getLocale())); ?>" class="nav-link text-capitalize">
                            <i class="fa fa-child"></i> <?php echo e(__('Student Registration')); ?>

                        </a>
                    </li>
                    <li class="dropdown nav-item ">
                        <a href="<?php echo e(url(app()->getLocale() . '/tutors')); ?>" class="nav-link text-capitalize">
                            <i class="fa fa-home"></i> <?php echo e(__('Tutors Home')); ?>

                        </a>
                    </li>
                    <?php else: ?> 
                    <li class="dropdown nav-item ">
                        <a href="<?php echo e(url(app()->getLocale() . '/tutor_registration')); ?>" class="nav-link text-capitalize">
                            <i class="fa fa-graduation-cap"></i> <?php echo e(__('Tutor Registration')); ?>

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
                </ul>
            </div>
        </div>
    </nav>
    <!---  Nav  -->

    <!---  Body Content  -->
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <!---  Body Content  -->

    <!---  Footer  -->
    <footer class="pt-0 mt-0">
        <div class="container text-dark  pb-0 mb-0">
          <nav class=" pb-0">
            <ul>
                <a class="m-0 text-dark Flink pb-0"><i class="material-icons">language</i></a>
                <?php $__currentLoopData = config('app.available_locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item pb-0">
                        <a <?php if(app()->getLocale() == $locale): ?> 
                            style="text-decoration: underline;" 
                            class="nav-link" <?php endif; ?> 
                        href="<?php echo e(route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale)); ?>" class="nav-link Flink">
                            
                            <?php echo e(strtoupper($locale )); ?>

                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <li class="nav-item pb-0">
                    <a class="nav-link pb-2" rel="tooltip" title="" data-placement="bottom" 
                    href="#" target="_blank" data-original-title="Follow us on Twitter" rel="nofollow">
                    <i class="fa fa-twitter"></i> <span class="text-capitalize">Twitter</span>
                    </a>
                </li>

                <li class="nav-item  pb-0">
                    <a class="nav-link pb-2" rel="tooltip" title="" data-placement="bottom" 
                    href="#" target="_blank" data-original-title="Like us on Facebook" rel="nofollow">
                    <i class="fa fa-facebook-square"></i> <span class="text-capitalize">facebook</span>
                    </a>
                </li>

                <li class="nav-item pb-0">
                    <a class="nav-link py-2" rel="tooltip" title="" data-placement="bottom" 
                    href="#" target="_blank" data-original-title="Follow us on Instagram" rel="nofollow">
                    <i class="fa fa-instagram"></i> <span class="text-capitalize">instagram</span>
                    </a>
                </li>
                <li class="nav-item pb-0 ">
                    <a href="#" class="py-2">
                    Licenses
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="py-2">
                    Terms & Conditions
                    </a>
                </li>
            </ul>
          </nav>
          <div class="copyright pt-0 mt-0  pb-0 mb-0">
            &copy;
              <script>
                document.write(new Date().getFullYear())
              </script> developed by <a href="<?php echo e(('https://www.instagram.com/captain_burah')); ?>" target="_blank" class="text-dark" >
              Captain Burah
            </a> for a better world.
          </div>
        </div>
    </footer>
    <!---  Footer  -->


    <!--   Core JS Files   -->
        <script src="<?php echo e(asset('js/core/jquery.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('js/core/popper.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('js/core/bootstrap-material-design.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('js/plugins/moment.min.js')); ?>"></script>
        <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
        <script src="<?php echo e(asset('js/material-kit.js?v=2.0.7')); ?>" type="text/javascript"></script>

        <script>
            

            function scrollToForm() {
                if ($('.section-regForm').length != 0) {
                $("html, body").animate({
                    scrollTop: $('.section-regForm').offset().top
                }, 1000);
                }
            }
        </script>
    <!--   Core JS Files   -->
</body>

</html>