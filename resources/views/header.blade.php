<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>eCommerce HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="front/img/favicon.ico">
'
		<!-- CSS here -->
            <link rel="stylesheet" href="{{asset('front/css')}}/bootstrap.min.css">
            <link rel="stylesheet" href="{{asset('front/css')}}/owl.carousel.min.css">
            <link rel="stylesheet" href="{{asset('front/css')}}/flaticon.css">
            <link rel="stylesheet" href="{{asset('front/css')}}/slicknav.css">
            <link rel="stylesheet" href="{{asset('front/css')}}/animate.min.css">
            <link rel="stylesheet" href="{{asset('front/css')}}/magnific-popup.css">
            <link rel="stylesheet" href="{{asset('front/css')}}/fontawesome-all.min.css">
            <link rel="stylesheet" href="{{asset('front/css')}}/themify-icons.css">
            <link rel="stylesheet" href="{{asset('front/css')}}/slick.css">
            <link rel="stylesheet" href="{{asset('front/css')}}/nice-select.css">
            <link rel="stylesheet" href="{{asset('front/css')}}/hello.css">
		
   </head>

   <body>
      
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('front/img')}}/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area mb-5">
            <div class="main-header">
                
               <div class="header-bottom  header-sticky mb-5">
                    <div class="container-fluid ">
                        <div class="row align-items-center mb-5">
                            <!-- Logo -->
		
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3 ">
                                <div class="logo">
                                  <a href="index.html"><img src="{{asset('front/img')}}/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>                                                
                                        <ul id="navigation">                                        
                     <li><a href="{{route('homepage')}}">Home</a></li>
                                            
                                            <li class="hot"><a href="#">Categories</a>
                                                <ul class="submenu">
          <li><a href="{{route('clothes')}}"> Clothes</a></li>
          <li><a href="{{route('mobiles')}}"> Mobiles</a></li>
		<li><a href="{{route('camera')}}">Camera</a></li>
		<li><a href="{{route('laptop')}}">Laptop</a></li>
                                                </ul>
                                            </li>
                                         
											
											     <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="{{route('login')}}">Login</a></li>
                                                    
                                                   
                                                 
                                                    <li><a href="{{route('show')}}">Shopping Cart</a></li>
                                                    
                                                </ul>
                                            </li>
@auth
@if(Auth::user()->id==1)
											   <li class="hot"><a href="#">Vouchers</a>
                                             
                                            </li>
@endif
                                       											 
@endauth

                                            <li><a href="{{route('contact')}}">Contact</a></li>
													
											                                              
                                        </ul>
                                    </nav>
                                </div>
                            </div> 
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    <li class="d-none d-xl-block">
                                        <div class="form-box f-right mr-5">
                                            <input type="text" name="Search" placeholder="Search products">
                                            <div class="search-icon">
                                                <i class="fas fa-search special-tag"></i>
                                            </div>
                                        </div>
                                     </li>
                                   
                                         <span class="shopping-card">
                <a href="{{route('show')}}"><i class="fas fa-shopping-cart"> ({{session()->has('cart') ? session()->get('cart')->totalQty : ' 0 '}})</i></a>
</span>
									<li class="d-none d-lg-block"> <a href="{{route('login')}}" class="btn header-btn">Sign in</a></li>
                                   <li class="d-none d-lg-block"> <a href="{{route('logout')}}" class="btn header-btn">Sign out</a></li>
									
                                </ul>
                            </div>
                            <!-- Mobile Menu -->
                           
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <main>

        <!-- slider Area Start -->
        <div class="slider-area mb-5">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height" data-background="front/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row d-flex align-items-center justify-content-between mb-5">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                                <div class="hero__img mb-5" data-animation="bounceIn" data-delay=".4s">
                                    <img src="{{asset('front/img')}}/hero/hero_man.png" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInRight" data-delay=".4s">60% Discount</span>
                                    <h1 data-animation="fadeInRight" data-delay=".6s">Winter <br> Collection</h1>
                                    <p data-animation="fadeInRight" data-delay=".8s">Best Collections By 2021 !</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
                                        <a href="industries.html" class="btn hero-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				