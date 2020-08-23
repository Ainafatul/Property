@extends('layout.Admin')

@section('content')
    <div class="single-slider slider-height2 d-flex align-items-center" style="min-height: 500px;background: #15AC97">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                    <div class="hero__caption">
                        <h1>Select Your New Perfect Style</h1>
                        <p>Ut enim ad minim
                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat is aute irure.</p>
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


    <div id="container">
        <div class="container container-md">
            <div class="row">
                @foreach($agents as $agent) @if($agent->approve != null)
                    <div class="col-lg-3">
                        <div class="card" style="margin-bottom: 24px">
                            <img src="{{asset($agent->picture)}}" class="card-img-top"
                                 alt="..." style="height: 350px">
                            <div class="card-body">
                                <h5 class="card-title">{{$agent->name}}</h5>
                                <p class="card-text">{{$agent->agency}}</p>
                            </div>
                        </div>
                    </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
