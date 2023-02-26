    <!-- Start Blog Area 
    ============================================= -->
    <div class="blog-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Latest News</h2>
                        <span class="devider"></span>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-items">
                    <!-- Single Item -->
                    @foreach( $blogs as $blog)
                    <div class="col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src={{asset('images/'.$blog->image)}} alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="date">
                                    <h4>{{$blog->created_at->format('d M Y')}}</h4>
                                </div>
                                <h4>
                                    <a href="#">{{$blog->title}}</a>
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
                                    {{$blog->description}}
                                </p>
                                <a class="btn btn-theme border btn-md" href="/blog_detail">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->