<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Anytime - Everywhere</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive-style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav>
        <a href="{{url('/')}}" class="logo">ae.</a>
        <ul class="menu">
            <li class="@yield('about')"><a href="{{url('/about')}}">About us</a></li>
            <li class="@yield('faq')"><a href="{{url('/faq')}}">FAQ's</a></li>
            <li class="btn default-btn"><a href="{{url('/login')}}">Get Started</a></li>
            <i class="fa fa-times close-bar"></i>
        </ul>
        <i class="fa fa-bars menu-bar"></i>
    </nav>