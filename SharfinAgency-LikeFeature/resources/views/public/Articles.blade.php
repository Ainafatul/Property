@extends('layout.Main')

@section('content')
    <section>
        <div id="rectangle-kuning"></div>
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <h3 class="artikel-label text-dark">Berita dan Artikel</h3>
                </div>
            </div>
            <div class="row">
                @foreach ($datas ?? '' as $article)
                    <div class="artikel-item col-6 mb-1 col-lg-4" style="padding-bottom: 24px">
                        <a class="w-100" href="{{route('Article',['id'=>$article->id])}}">
                            <div class="card">
                                <img class="card-img-top" src="{{asset($article->image)}}" style="height: 200px" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title" style="min-height: 38px">{{$article->title}}</h5>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Created : {{$article->created_at}}</small>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- akhir berita dan artikel -->

    <!-- berlangganan -->
    <section class="langganan-section">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <br>
                    <h3 class="tanyaproperti-title text-dark text-light mb-3 mt-0 mt-lg-5">Dapatkan Informasi Terbaru Dari Kami</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <h5 class="py-2 text-dark text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, et. Quam maiores voluptatem
                        fugit
                        itaque quidem consectetur, vitae, vero in temporibus ab nihil quos deserunt?</h5>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-12 col-lg-10 mx-auto px-0">
                    <form class="text-center" method="post" action="{{route('onNewsLetterSubscriber')}}">
                        @csrf
                        <div>
                            <input required class="form-control form-tanya rounded-pill mx-auto" style="width: 90%;" name="email"
                                   type="email" placeholder="Masukkan Email Anda"
                                   aria-label="Search">
                        </div>
                        <div>
                            @if($errors->first()!='')
                                <div class="alert alert-danger mx-auto px-5 my-2 rounded-pill mb-0 mb-lg-5" role="alert">{{$errors->first()}}</div>
                            @endif
                            <button
                                class="btn btn-tanya btn-secondary btn-md login mx-auto px-5 my-2 rounded-pill mb-0 mb-lg-5"
                                type="submit">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
