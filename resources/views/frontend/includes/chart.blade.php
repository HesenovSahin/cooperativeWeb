    <!-- Start Chart Box 
    ============================================= -->
    @foreach($charts as $chart)
    <div class="chart-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 default info">
                    <h2>{{$chart->title}}</h2>
                    <p>
                        {{$chart->description}}
                    </p>
                    <div class="fun-facts">
                        <div class="row">
                            <div class="col-md-4 item">
                                <div class="fun-fact">
                                    <div class="timer" data-to="{{$chart->locations}}" data-speed="5000"></div>
                                    <span class="medium">Global Locations</span>
                                </div>
                            </div>
                            <div class="col-md-4 item">
                                <div class="fun-fact">
                                    <div class="timer" data-to="{{$chart->consultants}}" data-speed="5000"></div>
                                    <span class="medium">Consultants</span>
                                </div>
                            </div>
                            <div class="col-md-4 item">
                                <div class="fun-fact">
                                    <div class="timer" data-to="{{$chart->projects}}" data-speed="5000"></div>
                                    <span class="medium">Successfull Projects</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="lineChart">
                        <canvas id="lineChart" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- End Chart Box -->