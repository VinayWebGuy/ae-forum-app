<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ae - Home</title>
    <link rel="stylesheet" href="{{asset('assets/css/logged.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive-logged.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav>
        <div class="left">
            <a href="{{url('/main')}}" class="logo">ae.</a>
        </div>
        <div class="right">
            <div class="search-box">
                <input type="text" name="q" id="q" placeholder="Search query...">
                <i class="fa fa-search"></i>
            </div>

            <div class="icons-section">
                <div class="notifications">
                    <i class="fa fa-bell view-noti"></i>

                    <div class="all-notifications">
                        <h4>All notifications</h4>
                        <a href="#" class="single-notification"><i class="fa fa-bell"></i>Lorem ipsum dolor sit
                            amet.</a>
                        <a href="#" class="single-notification"><i class="fa fa-bell"></i>Lorem ipsum dolor sit
                            amet.</a>
                        <a href="#" class="single-notification"><i class="fa fa-bell"></i>Lorem ipsum dolor sit
                            amet.</a>
                        <a href="#" class="single-notification"><i class="fa fa-bell"></i>Lorem ipsum dolor sit
                            amet.</a>
                        <a href="#" class="single-notification"><i class="fa fa-bell"></i>Lorem ipsum dolor sit
                            amet.</a>
                        <a href="#" class="view-all">View all</a>
                    </div>
                </div>
                <a href="{{url('/logout')}}" class="logout">
                    <i class="fa fa-sign-out-alt"></i>
                </a>
                <div class="loggedin-user">
                    {{"@".Session::get('username')}}
                </div>
            </div>
        </div>


    </nav>

    <div class="main">
        <div class="sidebar">
            <div class="menus">
                <h3>Main</h3>
                <a class="@yield('home')" href="{{url('/main')}}"><i class="fa fa-home"></i> <span>Home</span></a>
                <a class="@yield('draft')" href="{{url('/main/draft')}}"><i class="fa fa-file"></i>
                    <span>Draft</span></a>
                <a class="@yield('activity')" href="{{url('/main/activity')}}"><i class="fa fa-chart-line"></i>
                    <span>Activity</span></a>
                <h3>Forum</h3>
                <a class="@yield('topTags')" href="{{url('/main/top-tags')}}"><i class="fa fa-tag"></i><span>Top
                        Tags</span></a>
                <a class="@yield('topQueries')" href="{{url('/main/top-queries')}}"><i class="fa fa-list"></i><span>Top
                        Queries</span></a>
                <h3>Account</h3>
                <a class="@yield('account')" href="{{url('/main/account')}}"><i class="fa fa-cog"></i>
                    <span>Account</span></a>
                <a class="@yield('subscription')" href="{{url('/main/subscription')}}"><i
                        class="fa fa-file-invoice"></i> <span>Subscription</span></a>
                <a class="@yield('myQueries')" href="{{url('/main/my-queries')}}"><i class="fa fa-question"></i>
                    <span>My Queries</span></a>
                <a class="@yield('myResponses')" href="{{url('/main/my-responses')}}"><i class="fa fa-star"></i>
                    <span>My Responses</span></a>
            </div>


            <a href="{{url('logout')}}" class="btn outline-btn"><span>Logout</span> <i
                    class="fa fa-sign-out-alt"></i></a>
        </div>