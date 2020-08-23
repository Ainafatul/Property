@extends('layout.Admin')
@section('content')
    <div class="single-slider slider-height2 d-flex align-items-center" style="min-height: 500px;background: #15AC97">
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
    <div id="container">
        <div class="container container-md">
            <div style="padding-bottom: 100px;padding-top: 50px">
                <div class="card m-lg-auto" style="padding: 24px 64px">
                    <table class="table">
                        <thead class="thead-dark">
                        <h2>Portofolio</h2>
                        <br>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Dijual</th>
                            <th scope="col">Disewa</th>
                            <th scope="col">Konsultasi</th>
                            <th scope="col">Agent</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $no= 1; @endphp
                        @foreach ($datas as $data )
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->sold}}</td>
                                <td>{{$data->leased}}</td>
                                <td>{{$data->consult}}</td>
                                <td>{{$data->agent}}</td>
                                <td><a href="{{route('UpdatePortofolio',['id'=>$data->id])}}" class="btn btn-primary">Update</a></td>
                                <td><a href="{{route('DeletePortofolio',['id'=>$data->id])}}" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
