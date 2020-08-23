@extends('layout.Agent')
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
<div>
    <div id="id">
        <div class="container container-md">
            <div class="row" style="margin-top: 100px">
                <div class="col-lg-3">
                    <div class="overview-item overview-item--c1">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="text">
                                    <span>Property Terjual</span>
                                    <h4>{{\App\Http\Controllers\AgentController::PropertyHistory(true)}}</h4>
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
                                    <span>Property Disewa</span>
                                    <h4>{{\App\Http\Controllers\AgentController::PropertyHistory(false)}}</h4>
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
                                    <span>Total Property Terjual</span>
                                    <h4>{{\App\Http\Controllers\Controller::format(\App\Http\Controllers\AgentController::PriceCount()[0])}}</h4>
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
                                    <h4>{{\App\Http\Controllers\Controller::format(\App\Http\Controllers\AgentController::PriceCount()[1])}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
