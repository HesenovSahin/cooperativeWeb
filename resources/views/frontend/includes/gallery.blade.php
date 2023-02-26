    <!-- Start Gallery
    ============================================= -->
    <div class="gallery-area bg-gray default-padding">
        <div class="container">
            <div class="gallery-items-area text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="site-heading text-center">
                            <h2>Complate Cases</h2>
                            <span class="devider"></span>
                            <p>
                                While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mix-item-menu text-center">
                            <button class="active" data-filter="*">All</button>
                            @foreach($categories as $category)
                            <button data-filter=".{{$category->title}}">{{$category->title}}</button>
                            @endforeach
                        </div>
                        <!-- End Mixitup Nav-->

                        <div class="row text-center masonary">
                            <div id="portfolio-grid" class="gallery-items col-3">
                                <!-- Single Item -->
                                @foreach ( $portfolios as $portfolio)
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