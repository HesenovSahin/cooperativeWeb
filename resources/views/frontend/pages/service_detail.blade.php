@extends('frontend.layouts.default')
@section('content')

    <!-- Start Site Title 
    ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light" style="background-image: url({{asset("frontend/assets/img/2440x1578.png")}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Services Details</h1>
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
                        <li><a href="#">Services</a></li>
                        <li class="active">Single</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Services Single
    ============================================= -->
    <div class="services-single-area default-padding">
        <div class="container">
            <div class="row">
                <div class="services-info col-md-8">
                    <img src={{asset("frontend/assets/img/1500x700.png")}} alt="Thumb">
                    <h2>Financial Planning</h2>
                    <p>
                        Calling observe for who pressed raising his. Can connection instrument astonished unaffected his motionless preference. Announcing say boy precaution unaffected difficulty alteration him. Above be would at so going heard. Engaged at village at am equally proceed. Settle nay length almost ham direct extent. Agreement for listening remainder get attention law acuteness day. Now whatever surprise resolved elegance indulged own way outlived.
                    </p>
                    <h4><i class="fas fa-check"></i> Challenge:</h4>
                    <p>
                        On on produce colonel pointed. Just four sold need over how any. In to september suspicion determine he prevailed admitting. On adapted an as affixed limited on. Giving cousin warmly things no spring mr be abroad. Relation breeding be as repeated strictly followed margaret. One gravity son brought shyness waiting regular led ham. 
                    </p>
                    <h4><i class="fas fa-check"></i> Solution:</h4>
                    <p>
                        Improving age our her cordially intention. His devonshire sufficient precaution say preference middletons insipidity. Since might water hence the her worse. Concluded it offending dejection do earnestly as me direction. Nature played thirty all him.
                    </p>
                    <h4><i class="fas fa-check"></i> Result and client benefits:</h4>
                    <p>
                        Depending acuteness dependent eat use dejection. Unpleasing astonished discovered not nor shy. Morning hearted now met yet beloved evening. Has and upon his last here must. 
                    </p>
                    <a href="#" class="btn btn-theme border btn-md"><i class="fas fa-file-pdf"></i> Download PDF</a>
                </div>
                <div class="sidebar col-md-4">
                    <!-- Single Item -->
                    <div class="sidebar-item link">
                        <div class="title">
                            <h4>Services</h4>
                        </div>
                        <ul>
                            <li><a href="#">Investment Planning</a></li>
                            <li><a href="#">Mutual Funds</a></li>
                            <li class="active"><a href="#">Financial Planning</a></li>
                            <li><a href="#">Saving & Investments</a></li>
                            <li><a href="#">Markets Research</a></li>
                            <li><a href="#">Report Analysis</a></li>
                        </ul>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="sidebar-item address">
                        <div class="title">
                            <h4>Need Help?</h4>
                        </div>
                        <ul>
                            <li>
                                <div class="icon"><i class="fas fa-map-marked-alt"></i></div> 
                                <span>22 Baker Street,<br> London, United Kingdom,<br> W1U 3BW</span>
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-phone"></i></div> 
                                <span>+44-20-7328-4499 <br>+99-34-8878-9989</span>
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-envelope-open"></i> </div>
                                <span>info@yourdomain.com<br>admin@yourdomain.com</span>
                            </li>
                        </ul>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="sidebar-item project">
                        <div class="title">
                            <h4>Services Details</h4>
                        </div>
                        <ul>
                            <li><span>Clients Name:</span> Jonathom Mark</li>
                            <li><span>Location:</span> 22 Baker Street</li>
                            <li><span>Completion dates:</span> 16 Dec, 2019</li>
                            <li><span>Advisor:</span> Mark Henri</li>
                        </ul>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Single -->

@stop