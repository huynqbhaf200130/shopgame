<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="ShopGame">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShopGame </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/elegant-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/plyr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/nice-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slicknav.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    
</head>
<body>
    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="index">
                            <img src="{{asset('img/logo.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="index">Home</a></li>
                                <li><a href="./categories.html">Product</a></li>
                                <li><a href="./blog.html">Blog</a></li>
                                <li><a href="#">Cart</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__menu">
                    <ul>
                    <li><a href="#" class="search-switch"><span class="icon_search"></span></a></li>
                    <li><a href="login"><span class="icon_profile"></span><span class="arrow_carrot-down"></span></a>
                        <ul class="dropdown">
                                        @if(Auth::check())
                                        <li><a href="logout">Log out</a></li>
                                        @else
                                        <li><a href="signup">Sign Up</a></li>
                                        <li><a href="login">Login</a></li>
                                        @endif
                                    </ul>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->