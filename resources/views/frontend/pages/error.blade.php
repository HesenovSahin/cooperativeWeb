@extends('frontend.layouts.default')
@section('content')

    <!-- Start Site Title 
    ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light" style="background-image: url({{asset("frontend/assets/img/2440x1578.png")}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Error Page</h1>
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
                        <li><a href="#">Pages</a></li>
                        <li class="active">404</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start 404 
    ============================================= -->
    <div class="error-page-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="thumb">
                        <img src={{asset("frontend/assets/img/not-found.svg")}} alt="Thumb">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="error-box">
                        <h1>4<i class="fas fa-sad-tear"></i>4</h1>
                        <h2>Sorry Page Was Not Found!</h2>
                        <p>
                            Household shameless incommode at no objection behaviour. Especially do at he possession insensible sympathize boisterous it. Songs he on an widen me event truth. Certain law age brother sending amongst why covered. 
                        </p>
                        <div class="search">
                            <div class="input-group">
                                <form action="#">
                                    <input type="text" placeholder="Search" class="form-control" name="text">
                                    <button type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End 404 -->

@stop