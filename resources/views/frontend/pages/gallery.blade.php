@extends('frontend.layouts.default')
@section('content')

    <!-- Start Site Title 
    ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light" style="background-image: url({{asset("frontend/assets/img/2440x1578.png")}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Gallery Grid Colum</h1>
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
                        <li><a href="#">Gallery</a></li>
                        <li class="active">Grid</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Gallery
    ============================================= -->
    <div class="gallery-area default-padding">
        <div class="container">
            <div class="gallery-items-area text-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mix-item-menu text-center">
                            <button class="active" data-filter="*">All</button>
                            @foreach($categories as $category )
                            <button data-filter=".{{$category->title}}">{{$category->title}}</button>
                            @endforeach
                        </div>
                        <!-- End Mixitup Nav-->

                        <div class="row text-center masonary">
                            <div id="portfolio-grid" class="gallery-items col-2">
                                <!-- Single Item -->
                                @foreach($portfolios as $portfolio)
                                <div class="pf-item {{$portfolio->category->title}}">
                                    <div class="item">
                                        <a href="#">
                                            <img src={{asset('images/'.$portfolio->image)}} alt="Thumb">
                                            <div class="item-inner">
                                                <h4>{{$portfolio->title}}</h4>
                                                <p>{{$portfolio->description}}</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                                <!-- End Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->
@stop