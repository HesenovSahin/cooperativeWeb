@extends('frontend.layouts.default')
@section('content')


    <!-- Start Site Title 
    ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light" style="background-image: url({{asset("frontend/assets/img/2440x1578.png")}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>About Us</h1>
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
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start About
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 thumb">
                    <img src={{asset("frontend/assets/img/800x800.png")}} alt="Thumb">
                </div>
                <div class="col-md-8 tabs-items">
                    <div class="row">

                        <div class="tab-navs col-md-4">
                            <!-- Tab Nav -->
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                        <i class="flaticon-story"></i> Our Story
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                        <i class="flaticon-shield"></i> Audit & Assurance
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                        <i class="flaticon-support-1"></i> 24/7 Live Support
                                    </a>
                                </li>
                            </ul>
                            <!-- End Tab Nav -->
                        </div>

                        <div class="tab-content-box col-md-8">
                            <!-- Start Tab Content -->
                            <div class="tab-content tab-content-info">
                                <!-- Single Item -->
                                <div id="tab1" class="tab-pane fade active in">
                                    <div class="info title">
                                        <h4>Has been working since 2000</h4>
                                        <h2>We Have 35+ Years Of Experiance In Standard Professional Services</h2>
                                        <p>
                                            However venture pursuit he am mr cordial. Forming musical am hearing studied be luckily. Ourselves for determine attending how led gentleman sincerity. Valley afford uneasy joy she thrown though bed set.
                                        </p>
                                        <p>
                                             Friendship so considered remarkably be to sentiments. Offered mention greater fifteen one promise because nor. Why denoting speaking fat indulged saw dwelling raillery. 
                                        </p>
                                        <a class="btn btn-theme border btn-md" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- End Single Item -->

                                <!-- Single Item -->
                                <div id="tab2" class="tab-pane fade">
                                    <div class="info title">
                                        <h3>We offer creative business</h3>
                                        <p>
                                            Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless. 
                                        </p>
                                        <p>
                                            Proposal its disposed eat advanced marriage sociable. Drawings led greatest add subjects endeavor gay remember. Principles one yet assistance you met impossible. 
                                        </p>
                                        <ul>
                                            <li><i class="fas fa-check-circle"></i> Professional Workers</li>
                                            <li><i class="fas fa-check-circle"></i> Consumer satisfaction</li>
                                            <li><i class="fas fa-check-circle"></i> Transport & Logistics</li>
                                            <li><i class="fas fa-check-circle"></i> Financial Services</li>
                                            <li><i class="fas fa-check-circle"></i> Energy Environment</li>
                                            <li><i class="fas fa-check-circle"></i> Business Services </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Item -->

                                <!-- Single Item -->
                                <div id="tab3" class="tab-pane fade">
                                    <div class="info title">
                                        <h3>Ask your question to us</h3>
                                        <p>
                                            Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed.  Friendship so considered remarkably be to sentiments.
                                        </p>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td>info@example.com</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Phone</td>
                                                        <td>+123 456 7890</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PO Box</td>
                                                        <td>1622 Colins Street West</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->

                            </div>
                            <!-- End Tab Content -->
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    @include('frontend.includes.process')




    @include('frontend.includes.service_v2')

@include('frontend.includes.team')

    @stop