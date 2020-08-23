@extends('layout.Agent')

@section('content')
    <div class="single-slider slider-height2 d-flex align-items-center"
         style="margin-bottom: 128px;min-height: 500px;background: #15AC97">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                    <div class="hero__caption">
                        <h1>My Property</h1>
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
            <div class="row">
                @foreach($datas as $data)
                    @if($data->isSell != null)
                        <div class="item col-md-6 mb-1 col-lg-3 p-1 px-sm-2 px-lg-2 px-xl-3">
                            <div class="card mx-auto terbaru-card">
                                <a href="#" class="item">
                                    <img src="{{asset($data->main_image)}}"
                                         class="img-fluid terbaru-img d-block mx-auto" alt="gambar 1"
                                         style="height: 200px">
                                    <div class="label label-card pl-2"><p
                                            style="font-size: 14px">{{$data->category}}</p></div>
                                    <div class="card-body ">
                                        <h6 class="card-subtitle mb-2" style="height: 32px">{{$data->name}}</h6>
                                        <h6 class="card-subtitle alamat text-muted limit-2"
                                            style="height: 32px">{{\App\Http\Controllers\HelperController::parseLocation($data->location)}}</h6>
                                        <br>
                                        <h6 class="card-subtitle alamat text-muted limit-2"
                                            style="height: 32px">{{$data->address}}</h6><br>
                                        <h5 class="card-title mb-2">@if($data->isSell!=null){{\App\Http\Controllers\Controller::format(\App\PropertySell::find($data->isSell)->price)}}
                                            @else {{\App\Http\Controllers\Controller::format(\App\PropertyRent::find($data->isRent)->price)}} @endif
                                            @if($data->isRent!=null)
                                                / {{\App\PropertyRent::find($data->isRent)->timeType}} @endif</h5>
                                        <div class="row spesifikasi w-100" style="margin-left: 0;margin-bottom: 0px">
                                            <li class="col-3 item spek">
                                                <i class="fas fa-bed">{{$data->bed_room}}</i>
                                            </li>
                                            <li class="col-3 item spek">
                                                <i class="fas fa-shower">{{$data->bath_room}}</i>
                                            </li>
                                            <li class="col-3 item spek">
                                                <i class="fas fa-expand-arrows-alt"> {{$data->land_area}} m<sup>2</sup></i>
                                            </li>
                                            <li class="col-3 item spek">
                                                <i class="fas fa-building"> {{$data->stories}} lt</i>
                                            </li>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <style>
        .limit-2 {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            line-height: 16px; /* fallback */
            max-height: 64px; /* fallback */
            -webkit-line-clamp: 2; /* number of lines to show */
            -webkit-box-orient: vertical;
        }
    </style>
@endsection




