@extends('layout.Main')

@section('content')
    <div>
        <section class="filter-menu">

            <div class="container py-4 ">
                <form action="{{route('PropertyFilter')}}" method="GET">
                    <div class="row ">
                        <div class="col-4 p-0">
                            <div class="form-input">
                                <input id="location" class="form-control" autocomplete="off" type="text" name="location"
                                       placeholder="Lokasi berdasarkan Kota/Kab">
                            </div>
                        </div>
                        <div class="col-2 p-0">
                            <select class="custom-select" name="type">
                                <option @if(isset($_GET['type']) && $_GET['type'] == 'Beli') selected
                                        @endif value="Beli">Beli
                                </option>
                                <option @if(isset($_GET['type']) && $_GET['type'] == 'Sewa') selected
                                        @endif value="Sewa">Sewa
                                </option>
                            </select>
                        </div>
                        <div class="col-3 p-0">
                            <div class="form-input">
                                <input class="form-control" type="text" placeholder="Harga Min"
                                       value="@if(isset($_GET['minPrice'])) {{(int)$_GET['minPrice']}} @endif"
                                       name="minPrice">
                            </div>
                        </div>
                        <div class="col-3 p-0">
                            <div class="form-input">
                                <input class="form-control" type="text" placeholder="Harga Max"
                                       value="@if(isset($_GET['maxPrice'])) {{(int)$_GET['maxPrice']}} @endif"
                                       name="maxPrice">
                            </div>
                        </div>
                        <div class="col-4 p-0">
                            <select class="custom-select" name="km">
                                <option @if(isset($_GET['km']) && $_GET['km'] == 0) selected @endif value="0">Kamar
                                    Mandi
                                </option>
                                <option @if(isset($_GET['km']) && $_GET['km'] == 99) selected @endif value="99">Semua
                                </option>
                                <option @if(isset($_GET['km']) && $_GET['km'] == 1) selected @endif value="1">1 Kamar
                                    Mandi
                                </option>
                                <option @if(isset($_GET['km']) && $_GET['km'] == 2) selected @endif value="2">2 Kamar
                                    Mandi
                                </option>
                                <option @if(isset($_GET['km']) && $_GET['km'] == 3) selected @endif value="3">3 Kamar
                                    Mandi
                                </option>
                                <option @if(isset($_GET['km']) && $_GET['km'] == 4) selected @endif value="4">4 Kamar
                                    Mandi
                                </option>
                                <option @if(isset($_GET['km']) && $_GET['km'] == 5) selected @endif value="5">5 Kamar
                                    Mandi
                                </option>
                                <option @if(isset($_GET['km']) && $_GET['km'] == 6) selected @endif value="6">6 Kamar
                                    Mandi
                                </option>
                            </select>
                        </div>
                        <div class="col-4 p-0">
                            <select class="custom-select" name="kamar">
                                <option @if(isset($_GET['kamar']) && $_GET['kamar'] == 0) selected @endif  value="0">
                                    Kamar Tidur
                                </option>
                                <option @if(isset($_GET['kamar']) && $_GET['kamar'] == 99) selected @endif  value="99">
                                    Semua
                                </option>
                                <option @if(isset($_GET['kamar']) && $_GET['kamar'] == 1) selected @endif  value="1">1
                                    Kamar Tidur
                                </option>
                                <option @if(isset($_GET['kamar']) && $_GET['kamar'] == 2) selected @endif  value="2">2
                                    Kamar Tidur
                                </option>
                                <option @if(isset($_GET['kamar']) && $_GET['kamar'] == 3) selected @endif  value="3">3
                                    Kamar Tidur
                                </option>
                                <option @if(isset($_GET['kamar']) && $_GET['kamar'] == 4) selected @endif  value="4">4
                                    Kamar Tidur
                                </option>
                                <option @if(isset($_GET['kamar']) && $_GET['kamar'] == 5) selected @endif  value="5">5
                                    Kamar Tidur
                                </option>
                                <option @if(isset($_GET['kamar']) && $_GET['kamar'] == 6) selected @endif  value="6">6
                                    Kamar Tidur
                                </option>
                            </select>
                        </div>
                        <div class="col-4 p-0">
                            <select class="custom-select" name="land">
                                <option @if(isset($_GET['land']) && $_GET['land'] == 0) selected @endif  value="0">Luas
                                    Tanah
                                </option>
                                <option @if(isset($_GET['land']) && $_GET['land'] == 99) selected @endif  value="99">
                                    Semua
                                </option>
                                <option @if(isset($_GET['land']) && $_GET['land'] == 50) selected @endif  value="50">50
                                    m<sup>2</sup>
                                </option>
                                <option @if(isset($_GET['land']) && $_GET['land'] == 100) selected @endif  value="100">
                                    100 m<sup>2</sup>
                                </option>
                                <option @if(isset($_GET['land']) && $_GET['land'] == 200) selected @endif  value="200">
                                    200 m<sup>2</sup>
                                </option>
                                <option @if(isset($_GET['land']) && $_GET['land'] == 300) selected @endif  value="300">
                                    300 m<sup>2</sup>
                                </option>
                                <option @if(isset($_GET['land']) && $_GET['land'] == 400) selected @endif  value="400">
                                    400 m<sup>2</sup>
                                </option>
                                <option @if(isset($_GET['land']) && $_GET['land'] == 500) selected @endif  value="500">
                                    500 m<sup>2</sup>
                                </option>
                                <option @if(isset($_GET['land']) && $_GET['land'] == 9999) selected
                                        @endif  value="9999">>500
                                </option>
                            </select>
                        </div>
                        <div class="row mx-auto mt-3 ">
                            <div class="col ">
                                <input class="btn rounded-pill btn-secondary btn-lainnya px-5" type="submit"
                                       value="Cari">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section class="">

            <div class="container py-4">
                <div class="row">
                    <div class="col">
                        <h3 class="tittle">Property </h3>
                    </div>
                    {{--                    <div class="col-2 text-right">--}}
                    {{--                        <select class="custom-select">--}}
                    {{--                            <option value="1">Filter</option>--}}
                    {{--                            <option value="2">Harga Terrendah</option>--}}
                    {{--                            <option value="3">Harga Tertinggi</option>--}}
                    {{--                            <option value="4">Tanah Terluas</option>--}}
                    {{--                            <option value="5">Tanah Terkecil</option>--}}
                    {{--                            <option value="6">Terbaru</option>--}}
                    {{--                            <option value="7">Terlama</option>--}}
                    {{--                        </select>--}}
                    {{--                    </div>--}}
                </div>
                <!-- item -->
                @foreach($properties as $property)
                    <div class="row">
                        <div class="item col mb-1 p-1 ">
                            <div class="card card-jual">
                                <a href="{{route('PropertyDetail',['id'=>$property->id])}}" class="item-jual">
                                    <div class="row ">
                                        <div class="col-4 my-auto">
                                            <img src="{{asset($property->main_image)}}"
                                                 class="img-fluid img-jual d-block mx-auto w-100" alt="gambar 1"
                                                 style="object-fit: cover">
                                        </div>
                                        <div class="col-lg-5 col-4 pl-0 my-auto">
                                            <div class="card-body pl-0">
                                                <h5 class="card-subtitle judul-jual mb-2 disingkat">{{$property->name}}</h5>
                                                <h5 class="card-subtitle alamat-jual text-secondary mb-xl-2 mb-sm-3 mb-0 disingkat">{{\App\Http\Controllers\HelperController::parseLocation($property->location)}}</h5>
                                                <h6 class="card-subtitle alamat-jual text-secondary mb-xl-2 mb-sm-3 mb-0 disingkat">{{$property->address}}</h6>
                                                <br>
                                                <h5 class="card-title-jual mb-2">@if($property->isSell!=null){{\App\Http\Controllers\Controller::format(\App\PropertySell::find($property->isSell)->price)}}
                                                    @else {{\App\Http\Controllers\Controller::format(\App\PropertyRent::find($property->isRent)->price)}} @endif
                                                    @if($property->isRent!=null)
                                                        / {{\App\PropertyRent::find($property->isRent)->timeType}} @endif</h5>
                                                <div class="row spesifikasi-jual" style="margin-left: 16px">
                                                    <ul class="disingkat row w-100">
                                                        <li class="item spek col-3">
                                                            <i class="fas fa-bed"> {{$property->bed_room}}</i>
                                                        </li>
                                                        <li class="item spek col-3">
                                                            <i class="fas fa-shower">{{$property->bath_room}}</i>
                                                        </li>
                                                        <li class="item spek col-3">
                                                            <i class="fas fa-expand-arrows-alt">{{$property->land_area}}
                                                                m<sup>2</sup></i>
                                                        </li>
                                                        <li class="item spek col-3">
                                                            <i class="fas fa-building">{{$property->stories}} lt</i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="label label-jual mt-3 mt-sm-4 mb-0" style="width: 200px">
                                                    <p class="pl-2 py-0">@if($property->isSell != null)
                                                            Dijual @endif @if($property->isSell != null && $property->isRent != null)
                                                            & @endif @if($property->isRent != null) Disewakan @endif</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-lg-3 col-4">
                                            <div class="card py-2 card-jual-agen bg-light ">
                                                <figure class="figure figure-portofolio text-center my-auto">
                                                    @php($agent = \App\Agent::find($property->agent))
                                                    <img src="{{asset($agent->picture)}}"
                                                         class="figure-img img-fluid img-jual-agen icon-fitur mb-2">
                                                    <h6 class="card-subtitle mb-2 disingkat">{{$agent->name}}</h6>
                                                    <h6 class="card-subtitle alamat text-secondary disingkat ">{{$agent->agency}}</h6>
                                                    <br>
                                                    <hr class="mx-0 mt-0 mb-2" style="border-width: 2px;">
                                                    <div class="row mx-0 mx-sm-1">
                                                        <div class="col-12 ">
                                                            <form
                                                                action="
                                                                @if(\App\Http\Controllers\PropertyController::like($property->id)){{route('onUnliked')}}
                                                                @else {{route('onLiked')}} @endif">
                                                                <input value="{{$property->id}}" name='id' hidden>
                                                                <button type="submit" class="btn btn-sm
                                                                @if(\App\Http\Controllers\PropertyController::like($property->id)) {{'btn-danger'}}
                                                                @else {{'btn-outline-danger'}} @endif px-1 px-lg-3 py-sm-1 btn-block"
                                                                        style="margin-bottom: 4px"><i
                                                                        class="far fa-heart"> </i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="col-12 ">
                                                            <button type="button"
                                                                    class="btn disingkat btn-sm btn-nomoragen btn-info px-1 px-lg-3 py-sm-1 btn-block"
                                                                    href="landingpage.html"><i
                                                                    class="fas fa-phone-alt"> </i> {{$agent->phone}}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <br>
        </section>
        <br><br>
    </div>
@endsection
@push('scripts')
    var path = "{{ route('loc') }}";
    $('#location').typeahead({
    source: function (query, process) {
    return $.get(path, {query: query}, function (data) {
    return process(data);
    });
    }
    });
@endpush
