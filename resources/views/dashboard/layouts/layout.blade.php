<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim"><!-- Favicon-->
  <link rel="icon" href="/dash/assets/img/brand/favicon.png" type="image/png"><!-- Fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"><!-- Icons-->
  <link rel="stylesheet" href="/dash/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="/dash/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins-->
  <!-- Argon CSS-->
  <link rel="stylesheet" href="/dash/assets/css/bootstrap/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="/dash/assets/css/argon.css?v=1.2.0" type="text/css">
  <link rel="stylesheet" href="/dash/assets/css/sweetalert2.min.css" type="text/css">
  <style>
  tr td {
    max-width: 0;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
  }
  </style>
  <style>
  @yield('customCSS')
  </style>
</head>

<body>
  @include('dashboard.partials.sidebar')

  <div id="panel" class="main-content">
    @include('dashboard.partials.header')
    @yield('content')
  </div>




  <script src="{{asset('/dash/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('/dash/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <script src="{{asset('/dash/assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('/dash/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{asset('/dash/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>

  // Optional JS
  <script src="{{asset('/dash/assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('/dash/assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  @yield('optionJs')

  <script src="{{asset('/dash/assets/js/argon.js?v=1.2.0')}}"></script>
  <script src="{{asset('/dash/assets/js/sweetalert2@10.js')}}"></script>
  <script src="{{asset('/dash/custom/globals.js')}}"></script>

  @yield('pagescripts')

</body>