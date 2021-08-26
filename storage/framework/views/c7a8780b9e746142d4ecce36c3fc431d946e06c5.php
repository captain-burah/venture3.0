<!DOCTYPE html>

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
  </style>
</head>
<body class="hold-transition sidebar-mini">
  <div id="app">
    <main>
      <?php echo $__env->yieldContent('lecContent'); ?>
    </main>
    
  </div>
  
  <script rel="stylesheet" src="<?php echo e(asset('js/app.js')); ?>"></script>
  <!--<script src="/js/app.js"></script>-->
  <script  src="<?php echo e(('https://unpkg.com/ionicons@5.1.2/dist/ionicons.js')); ?>"></script>
  
  <!--
    <script src="<?php echo e(('https://unpkg.com/vue/dist/vue.js')); ?>"></script>
    <script src="<?php echo e(('https://unpkg.com/vue-i18n/dist/vue-i18n.js')); ?>"></script>
  -->
  <script>
    window._locale = "<?php echo e(config('app.locale')); ?>";
    window._translations = <?php echo cache('translations'); ?>;
</script>
</body>
</html>
