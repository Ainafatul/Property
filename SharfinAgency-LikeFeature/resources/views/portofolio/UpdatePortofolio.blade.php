@extends('layout.Admin')

@section('content')
    <div class="single-slider slider-height2 d-flex align-items-center" style="margin-bottom: 128px;min-height: 500px;background: #15AC97">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                    <div class="hero__caption">
                        <h1>Portofolio</h1>
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
        <form action="{{route('onUpdatePortofolio',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container container-md">
                @if($errors->first()!='')
                    <div class="alert alert-danger" role="alert">{{$errors->first()}}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title m-0">About Creator</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <input name="author" value="{{$auth->account->id}}" hidden>
                            <div class="form-group col-md-4">
                                <label class="w-100">ID
                                    <input type="text" class="form-control w-100" value="{{$auth->account->id}}" disabled>
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="w-100">Email
                                    <input type="text" class="form-control w-100" value="{{$auth->account->email}}" disabled>
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="w-100">Name
                                    <input type="text" class="form-control w-100" value="{{$auth->user->name}}" disabled>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title m-0">About</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="w-100">Dijual
                                    <input type="number" class="form-control w-100" name="sold" value="{{$data->sold}}">
                                </label>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="w-100">Disewa
                                    <input type="number" class="form-control w-100" name="leased" value="{{$data->leased}}">
                                </label>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="w-100">Konsultasi
                                    <input type="number" class="form-control w-100" name="consult" value="{{$data->consult}}">
                                </label>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="w-100">Agen
                                    <input type="number" class="form-control w-100" name="agent" value="{{$data->agent}}">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <input  type="submit" class="btn btn-primary" value="Update">
            </div>
        </form>
    </div>
    <style>
        .card {
            margin-bottom: 48px;
        }

        div {
            position: relative;
            overflow: hidden;
        }

        #fileuploads {
            position: absolute;
            font-size: 50px;
            opacity: 0;
            right: 0;
            top: 0;
        }
    </style>
@endsection
