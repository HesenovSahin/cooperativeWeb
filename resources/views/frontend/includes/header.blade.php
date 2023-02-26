
    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area inline inc-border">
        <div class="container">
            <div class="row">
                <div class="col-md-7 address-info text-left">
                    <div class="info box">
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i> 
                                <p>
                                    California, TX 70240
                                </p>
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i>
                                <p>
                                    Info@gmail.com
                                </p>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <p>
                                    +123 456 7890
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 info-right">
                    <div class="item-flex border-less">
                        <div class="social">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="language-switcher">
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-toggle="dropdown">
                                    English
                                    <span class="fas fa-angle-down"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Español</a></li>
                                    <li><a href="#">Française</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default active-border-top attr-border navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="/home">
                        <img src={{asset("frontend/assets/img/logo.png")}} class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li class="dropdown active">
                            <a href="/home" class="dropdown-toggle" data-toggle="dropdown" >Home</a>
                            {{-- 644 line bootsnav.css --}}
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Pages</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="/about" class="dropdown-toggle" data-toggle="dropdown" >About</a>
                                    {{-- 1171,1179 line bootsnav.css --}}
                                </li>
                                <li><a href="/pricing_table">Pricing Table</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="/gallery" class="dropdown-toggle active" data-toggle="dropdown" >Gallery</a>
                        </li>
                        <li class="dropdown">
                            <a href="/service" class="dropdown-toggle active" data-toggle="dropdown" >Services</a>
                        </li>
                        <li class="dropdown">
                            <a href="/team" class="dropdown-toggle active" data-toggle="dropdown" >Team</a>
                        </li>  
                        <li class="dropdown">
                            <a href="/blog" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h4 class="title"><a href="/about">About Us</a></h4>
                    <p>
                        Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind.
                    </p>
                </div>
                <div class="widget address">
                    <h4 class="title">Office Location</h4>
                    <ul>
                        <li>
                            <i class="fas fa-phone"></i>
                            +123 456 7890
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            California, TX 70240
                        </li>
                        <li>
                            <i class="fas fa-envelope-open"></i>
                            info@yourdomain.com
                        </li>
                    </ul>
                </div>
                <div class="widget opening-hours">
                    <h4>Opening Hours</h4>
                    <ul>
                        <li>
                            Mon - Fri <span>9:00 - 21:00</span>
                        </li>
                        <li>
                            Saturday <span>10:00 - 16:00</span>
                        </li>
                    </ul>
                </div>
                <div class="widget social">
                    <h4 class="title">Connect With Us</h4>
                    <ul class="link">
                        <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->
    @if ($message = Session::get('message'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif