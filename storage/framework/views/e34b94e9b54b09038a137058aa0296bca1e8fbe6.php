<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="<?php echo e(asset('img/favicon/5.png')); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <script> window.laravel = { csrfToken: '<?php echo e(csrf_token()); ?>' } </script>
  <title><?php echo e(config('app.name', 'Laravel')); ?></title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />


  <!-- Favicon -->
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons 
    <link href="<?php echo e(asset('vendor/nucleo/css/nucleo.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet">
  -->
  <!-- Argon CSS 
    <link type="text/css" href="<?php echo e(asset('css/argon.css?')); ?>" rel="stylesheet">
  -->
  <link href="<?php echo e(asset('css/app.css')); ?>" type="text/css" rel="stylesheet">
</head>


<body class="hold-transition sidebar-mini control-sidebar-slide-open dark-mode">
  <div id="app">
    <main>
      <?php echo $__env->yieldContent('adminContent'); ?>
    </main>
  </div>
  
  <script rel="stylesheet" src="<?php echo e(asset('js/app.js')); ?>"></script>
  
  <script src="<?php echo e(asset('vendor/chart.js/dist/Chart.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/chart.js/dist/Chart.extension.js')); ?>"></script>


  <!-- Argon Scripts 
  Core 
  <script src="<?php echo e(asset('vendor/jquery/dist/jquery.min.js')); ?>"></script>
  
  <script src="<?php echo e(asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
  

  Optional JS 
  <script src="<?php echo e(asset('vendor/chart.js/dist/Chart.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/chart.js/dist/Chart.extension.js')); ?>"></script>

   Argon JS 
  <script src="<?php echo e(asset('js/argon.js?v=1.0.0')); ?>"></script>
  -->
  <!-- 
    <script>
      window._locale = "<?php echo e(url('admin')); ?> ";
    </script>
  -->
  
</body>
</html>
