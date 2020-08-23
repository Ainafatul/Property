@extends('layout.Main')

@section('content')
    <section>
        <div id="rectangle-kuning"></div>
        <div class="container pb-5">
            <div class="card ">
                <div class="row">
                    <div class="col my-auto">
                        <div class="bg-dark">
                            <!-- slider -->
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    @foreach(explode(',',$property->image) as $image)
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                            class="@if(explode(',',$property->image)[0] == $image) active @endif"></li>
                                    @endforeach
                                </ol>
                                <div class="carousel-inner ">
                                    @foreach(explode(',',$property->image) as $image)
                                        <div
                                            class="carousel-item @if(explode(',',$property->image)[0] == $image) active @endif"
                                            style="height: 500px;object-fit: cover">
                                            <img src="{{asset($image)}}" class="d-block mx-auto img-detail" alt="...">
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                   data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                   data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- akhir slider -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-9 my-auto">
                        <div class="card-body pl-3">
                            <div class="card-body pl-0">
                                <h5 class="card-subtitle judul-jual mb-2 disingkat">{{$property->name}}</h5>
                                <h6 class="card-subtitle alamat-jual text-secondary mb-xl-2 mb-sm-3 mb-0 disingkat">{{\App\Http\Controllers\HelperController::parseLocation($property->location)}}</h6>
                                <h6 class="card-subtitle alamat-jual text-secondary mb-xl-2 mb-sm-3 mb-0 disingkat">{{$property->address}}</h6>
                                <br>
                                <h5 class="card-title-jual mb-2">@if($property->isSell!=null){{\App\Http\Controllers\Controller::format(\App\PropertySell::find($property->isSell)->price)}}
                                    @else {{\App\Http\Controllers\Controller::format(\App\PropertyRent::find($property->isRent)->price)}} @endif
                                    @if($property->isRent!=null) / {{\App\PropertyRent::find($property->isRent)->timeType}} @endif</h5>
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
                    </div>
                    <div class="item col-lg-3 col-4">
                        <div class="card py-2 card-jual-agen bg-light ">
                            <figure class="figure figure-portofolio text-center my-auto">
                                @php($agent = \App\Agent::find($property->agent))
                                <img src="{{asset($agent->picture)}}"
                                     class="figure-img img-fluid img-jual-agen icon-fitur mb-2">
                                <h6 class="card-subtitle mb-2 disingkat">{{$agent->name}}</h6>
                                <h6 class="card-subtitle alamat text-secondary disingkat ">{{$agent->agency}}</h6><br>
                                <hr class="mx-0 mt-0 mb-2" style="border-width: 2px;">
                                <div class="row mx-0 mx-sm-1">
                                    <div class="col-12 mb-2">
                                        <form
                                            action="@if(\App\Http\Controllers\PropertyController::like($property->id)){{route('onUnliked')}}
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
            </div>
        </div>
    </section>
    <!-- akhir berita dan artikel -->

    <!-- detail -->
    <section class="product-description p-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="detail-tab" data-toggle="tab" href="#detail" role="tab"
                               aria-controls="detail" aria-selected="true">Detail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="deskripsi-tab" data-toggle="tab" href="#deskripsi" role="tab"
                               aria-controls="deskripsi"
                               aria-selected="false">Deskripsi</a>
                        </li>
                    </ul>
                    <div class="tab-content p-3" id="myTabContent">
                        <div class="tab-pane fade show active product-review" id="detail" role="tabpanel"
                             aria-labelledby="detail-tab">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-1 text-secondary">Tipe</p>
                                            <p class="mb-0 text-dark">{{$property->category}}</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-1 text-secondary">Jumlah Kamar Mandi</p>
                                            <p class="mb-0 text-dark">{{$property->bath_room}}</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-1 text-secondary">Jumlah Kamar Tidur</p>
                                            <p class="mb-0 text-dark">{{$property->bed_room}}</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-1 text-secondary">Jumlah Lantai</p>
                                            <p class="mb-0 text-dark">{{$property->stories}}</p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-1 text-secondary">Luas Tanah</p>
                                            <p class="mb-0 text-dark">{{$property->land_area}} m<sup>2</sup></p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="small mb-1 text-secondary">Luas Bangunan</p>
                                            <p class="mb-0 text-dark">{{$property->building_area}} m<sup>2</sup></p>
                                            <hr class=" mt-1" style="border-width: 1px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade product-review" id="deskripsi" role="tabpanel"
                             aria-labelledby="deskripsi-tab">
                            <p>{{$property->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="pb-3" style="border-width: 2px;">
        </div>
    </section>
    <!-- akhir detail -->

    <!-- property terkait -->
    <section class="terbaru-section">
        <div class="container py-4">
            <div class="row">
                <div class="col">
                    <h3 class="tittle">Property Terkait</h3>
                </div>
                <div class="col text-right">
                    <a href="{{route('PropertyFilter',['type'=>'Beli'])}}" class="btn btn-lainnya btn-sm rounded-pill btn-secondary px-3">Lainnya <i
                            class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="row">
                <!-- item -->
                @php($i = 0)
                @foreach(\App\Property::where('agent',$agent->id)->get() as $property)
                    @if($i <4)
                        <div class="item col-md-6 mb-1 col-lg-3 p-1 px-sm-2 px-lg-2 px-xl-3">
                            <div class="card mx-auto terbaru-card">
                                <a href="{{route('PropertyDetail',['id'=>$property->id])}}" class="item">
                                    <img src="{{asset($property->main_image)}}"
                                         class="img-fluid terbaru-img d-block mx-auto" alt="gambar 1"
                                         style="height: 200px">
                                    <div class="label label-card pl-2"><p style="font-size: 14px">{{$property->category}}</p></div>
                                    <div class="card-body ">
                                        <h6 class="card-subtitle mb-2" style="height: 32px">{{$property->name}}</h6>
                                        <h6 class="card-subtitle alamat text-muted limit-2"
                                            style="height: 32px">{{\App\Http\Controllers\HelperController::parseLocation($property->location)}}</h6><br>
                                        <h6 class="card-subtitle alamat text-muted limit-2"
                                            style="height: 32px">{{$property->address}}</h6><br>
                                        <h5 class="card-title mb-2">@if($property->isSell!=null){{\App\Http\Controllers\Controller::format(\App\PropertySell::find($property->isSell)->price)}}
                                            @else {{\App\Http\Controllers\Controller::format(\App\PropertyRent::find($property->isRent)->price)}} @endif
                                            @if($property->isRent!=null) / {{\App\PropertyRent::find($property->isRent)->timeType}} @endif</h5>
                                        <div class="row spesifikasi w-100" style="margin-left: 0;margin-bottom: 0px">
                                            <li class="col-3 item spek">
                                                <i class="fas fa-bed">{{'  '.$property->bed_room}}</i>
                                            </li>
                                            <li class="col-3 item spek">
                                                <i class="fas fa-shower">{{'  '.$property->bath_room}}</i>
                                            </li>
                                            <li class="col-3 item spek">
                                                <i class="fas fa-expand-arrows-alt"> {{$property->land_area}}
                                                    m<sup>2</sup></i>
                                            </li>
                                            <li class="col-3 item spek">
                                                <i class="fas fa-building"> {{$property->stories}} lt</i>
                                            </li>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @php($i++)
                    @endif
                @endforeach
            </div>
        </div>
        <br>
    </section>
@endsection
