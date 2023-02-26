@extends('frontend.layouts.default')
@section('content')

    <!-- Start Site Title 
    ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light" style="background-image: url({{asset("frontend/assets/img/2440x1578.png")}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Best Pricing</h1>
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
                        <li class="active">Pricing</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    @include('frontend.includes.pricing_table')


@stop