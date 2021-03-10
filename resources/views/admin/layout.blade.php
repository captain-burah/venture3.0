<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="{{ asset('img/favicon/5.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script> window.laravel = { csrfToken: '{{ csrf_token() }}' } </script>
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />


  <!-- Favicon -->
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{ asset('css/argon.css?')}}" rel="stylesheet">

</head>


<body class="">
  <div id="app">
    <main>
      @yield('adminContent')
    </main>
    
  </div>
  
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('vendor/jquery/dist/jquery.min.js')}}"></script>
  <script rel="stylesheet" src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  

  <!-- Optional JS -->
  <script src="{{ asset('vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{ asset('vendor/chart.js/dist/Chart.extension.js')}}"></script>

  <!-- Argon JS -->
  <script src="{{ asset('js/argon.js?v=1.0.0')}}"></script>
  <!-- 
    <script>
      window._locale = "{{ url('admin') }} ";
    </script>
  -->
  
</body>
</html>
