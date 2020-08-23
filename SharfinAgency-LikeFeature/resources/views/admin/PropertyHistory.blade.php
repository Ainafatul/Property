@extends('layout.Admin')
@section('content')
    <div class="single-slider slider-height2 d-flex align-items-center" style="min-height: 500px;background: #15AC97">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                    <div class="hero__caption">
                        <h1>Riwayat</h1>
                        <p>Ut enim ad minim
                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat is
                            aute irure.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                    <div class="hero__img" data-animation="bounceIn" data-delay=".4s" style="animation-delay: 0.4s;">
                        <img src="assets/img/hero/watch.png" alt="" class=" heartbeat">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="id">
        <div class="container container-md">
            <div class="row" style="margin-top: 100px">
                <div class="col-lg-3">
                    <div class="overview-item overview-item--c1">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="text">
                                    <span>Agent Terdaftar</span>
                                    <h4>{{\App\Http\Controllers\AdminController::AgentHistory()}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="overview-item overview-item--c2">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="text">
                                    <span>Property Terjual</span>
                                    <h4>{{\App\Http\Controllers\AdminController::PropertyHistory(true)}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="overview-item overview-item--c3">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="text">
                                    <span>Property Disewa</span>
                                    <h4>{{\App\Http\Controllers\AdminController::PropertyHistory(false)}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="overview-item overview-item--c4">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="text">
                                    <span>Total Property Terjual</span>
                                    <h4>{{\App\Http\Controllers\Controller::format(\App\Http\Controllers\AdminController::PriceCount()[0])}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="overview-item overview-item--c4">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="text">
                                    <span>Total Property Disewa</span>
                                    <h4>{{\App\Http\Controllers\Controller::format(\App\Http\Controllers\AdminController::PriceCount()[1])}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                google.charts.load('current', {'packages': ['corechart']});
                google.charts.setOnLoadCallback(drawChart);


                function drawChart() {
                    $.getJSON('http://127.0.0.1:8000/AgentChart', function (data) {
                        console.log(data)
                        var data = google.visualization.arrayToDataTable(data);

                        var options = {
                            title: 'Company Performance',
                            curveType: 'function',
                            legend: {position: 'bottom'}
                        };

                        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                        chart.draw(data, options);
                    })
                }

            </script>
            <script>
                google.charts.load('current', {'packages': ['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                    $.getJSON('http://127.0.0.1:8000/PropertyChart', function (data) {
                        console.log(data)
                        var data = google.visualization.arrayToDataTable(data);

                        var options = {
                            title: 'Property Chart',
                            curveType: 'function',
                            legend: {position: 'bottom'}
                        };

                        var chart = new google.visualization.LineChart(document.getElementById('property_chart'));

                        chart.draw(data, options);
                    })
                }
            </script>
            <body>
            <div id="curve_chart" style="width: 900px; height: 500px"></div>
            <br>
            <div id="property_chart" style="width: 900px; height: 500px"></div>
            </body>
        </div>
    </div>
@endsection
