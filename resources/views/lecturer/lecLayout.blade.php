<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script> window.laravel = { csrfToken: '{{ csrf_token() }}' } </script>
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
  </style>
</head>
<body class="hold-transition sidebar-mini">
  <div id="app">
    <main>
      @yield('lecContent')
    </main>
    
  </div>
  
  <script rel="stylesheet" src="{{ asset('js/app.js') }}"></script>
  <!--<script src="/js/app.js"></script>-->
  <script  src="{{('https://unpkg.com/ionicons@5.1.2/dist/ionicons.js')}}"></script>
  
  <!--
    <script src="{{('https://unpkg.com/vue/dist/vue.js')}}"></script>
    <script src="{{('https://unpkg.com/vue-i18n/dist/vue-i18n.js')}}"></script>
  -->
  <script>
    window._locale = "{{ config('app.locale') }}";
    window._translations = {!! cache('translations') !!};
</script>
</body>
</html>
