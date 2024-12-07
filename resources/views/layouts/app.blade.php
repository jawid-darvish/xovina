<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }} ">
    <link rel='stylesheet' href="{{ asset('css/main.css') }}" > 

    <!-- vendor folder --> 
    
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.min.css') }}" rel="stylesheet">
    <!--<link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">  --> 
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


</head>
<body  class="index-page">
    <main class="main">
    
    @include('layouts.header')
    


    <div class="container mt-4">
        @yield('content') <!-- This is where child views will inject their content -->
    </div>
</main>
@include('layouts.footer')

</body>
</html>