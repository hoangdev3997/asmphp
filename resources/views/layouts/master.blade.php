<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yolo Shop - @yield('title')</title>
    <meta charset="UTF-8">
	<meta name="description" content=" Yolo | eCommerce Template">
	<meta name="keywords" content="Yolo, Yolo shop, shop, t-shirt">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="{{asset('')}}img/site-logo.png">

	<!-- Font-Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">


	<!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('')}}css/bootstrap.min.css"/>
	<link rel="stylesheet" href="{{asset('')}}css/font-awesome.min.css"/>
	<link rel="stylesheet" href="{{asset('')}}css/slicknav.min.css"/>
	<link rel="stylesheet" href="{{asset('')}}css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="{{asset('')}}css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="{{asset('')}}css/animate.css"/>
    <link rel="stylesheet" href="{{asset('')}}css/style.css"/>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>
        <header class="header-section">
                <div class="header-top">
                    <div class="container">
                        <div></div>
                        <div class="row align-items-center">
                            <div class="col-lg-2 text-center text-lg-left">
                                <!-- logo -->
                                <a href="/" class="site-logo">
                                    <img src="{{asset('')}}img/logo.png" alt="">
                                </a>
                            </div>
                            <div class="col-xl-6 col-lg-5">
                            <form class="header-search-form" method="get" action="{{route('search')}}">
                                    <input type="search" name="search" placeholder="Search ...">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <div class="col-xl-4 col-lg-5 d-flex justify-content-end">
                                <div class="user-panel">
                                    @guest
                                    <div class="up-item">
                                        <ul class="menu">
                                            <li>
                                                <i class="far fa-user"></i>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('login') }}"><i class="fas fa-walking"></i>&nbsp Sign In</a></li>
                                                    <li><a href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Create Account</a></li>
                                                </ul>
                                            </li>       
                                        </ul>                                        
                                    </div>
                                     @else
                                        <div class="up-item-login">
                                            <ul class="menu">
                                                <li>
                                                    <i class="far fa-user"></i><a href="#"> {{ Auth::user()->name }} </a>
                                                    <ul class="sub-menu">
                                                        {{-- <li><a href="#"><i class="fas fa-user-edit"></i>Edit Profile</a></li> --}}

                                                        <li><a href="{{ route('logout') }}" 
                                                        onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                            <i class="fas fa-sign-out-alt"></i>Logout
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    @endguest

                                        {{-- <span class="hidden-span"><a href="{{ route('login') }}">Sign In</a> or <a href="/page/register">Create Account</a></span> --}}
                                    
                                    <div class="right-item">
                                        <div class="shopping-card">
                                            <a href="{{ route('cart.checkout') }}"><i class="fas fa-shopping-bag"></i></a></span>
                                            <span class="amount-icon">{{ Cart::content()->count() }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
               
                <nav class="main-navbar">
                    <div class="container">
                        <!-- menu -->
                        <div id="nav_main" class="row d-flex justify-content-end">
                            <div class="search-nav d-hidden">
                                <form class="header-search-form" method="get" action="{{route('search')}}">
                                        <input type="search" name="search" placeholder="Search ...">
                                     
                                        <button type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    
                                </form>
                            </div>
                            <ul class="main-menu">
                            <li><a href="/">Home</a></li>
                            <li><a href="/shop">World of Wine</a>
                                <ul class="sub-menu">
                                    
                                        @foreach (App\Category::all() as $category)
                                        <li><a href="/shop/{{ $category->product_type_id }}/{{Str::slug($category->product_type_name)}}">{{ $category->product_type_name }}</a></li>
                                        @endforeach

                                </ul>
                            </li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                        </div>
                    </div>
                </nav>
            </header>
        @yield('content')
        @show
   
    <!-- Footer section -->
	<section class="footer-section">
            <div class="container">
                <div class="footer-logo text-center">
                    <a href="index.html"><img src="/img/logo-light.png" alt=""></a>
                </div>
                <div class="row">				
                    <div class="col-lg-6 col-sm-12">
                        <div class="footer-widget about-widget">
                            
                            <h2>About</h2>
                            <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
                            <div class="social-links">
                                <a href="" class="instagram"><i class="fa fa-instagram"></i></a>
                                <a href="" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                <a href="" class="pinterest"><i class="fa fa-pinterest"></i></a>
                                <a href="" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="" class="youtube"><i class="fa fa-youtube"></i></a>
                                <a href="" class="tumblr"><i class="fa fa-tumblr-square"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="footer-widget contact-widget">
                            <h2>Contact</h2>
                            <div class="con-info">
                                <span><i class="far fa-building"></i></span>
                                <p>FPT Polytechnic </p>
                            </div>
                            <div class="con-info">
                                <span><i class="fas fa-home"></i></span>
                                <p>778/B1 Nguyen Kiem Street, Phu Nhuan Provice, Ho Chi Minh City </p>
                            </div>
                            <div class="con-info">
                                <span><i class="fas fa-phone"></i></span>
                                <p>+84 965 960 207</p>
                            </div>
                            <div class="con-info">
                                <span><i class="far fa-envelope"></i></span>
                                <p>huyhoang.dev.997@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social-links-warp">
                <div class="container">
                    
    
                    <p class="text-white text-center mt-3">Copyright &copy;<script>document.write(new Date().getFullYear());</script> This website is made by <i class="fa fa-heart-o" aria-hidden="true"></i> <a class="author-link" href="facebook.com/riin997/" target="_blank"><span class="author-name">Nguyễn Huy Hoàng</span></a></p>
    
                </div>
            </div>
        </section>
        <!-- Footer section end -->
    
    
    
        <!--====== Javascripts & Jquery ======-->
        <script src="{{asset('')}}js/jquery-3.2.1.min.js"></script>
        <script src="{{asset('')}}js/bootstrap.min.js"></script>
        <script src="{{asset('')}}js/jquery.slicknav.min.js"></script>
        <script src="{{asset('')}}js/owl.carousel.min.js"></script>
        <script src="{{asset('')}}js/jquery.nicescroll.min.js"></script>
        <script src="{{asset('')}}js/jquery.zoom.min.js"></script>
        <script src="{{asset('')}}js/jquery-ui.min.js"></script>
        <script src="{{asset('')}}js/main.js"></script>
    </body>
    </html>
    