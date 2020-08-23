@extends('layout.Admin')
@section('content')
<section>
    <div id="rectangle-kuning"></div>
    <div class="container py-5">
        <div class="row">
            <div class="item col mb-2 p-1 ">
                <div class="card card-detail-agen mx-2 mx-sm-0">
                    <div class="row">
                        <div class="col-12 mt-auto">
                            <div class="row">
                                <div class="col-5 col-md-4 col-lg-3 my-auto text-center py-3">
                                    <img src="{{asset($agent->picture)}}" class="figure-img img-fluid img-detail-agen icon-fitur ml-2 ml-sm-0" style="width: 100%; height: auto;">
                                </div>
                                <div class="col my-auto subtitle-agen ">
                                    <h4 class="card-subtitle mb-3 disingkat">{{$agent->name}}</h4>
                                    <h6 class="card-subtitle text-dark disingkat ">{{$agent->agency}}</h6><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-auto">
                            <div class="card py-2 card-detail-nomoragen bg-light ">
                                <figure class="figure figure-portofolio my-auto mx-3 ">
                                    <p class="mb-1">Hubungi</p>
                                    <button type="button" class="btn disingkat btn-sm btn-nomoragen btn-info px-4 py-sm-1 ">
                                        <i class="fas fa-phone-alt"> </i> {{$agent->phone}}
                                    </button>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- akhir berita dan artikel -->

<!-- detail -->
<section class="product-description pb-5">
    <div class="container mb-0">
        <div class="row">
            <div class="col">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
                    </li>
                </ul>
                <div class="tab-content p-3" id="myTabContent">
                    <div class="tab-pane fade show active product-review" id="detail" role="tabpanel"
                         aria-labelledby="detail-tab">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="row">
                                    <div class="col">
                                        <p class="small mb-1 text-secondary">Jabatan</p>
                                        <p class="mb-0 text-dark">{{$agent->job}}</p>
                                        <hr class=" mt-1" style="border-width: 1px;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="small mb-1 text-secondary">Jenis Kelamin</p>
                                        <p class="mb-0 text-dark">{{\App\Http\Controllers\HelperController::parseGender($agent->gender)}}</p>
                                        <hr class=" mt-1" style="border-width: 1px;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="small mb-1 text-secondary">Tanggal Lahir</p>
                                        <p class="mb-0 text-dark">{{$agent->birth_date}}</p>
                                        <hr class=" mt-1" style="border-width: 1px;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="small mb-1 text-secondary">Alamat</p>
                                        <p class="mb-0 text-dark">{{$agent->address}}</p>
                                        <hr class=" mt-1" style="border-width: 1px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <hr class="mt-0" style="border-width: 2px;">
    </div>
</section>
@endsection
