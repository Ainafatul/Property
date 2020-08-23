<!-- berita dan artikel -->
@extends('layout.Main')

@section('content')
    <section class="filter-menu">
        <form action="{{route('AgentFilter')}}" method="get">
            <div class="container py-4 ">
                <div class="row px-2">
                    <div class="col">
                        <div class="form-input">
                            <input class="form-control" type="text" name="agency" placeholder="Agensi">
                        </div>
                    </div>
                    <div class="col-2 px-2">
                        <input class="btn btn-secondary btn-lainnya px-2 px-md-4 px-lg-5 " type="submit" value="Cari">
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- akhir filter -->

    <!-- list jual -->
    <section class="">
        <div class="container py-4">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="row">
                        <div class="col">
                            <h3 class="tittle">Agen</h3>
                        </div>
                    </div>
                    <!-- item -->
                    @foreach($agents as $agent) @if($agent->approve != null)
                        <div class="row">
                            <div class="item col mb-2 p-1 ">
                                <div class="card card-agen">
                                    <a href="{{route('AgentDetail',['id'=>$agent->id])}}" class="item-agen">
                                        <div class="row">
                                            <div class="col-12 col-sm-8 my-auto">
                                                <div class="row ">
                                                    <div
                                                        class="col-4 col-sm-5 col-md-4 col-lg-3 my-auto text-center py-3 py-sm-0">
                                                        <img src="{{asset($agent->picture)}}"
                                                             class="figure-img img-fluid img-agen icon-fitur">
                                                    </div>
                                                    <div class="col-8 col-sm-7 col-md-8 col-lg-9 my-auto  ">
                                                        <h5 class="card-subtitle mb-2 disingkat">{{$agent->name}}</h5>
                                                        <h6 class="card-subtitle small text-dark disingkat ">{{$agent->agency}}</h6>
                                                        <br>
                                                        <h6 class="card-subtitle disingkat ">{{count(\App\Property::where('agent',$agent->id)->get())}}
                                                            Listing
                                                            Property</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4 mt-auto">
                                                <div class="card py-2 card-nomor-agen bg-light ">
                                                    <figure class="figure figure-portofolio text-center my-auto mx-3 ">
                                                        <p class="mb-1">Hubungi</p>
                                                        <button type="button"
                                                                class="btn disingkat btn-sm btn-nomoragen btn-info px-1 px-lg-3 py-sm-1 btn-block">
                                                            <i class="fas fa-phone-alt"> </i> {{$agent->phone}}
                                                        </button>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
