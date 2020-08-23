@extends('layout.Admin')

@section('content')
    <div class="single-slider slider-height2 d-flex align-items-center" style="margin-bottom: 128px;min-height: 500px;background: #15AC97">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                    <div class="hero__caption">
                        <h1>Testimoni</h1>
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
    <div id="id">
        <div class="container container-md">
            <div class="card-columns">
                @foreach($datas as $data)
                    <div class="card">
                        <img class="card-img-top" src="{{asset($data->image)}}" style="height: 200px" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="min-height: 18px">{{$data->name}}</h5>
                            <p class="card-title" style="font-size: 12pt;max-lines: 8 ">{{$data->job}}</p>
                            <p class="card-text" style="font-size: 12pt;max-lines: 8 ">{{$data->message}}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Created : {{$data->created_at}}</small>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <style>
        div {
            position: relative;
            overflow: hidden;
        }

        p {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            line-height: 16px;     /* fallback */
            max-height: 64px;      /* fallback */
            -webkit-line-clamp: 4; /* number of lines to show */
            -webkit-box-orient: vertical;
        }
    </style>
@endsection
