@extends('layout.Main')

@section('content')
    <section>
        <div id="rectangle-kuning"></div>
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <h3 class="artikel-label text-dark">Panduan dan Refensi</h3>
                </div>
            </div>
            <div class="row">
                @foreach ($datas ?? '' as $guideline)
                    <div class="artikel-item col-6 mb-1 col-lg-4" style="padding-bottom: 24px">
                        <a class="w-100" href="{{route('GuideLine',['id'=>$guideline->id])}}">
                            <div class="card">
                                <img class="card-img-top" src="{{asset($guideline->image)}}" style="height: 200px" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title" style="min-height: 38px">{{$guideline->title}}</h5>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Created : {{$guideline->created_at}}</small>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- akhir berita dan artikel -->
@endsection
