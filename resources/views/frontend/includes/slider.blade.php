<!-- Start Banner
    ============================================= -->
    <div class="banner-area auto-height title-uppercase small-first text-light text-center">
    <div id="bootcarousel" class="carousel inc-top-heading slide carousel-fade animate_text" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner carousel-zoom">
            @foreach ($sliders as $slider)
                <div class="item {{ $loop->first ? 'active' : '' }} ">
                    <div class="slider-thumb bg-cover"
                    style="background-image: url({{asset('images/'.$slider->image)}})"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="content">
                                            <h3 data-animation="animated slideInDown">{{ $slider->title }}</h3>
                                            <h1 data-animation="animated slideInRight">{{ $slider->description }}
                                            </h1>
                                            <a data-animation="animated slideInUp" class="btn btn-light border btn-md"
                                                href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- End Wrapper for slides -->

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#bootcarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>

    </div>
</div>
<!-- End Banner -->
