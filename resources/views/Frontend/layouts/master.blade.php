<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend_assets/css/bootstrap.css')}}">

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('frontend_assets/css/style.css')}}" rel="stylesheet">
    <!-- responsive style -->
    <link href="{{asset('frontend_assets/css/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend_assets/css/profilestyle.css')}}">
    <link rel="stylesheet" href="{{asset('font-awesome/css/fontawesome.min.css')}}">
    
</head>

<body class="sub_page mb-0">

<div class="hero_area">
    @include('frontend.inc.nav')

    @yield('content')

    @include('Frontend.inc.footer')

<script type="text/javascript" src="{{asset('frontend_assets/js/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend_assets/js/bootstrap.js')}}"></script>
<script src="{{asset('font-awesome/js/fontawesome.min.js')}}"></script>
<script src="{{asset('frontend_assets/js/profile.js')}}"></script>

</body>

</html>