<!DOCTYPE html>
<html>

    <head>
        <title>DrawingClup</title>
        <link rel="icon" type="image/png" href="{{asset('logo.png')}}" />
        <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @yield("head")  
    </head>
<body>
 
 
 
 <!-- body -->
    @include('includes.navBar')

    @yield('content')
    
    @include('includes.footer')
 


    <!-- include js  -->
    <div>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        @yield("extr") 
     
    </div>
</body>
<!-- end body -->

</html>