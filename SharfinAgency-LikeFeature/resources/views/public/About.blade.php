@extends('layout.Main')

@section('content')
    <div id="rectangle-kuning"></div>
    <div class="container py-5">
        <div class="row">
            <!-- item -->
            @foreach($about as $data)
            <div class="col">
                <div class="row">
                    <div class="col-10 mx-auto">
                        <h1 class="judul">{{$data->title}}</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 mx-auto text-center">
                        <img src="{{asset($data ->image)}}" class="text-center rounded img-artikel mb-5 mt-4" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 mx-auto">
                        <div class="paragraf-artikel">
                            {{$data->content}}
                        </div>
                    </div>
                </div>
                <!-- akhir artikel -->
            </div>
            @endforeach
        </div>
    </div>
@endsection
