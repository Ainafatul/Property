@extends('layout.Main')

@section('content')
    @php($author = \App\Admin::find($article->author))
    <div id="rectangle-kuning"></div>
    <div class="container py-5">
        <div class="row">
            <!-- item -->
            <div class="col">
                <div class="row">
                    <div class="col-10 mx-auto">
                        <h1 class="judul">{{$article->title}}</h1>
                        <h6 class="d-block mt-3"><i>{{$author->name}}</i></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 mx-auto">
                        <p class="artikel-tgl text-secondary"><i class="far fa-calendar-alt"></i> {{$article->created_at}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 mx-auto text-center">
                        <img src="{{asset($article ->image)}}" style="height: auto; width: auto" class="text-center rounded img-artikel mb-5 mt-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 mx-auto">
                        <div class="paragraf-artikel">
                            {{$article->content}}
                        </div>
                    </div>
                </div>
                <!-- akhir artikel -->

                <!-- berita terkait -->
                <div class="row mt-5">
                    <div class="col-10 mx-auto mt-5">
                        <div class="row">
                            <div class="col">
                                <h5 class="artikel-label text-dark text-center mb-3">Berita Terbaru</h3>
                            </div>
                        </div>
                        <div class="row">
                            @foreach(\App\Http\Controllers\Controller::getLatestArticle() as $article)
                                <div class="artikel-item col-6 mb-1 col-lg-4">
                                    <a href="{{route('Article',['id'=>$article->id])}}">
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
                        <!-- akhir berita dan artikel -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
