@extends('frontend.layouts.default')

@section('content')



    <!-- Start Site Title
                                        ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light"
        style="background-image: url({{ asset('frontend/assets/img/2440x1578.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog Single</h1>
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
                        <li><a href="/home"><i class="fas fa-home"></i> </a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li class="active">Standard</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
                                        ============================================= -->
                                        @foreach( $blogs as $blog)
    <div class="blog-area single full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-10 col-md-offset-1">
                        <div class="item">

                            <!-- Start Post Thumb -->
                            <div class="thumb">
                                <img src={{asset('images/'.$blog->image)}} alt="Thumb">
                            </div>
                            <!-- Start Post Thumb -->

                            <div class="info">
                                <div class="date">
                                    <h4>{{$blog->created_at->format('d M Y')}}</h4>
                                </div>
                                <h3>{{$blog->title}}</h3>
                                <p>
                                {{$blog->description}}
                                </p>
                                <p>
                                {{$blog->content}}
                                </p>

                          

                                <!-- Start Post Tag s-->
                                <div class="post-tags share">
                                    <div class="tags">
                                        <span>Tags: </span>
                                        <a href="#">{{$blog->category->title}}</a>
                                    </div>
                                </div>
                                <!-- End Post Tags -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="row">
                            <div class="d-flex justify-content-center">{!! $blogs->links() !!}</div>
                        </div>

    <!-- End Blog -->

@stop
