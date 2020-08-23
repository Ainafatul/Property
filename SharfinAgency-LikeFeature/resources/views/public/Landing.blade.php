@extends('layout.Main')

@section('content')
    <link rel="stylesheet" href="{{asset('lib/bootstrap/OwlCarousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('lib/bootstrap/OwlCarousel/dist/assets/owl.theme.default.min.css')}}">
    <div>
        <!-- banner -->
        <section>
            <div class="container-fluid px-0">
                <div>
                    <img class="img-banner d-block img-fluid " style="width: 100%"
                         src="https://www.realestate.com.au/assets/img/hero/hero-buy.f65276612f8efbf90f31cda7c595e4f0.jpg"
                         alt="">
                </div>
                <!-- form cari properti -->
                <div class="row mx-auto">
                    <div class="item col-12 col-lg-6 mx-auto">
                        <div class="card card-banner ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-body text-center">
                                        <h4 class="font-weight-bold text-white">Temukan Tempat Tinggal Idaman Anda</h4>
                                        <form class="text-center" method="get" action="{{route('FilterProperty')}}">
                                            <div class="row mx-auto py-3">
                                                <div class="col-9">
                                                    <input class="form-control form-tanya rounded-pill pl-4" type="text"
                                                           id="location" autocomplete="off" name="location"
                                                           placeholder="Lokasi berdasarkan Kota/Kab"
                                                           aria-label="Search">
                                                </div>
                                                <div class="col-3">
                                                    <input
                                                        class="btn btn-banner btn-light btn-md mr-5 px-4 px-xl-5 mb-2 rounded-pill"
                                                        type="submit"
                                                        value="Cari">
                                                </div>
                                            </div>
                                            <!-- Example single danger button -->
                                            <div class="row mx-auto">
                                                <div class="col-4">
                                                    <select class="custom-select" name="type">
                                                        <option
                                                            @if(isset($_GET['type']) && $_GET['type'] == 'Beli') selected
                                                            @endif value="Beli">Beli
                                                        </option>
                                                        <option
                                                            @if(isset($_GET['type']) && $_GET['type'] == 'Sewa') selected
                                                            @endif value="Sewa">Sewa
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-input">
                                                        <input class="form-control" type="text"
                                                               placeholder="Minimal Harga" name="minPrice"
                                                               value="@if(isset($_GET['minPrice'])) {{(int)$_GET['minPrice']}} @endif">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-input">
                                                        <input class="form-control" type="text"
                                                               placeholder="Maksimal Harga" name="maxPrice"
                                                               value="@if(isset($_GET['maxPrice'])) {{(int)$_GET['maxPrice']}} @endif">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- akhir form cari properti -->
            </div>
        </section>
        <!-- akhir banner -->


        <!-- Rekomendasi -->
        <section class="section-rekomendasi">
            <!-- <div id="rectangle-putih"></div> -->
            <div class="container py-4">
                <div class="row">
                    <div class="col">
                        <h3 class="tittle">Rekomendasi</h3>
                    </div>
                    <div class="col text-right">
                        <a href="{{route('PropertyFilter',['type'=>'Beli'])}}"
                           class="btn btn-lainnya btn-sm btn-secondary rounded-pill px-3">Lainnya <i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="row" style="margin-top: 18px">
                    <!-- item -->
                    @foreach(\App\Http\Controllers\PropertyController::RecommendedProperty() as $data)
                        <div class="col-xl-4" style="margin-bottom: 12px">
                            <div class="card">
                                <a href="{{route('PropertyDetail',['id'=>$data->property->id])}}" class="item">
                                    <div class="row">
                                        <div class="col-5 p-0">
                                            <img src="{{asset($data->property->main_image)}}" class="w-100" alt=""
                                                 style="object-fit: cover;height: 150px">
                                        </div>
                                        <div class="col-7" style="padding-top: 16px">
                                            <h5 class=""
                                                style="color: #1c7430;height: 38px">{{$data->property->name}}</h5>
                                            <h6 class="alamat text-muted">{{\App\Http\Controllers\HelperController::parseLocation($data->property->location)}}</h6>
                                            <br>
                                            <h5 class="card-title "@if($data->property->isSell!=null){{\App\Http\Controllers\Controller::format(\App\PropertySell::find($data->property->isSell)->price)}}
                                            @else {{\App\Http\Controllers\Controller::format(\App\PropertyRent::find($data->property->isRent)->price)}} @endif
                                            @if($data->property->isRent!=null)
                                                / {{\App\PropertyRent::find($data->property->isRent)->timeType}} @endif</h5>
                                                <div class="row" style="padding-left: 8px;padding-right: 8px">
                                                    <div class="col item spek  p-0">
                                                        <i class="fas fa-bed"> {{$data->property->bed_room}}</i>
                                                    </div>
                                                    <div class="col item spek p-0">
                                                        <i class="fas fa-shower"> {{$data->property->bath_room}}</i>
                                                    </div>
                                                    <div class="col item spek p-0">
                                                        <i class="fas fa-expand-arrows-alt"> {{$data->property->land_area}}
                                                            m<sup>2</sup></i>
                                                    </div>
                                                    <div class="col item spek p-0">
                                                        <i class="fas fa-building"> {{$data->property->stories}} lt</i>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <br>
        </section>
        <br><br>
        <!-- akhir Rekomendasi -->


        <!-- fitur -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 class="tittle pb-3 text-dark text-center mb-5">Fitur Sharfin Agency</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="item col-6 mb-1 col-lg-3 p-1 text-center">
                        <figure class="figure figure-portofolio text-center">
                            <img src="{{asset('lib/bootstrap/img/sold.svg')}}"
                                 class="figure-img img-fluid icon-fitur mb-3" alt="">
                            <figcaption class="figure-caption text-dark">
                                <h6 class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                                    provident debitis, eveniet molestias cupiditate
                                    esse!</h6>
                            </figcaption>
                        </figure>
                        <hr class="mx-5 mt-4" style="border-width: 2px;">
                    </div>
                    <div class="item col-6 mb-1 col-lg-3 p-1 text-center">
                        <figure class="figure figure-portofolio text-center">
                            <img src="{{asset('lib/bootstrap/img/sold.svg')}}"
                                 class="figure-img img-fluid icon-fitur mb-3" alt="">
                            <figcaption class="figure-caption text-dark">
                                <h6 class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium
                                    laudantium sunt natus nisi illo
                                    voluptatibus.</h6>
                            </figcaption>
                        </figure>
                        <hr class="mx-5 mt-4" style="border-width: 2px;">
                    </div>
                    <div class="item col-6 mb-1 col-lg-3 p-1 text-center">
                        <figure class="figure figure-portofolio text-center">
                            <img src="{{asset('lib/bootstrap/img/sold.svg')}}"
                                 class="figure-img img-fluid icon-fitur mb-3" alt="">
                            <figcaption class="figure-caption text-dark">
                                <h6 class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro
                                    provident quidem non repellat sapiente
                                    exercitationem.</h6>
                            </figcaption>
                        </figure>
                        <hr class="mx-5 mt-4" style="border-width: 2px;">
                    </div>
                    <div class="item col-6 mb-1 col-lg-3 p-1 text-center">
                        <figure class="figure figure-portofolio text-center">
                            <img src="{{asset('lib/bootstrap/img/sold.svg')}}"
                                 class="figure-img img-fluid icon-fitur mb-3" alt="">
                            <figcaption class="figure-caption text-dark">
                                <h6 class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt
                                    perspiciatis perferendis, repudiandae ea culpa
                                    voluptas.</h6>
                            </figcaption>
                        </figure>
                        <hr class="mx-5 mt-4" style="border-width: 2px;">
                    </div>
                </div>
            </div>
        </section>
        <br>
        <!-- akhir fitur -->


        <!-- Properti Terbaru -->
        <section class="terbaru-section">
            <div class="container py-4">
                <div class="row">
                    <div class="col">
                        <h3 class="tittle">Property Terbaru</h3>
                    </div>
                    <div class="col text-right">
                        <a href="{{route('PropertyFilter',['type'=>'Beli'])}}"
                           class="btn btn-lainnya btn-sm rounded-pill btn-secondary px-3">Lainnya <i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="row">
                    <!-- item -->
                    @foreach( \App\Http\Controllers\Controller::getNewProperty() as $property)
                        <div class="item col-md-6 mb-1 col-lg-3 p-1 px-sm-2 px-lg-2 px-xl-3">
                            <div class="card mx-auto terbaru-card">
                                <a href="{{route('PropertyDetail',['id'=>$property->id])}}" class="item">
                                    <img src="{{asset($property->main_image)}}"
                                         class="img-fluid terbaru-img d-block mx-auto" alt="gambar 1"
                                         style="height: 200px">
                                    <div class="label label-card pl-2"><p
                                            style="font-size: 14px">{{$property->category}}</p></div>
                                    <div class="card-body ">
                                        <h6 class="card-subtitle mb-2" style="height: 32px">{{$property->name}}</h6>
                                        <h6 class="card-subtitle alamat text-muted limit-2"
                                            style="height: 32px">{{\App\Http\Controllers\HelperController::parseLocation($property->location)}}</h6>
                                        <br>
                                        <h6 class="card-subtitle alamat text-muted limit-2"
                                            style="height: 32px">{{$property->address}}</h6><br>
                                        <h5 class="card-title mb-2">@if($property->isSell!=null){{\App\Http\Controllers\Controller::format(\App\PropertySell::find($property->isSell)->price)}}
                                            @else {{\App\Http\Controllers\Controller::format(\App\PropertyRent::find($property->isRent)->price)}} @endif
                                            @if($property->isRent!=null)
                                                / {{\App\PropertyRent::find($property->isRent)->timeType}} @endif</h5>
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

                    @endforeach
                </div>
            </div>
            <br>
        </section>
        <br>
        <!-- akhir Properti terbaru -->


        <!-- tanya properti -->
        <section class="tanyaproperti-selection">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 my-auto">
                        <div class="row">
                            <div class="col text-center">
                                <br>
                                <h3 class="tanyaproperti-title text-dark text-light mb-3">Tanya Properti</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h6 class="py-2 text-dark text-justify">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Explicabo, et. Quam maiores
                                    voluptatem fugit itaque quidem consectetur, vitae, vero in temporibus ab nihil quos
                                    deserunt?</h6>
                            </div>
                        </div>
                        <div class="row py-3">
                            <div class="col mx-auto px-0">
                                <form class="text-center">
                                    <input class="form-control form-tanya rounded-pill mx-auto" style="width: 90%;"
                                           type="text" placeholder="Tulis Pertanyaan"
                                           aria-label="Search">
                                    <input
                                        class="btn btn-tanya text-white btn-md login mx-auto px-4 px-xl-5 my-2 rounded-pill btn-secondary"
                                        type="submit"
                                        value="Kirim">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- slider -->
                    <div id="carouselId" class="carousel slide mb-5 col-12 col-lg-6 my-auto" data-ride="carousel">
                        <!-- form cari properti -->

                        <!-- akhir form cari properti -->
                        <ol class="carousel-indicators">
                            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselId" data-slide-to="1"></li>
                            <li data-target="#carouselId" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-slider d-block img-fluid" src="{{asset('lib/bootstrap/img/1.jpg')}}"
                                     alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="img-slider d-block img-fluid" src="{{asset('lib/bootstrap/img/2.jpg')}}"
                                     alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="img-slider d-block img-fluid" src="{{asset('lib/bootstrap/img/3.jpg')}}"
                                     alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <!-- akhir tanya properti -->


        <!-- portofolio -->
        <section class="section-portofolio">
            <div class="container py-3">
                <hr class="pb-3" style="border-width: 2px;">
                <div class="row">
                    <div class="col">
                        <h3 class="tittle pb-3 text-dark text-center mb-3">Kami Telah Melayani</h3>
                    </div>
                </div>
                <!-- item -->
                <div class="row">
                    <div class="item col-6 mb-1 col-lg-3 p-1 text-center">
                        <figure class="figure figure-portofolio text-center">
                            <img src="{{asset('lib/bootstrap/img/sold.svg')}}"
                                 class="figure-img img-fluid icon mb-3" alt="">
                            <figcaption class="figure-caption text-dark">
                                <h4 class="jumlah">{{\App\Http\Controllers\AdminController::PropertyHistory(true)}}</h4>
                                <h5 class="mb-0">Property Terjual</h5>
                            </figcaption>
                        </figure>
                        <hr class="mx-5 mt-2" style="border-width: 2px;">
                    </div>
                    <div class="item col-6 mb-1 col-lg-3 p-1 text-center">
                        <figure class="figure figure-portofolio text-center">
                            <img src="{{asset('lib/bootstrap/img/rent.svg')}}"
                                 class="figure-img img-fluid icon mb-3" alt="">
                            <figcaption class="figure-caption text-dark">
                                <h1 class="jumlah">{{\App\Http\Controllers\AdminController::PropertyHistory(false)}}</h1>
                                <h5 class="mb-0">Property Disewa</h5>
                            </figcaption>
                        </figure>
                        <hr class="mx-5 mt-2" style="border-width: 2px;">
                    </div>
                    <div class="item col-6 mb-1 col-lg-3 p-1 text-center">
                        <figure class="figure figure-portofolio text-center">
                            <img src="{{asset('lib/bootstrap/img/consulting.svg')}}"
                                 class="figure-img img-fluid icon mb-3" alt="">
                            <figcaption class="figure-caption text-dark">
                                <h1 class="jumlah">500</h1>
                                <h5 class="mb-0">Orang Berkonsultasi</h5>
                            </figcaption>
                        </figure>
                        <hr class="mx-5 mt-2" style="border-width: 2px;">
                    </div>
                    <div class="item col-6 mb-1 col-lg-3 p-1 text-center">
                        <figure class="figure figure-portofolio text-center">
                            <img src="{{asset('lib/bootstrap/img/agent.svg')}}"
                                 class="figure-img img-fluid icon mb-3" alt="">
                            <figcaption class="figure-caption text-dark">
                                <h1 class="jumlah">{{\App\Http\Controllers\AdminController::AgentHistory()}}</h1>
                                <h5 class="mb-0">Agen</h5>
                            </figcaption>
                        </figure>
                        <hr class="mx-5 mt-2" style="border-width: 2px;">
                    </div>

                </div>
            </div>
        </section>
        <!-- akhir portofolio -->


        <!-- berita dan artikel -->
        <section>
            <div id="rectangle-kuning"></div>
            <div class="container py-5">
                <div class="row">
                    <div class="col">
                        <h3 class="artikel-label text-dark">Berita dan Artikel</h3>
                    </div>
                    <div class="col text-right">
                        <a href="{{route('Articles')}}" class="btn btn-lainnya btn-sm rounded-pill btn-secondary px-3">Lainnya
                            <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="row">
                    <!-- item -->
                    @foreach(\App\Http\Controllers\Controller::getLatestArticle() as $article)
                        <div class="artikel-item col-6 mb-1 col-lg-4">
                            <a href="{{route('Article',['id'=>$article->id])}}">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset($article->image)}}" style="height: 200px"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title" style="min-height: 38px">{{$article->title}}</h5>
                                        <p class="card-text"
                                           style="font-size: 12pt;max-lines: 8 ;color: black">{{$article->content}}</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Created : {{$article->created_at}}</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <style>
                        p {
                            overflow: hidden;
                            text-overflow: ellipsis;
                            display: -webkit-box;
                            line-height: 16px; /* fallback */
                            max-height: 64px; /* fallback */
                            -webkit-line-clamp: 4; /* number of lines to show */
                            -webkit-box-orient: vertical;
                        }
                    </style>
                </div>
            </div>
        </section>
        <!-- akhir berita dan artikel -->


        <!-- testimoni -->

        <section class="section-testimoni">
            <div class="container my-3">
                <div class="row text-center">
                    <div class="col-3 text-right quote-title">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="col-6 my-auto">
                        <h3 class="testimoni-title">Cerita Mereka</h3>
                    </div>
                    <div class="col-3 text-left quote-title">
                        <i class="fas fa-quote-right"></i>
                    </div>
                </div>
                <!-- item -->
                <div class="owl-carousel owl-theme">
                    @php($datas = \App\Review::all())
                    @foreach($datas as $data)
                        <div class="item">
                            <figure class="figure testimoni-figure">
                                <div class="row mx-3 ">
                                    <div class="col-4 mt-3 text-center ">
                                        <img src="{{asset($data->image)}}" class="img-testimoni">
                                    </div>
                                    <div class="col-6 my-auto pl-0">
                                        <h6 class="testimoni-nama mt-4 mb-0 font-weight-bold">{{$data->name}}</h6>
                                        <p class="testimoni-pekerjaan mx-auto text-muted" style="font-size: small;">
                                            Programmer</p>
                                    </div>
                                    <div class="quote-item col-2 pl-0 my-auto">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <figcaption class="figure-caption">
                                            <div class="figure-caption text-dark text-justify px-3 pt-2">
                                                <p><span class="quote">"</span> {{$data->message}}<span
                                                        class="font-weight-bold quote">"</span></p>
                                            </div>
                                        </figcaption>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    @endforeach
                </div>
                <!-- akhir item -->
            </div>
        </section>
        <br><br>

        <br><br>
        <!-- akhir testimoni -->


        <!-- berlangganan -->
        <section class="langganan-section">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <br>
                        <h3 class="tanyaproperti-title text-dark text-light mb-3 mt-0 mt-lg-5">Dapatkan Informasi
                            Terbaru Dari Kami</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto">
                        <h5 class="py-2 text-dark text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Explicabo, et. Quam maiores voluptatem
                            fugit
                            itaque quidem consectetur, vitae, vero in temporibus ab nihil quos deserunt?</h5>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-12 col-lg-10 mx-auto px-0">
                        <form class="text-center" method="post" action="{{route('onNewsLetterSubscriber')}}">
                            @csrf
                            <div>
                                <input required class="form-control form-tanya rounded-pill mx-auto" style="width: 90%;"
                                       name="email"
                                       type="email" placeholder="Masukkan Email Anda"
                                       aria-label="Search">
                            </div>
                            <div>
                                @if($errors->first()!='')
                                    <div class="alert alert-danger mx-auto px-5 my-2 rounded-pill mb-0 mb-lg-5"
                                         role="alert">{{$errors->first()}}</div>
                                @endif
                                <button
                                    class="btn btn-tanya btn-secondary btn-md login mx-auto px-5 my-2 rounded-pill mb-0 mb-lg-5"
                                    type="submit">Kirim
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- akhir berlangganan -->


        <!-- map -->
        <section>
            <div class="container-fluid p-0">
                <iframe class="d-block mx-auto map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.2627099531546!2d112.61367841432852!3d-7.971778381671958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78834d8f852a43%3A0x5f103ebad0b38246!2sgadai%20syariah%20office!5e0!3m2!1sen!2sid!4v1592989497891!5m2!1sen!2sid"></iframe>
            </div>
        </section>
        <!-- akhir map -->

    </div>
@endsection


<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="{{asset('lib/bootstrap/OwlCarousel/dist/owl.carousel.min.js')}}" type="text/javascript"></script>

<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel();
    });
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            }
        }
    })

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

</script>


