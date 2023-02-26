    <!-- Start Services
    ============================================= -->
    <div class="services-area thumb-less default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>What we offer</h2>
                        <span class="devider"></span>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="services-items">
                    <!-- Single Item -->
                    @foreach($services as $serv)
                    <div class="single-item col-md-4 col-sm-6">
                        <div class="item">
                            <h4>{{$serv->title}}</h4>
                            <p>
                               {{$serv->description}}
                            </p>
                            <div class="icon">
                                <i class="{{$serv->logo}}"></i>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>

    <!-- End Services -->