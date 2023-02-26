@extends('frontend.layouts.default')
@section('content')

    <!-- Start Site Title 
    ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light" style="background-image: url({{asset("frontend/assets/img/2440x1578.png")}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog Standard</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Site Title -->

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="/home"><i class="fas fa-home"></i></a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="active">Standard</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog blog-standard default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-10 col-md-offset-1">
                        
                        <!-- Single Item -->
                        <div class="single-item">
                            <div class="item">
                                <div class="thumb">
                                    <a href="#"><img src={{asset("frontend/assets/img/1500x700.png")}} alt="Thumb"></a>
                                </div>
                                <div class="info">
                                    <div class="date">
                                        <h4>12 Nov, 2019</h4>
                                    </div>
                                    <h4>
                                        <a href="#">delivered applauded affection out Peculiar trifling</a>
                                    </h4>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fas fa-user"></i> Admin</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        Families believed if no elegance interest surprise an. It abode wrong miles an so delay plate. She relation own put outlived may disposed. Two indeed suffer saw beyond far former mrs remain. 
                                    </p>
                                    <a class="btn btn-theme border btn-md" href="/blog_detail">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item">
                            <div class="item">
                                <div class="thumb">
                                    <a href="#"><img src={{asset("frontend/assets/img/1500x700.png")}} alt="Thumb"></a>
                                </div>
                                <div class="info">
                                    <div class="date">
                                        <h4>16 Apr, 2019</h4>
                                    </div>
                                    <h4>
                                        <a href="#">Peculiar trifling absolute and wandered</a>
                                    </h4>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fas fa-user"></i> Admin</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-comments"></i> 32 Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        Families believed if no elegance interest surprise an. It abode wrong miles an so delay plate. She relation own put outlived may disposed. Two indeed suffer saw beyond far former mrs remain.
                                    </p>
                                    <a class="btn btn-theme border btn-md" href="/blog_detail">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item">
                            <div class="item">
                                <div class="thumb">
                                    <a href="#"><img src={{asset("frontend/assets/img/1500x700.png")}} alt="Thumb"></a>
                                </div>
                                <div class="info">
                                    <div class="date">
                                        <h4>29 Aug, 2019</h4>
                                    </div>
                                    <h4>
                                        <a href="#">Furniture Furnished On Remainder Engrossed.</a>
                                    </h4>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fas fa-user"></i> Admin</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-comments"></i> 32 Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        Families believed if no elegance interest surprise an. It abode wrong miles an so delay plate. She relation own put outlived may disposed. Two indeed suffer saw beyond far former mrs remain.
                                    </p>
                                    <a class="btn btn-theme border btn-md" href="/blog_detail">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        
                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li><a href="#"><i class="fas fa-long-arrow-alt-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

@stop