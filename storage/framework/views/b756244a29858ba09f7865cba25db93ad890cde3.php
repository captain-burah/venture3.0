
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <script> window.laravel = { csrfToken: '<?php echo e(csrf_token()); ?>' } </script>
  <title><?php echo e(config('app.name', 'Laravel')); ?></title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
  <style>
    .navbar-bg{
      background-color: #339933;
    }
    .bg-wallColor{
      background-color: #ddeeea;
    }
    .sideMenu{
      background-color: #1a1a1a;
      
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        <div id="app">
            <main>
              <?php echo $__env->yieldContent('stuContent'); ?>
            </main>
            
        </div>
    </div>
    
    <!-- JS -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script  src="<?php echo e(('https://unpkg.com/ionicons@5.1.2/dist/ionicons.js')); ?>"></script>
</body>
</html>
