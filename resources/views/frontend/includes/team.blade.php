    <!-- Start Team 
    ============================================= -->
    <div class="team-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Meet Our Teams</h2>
                        <span class="devider"></span>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-items text-center">
                    <!-- Single Item -->
                    @foreach($teams as $team)
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <div class="top-img">
                                    <img src={{asset('images/'.$team->image)}} alt="Thumb">
                                </div>
                                <div class="overlay">
                                    <ul>
                                        <li class="facebook">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                        </li>
                                        <li class="google-plus">
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <div class="overlay">
                                    <h4>{{$team->fullname}}</h4>
                                </div>
                                <span>{{$team->job}} / <strong>Mc Ins.</strong></span>
                                <p>
                                    {{$team->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team -->