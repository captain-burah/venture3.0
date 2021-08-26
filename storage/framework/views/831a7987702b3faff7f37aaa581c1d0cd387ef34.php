<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <script> window.laravel = { csrfToken: '<?php echo e(csrf_token()); ?>' } </script>
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->


    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <style>
        a,
        a:hover,
        a:focus{
            color: #fff;
        }
        html,
        body {
            height: 100%;
            font-family: 'Raleway', sans-serif;
            color: #636b6f;
            height: 100vh;
            margin: 0;
            font-weight: 100;
            }
        body{
                background-color: #40844e;
            }
         .card-wall{
             background-color: #eaf5f2;
         }
         .mastfoot{
                color: #214528;
                font-weight: 700;
                font-size: .7rem;
                position: relative;
                margin-bottom: 0;
                top: 0;
                
            }
            .footer-a{
                text-decoration: none;
                color: #214528;
            }
            .footer-a:hover{
                color: #000;
                font-weight: 900;
            }
            
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
            <div class="container ">
                <a class="navbar-brand " href="<?php echo e(url(app()->getLocale() . '/home')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url(app()->getLocale() . '/login/tutor')); ?>"><i class="fas fa-graduation-cap"></i>&nbsp Tutor Login </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login', app()->getLocale())); ?>"><i class="fas fa-child"></i>&nbsp &nbsp Student <?php echo e(__('Login')); ?></a>
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

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

    </div>

</body>
</html>
