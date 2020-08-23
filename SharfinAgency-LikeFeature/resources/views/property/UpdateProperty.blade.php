@extends('layout.Agent')

@section('content')
    <div class="single-slider slider-height2 d-flex align-items-center" style="min-height: 500px;background: #15AC97">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                    <div class="hero__caption">
                        <h1>Select Your New Perfect Style</h1>
                        <p>Ut enim ad minim
                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat is aute irure.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                </div>
            </div>
        </div>
    </div>

    <form action="{{route('onUpdateProperty',['id'=> $data->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div id="container">
            <div class="container container-md">
                @if($errors->first()!='')
                    <div class="alert alert-danger" role="alert">{{$errors->first()}}</div>
                @endif
                <div class="card" style="margin-top: 24px">
                    <h5 class="card-header">Data Diri</h5>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-4">Agent ID
                                <input type="text" class="form-control text-center" value="{{$auth->account->id}}" disabled>
                            </label>
                            <label class="col-md-4">Email
                                <input type="text" class="form-control text-center" value="{{$auth->account->email}}" disabled>
                            </label>
                            <label class="col-md-4">Agency
                                <input type="text" class="form-control text-center" value="{{$auth->user->agency}}" disabled>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card" style="margin-top: 24px">
                    <h5 class="card-header">Data Property</h5>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="w-100">Nama
                                    <input type="text" class="form-control w-100" name="name" value="{{$data->name}}">
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="w-100">Jumlah Lantai
                                    <input type="number" class="form-control w-100" name="stories" value="{{$data->stories}}">
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="w-100">Jumlah Kamar Mandi
                                    <input type="number" class="form-control w-100" name="bath_room" value="{{$data->bath_room}}">
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="w-100">Jumlah Kamar Tidur
                                    <input type="number" class="form-control w-100" name="bed_room" value="{{$data->bed_room}}">
                                </label>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="w-100">Luas Tanah
                                    <input type="number" class="form-control w-100" name="land_area" value="{{$data->land_area}}">
                                </label>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="w-100">Luas Bangunan
                                    <input type="number" class="form-control w-100" name="building_area" value="{{$data->building_area}}">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card" style="margin-top: 24px">
                    <div class="card-header row" style="margin: 0;padding-left: 0px">
                        <div class="col-auto form-check">
                            <input id="jual_chk" type="checkbox" class="form-check-input h-100 " style="margin: 0" name="isSellSelected">
                        </div>
                        <h5 class="col-3">Data Penjualan Property</h5>
                    </div>
                    <div id="jual" style="display: none" class="card-body">
                        <div class="form-group">
                            <label for="sub_district">Harga</label>
                            <input type="number" min="0.00" max="1000000000000.00" step="0.01" class="form-control" id="price" name="sellPrice" value="@if(isset($data->isSell)){{$data->isSell->price}}@endif">
                        </div>
                    </div>
                </div>

                <div class="card" style="margin-top: 24px">
                    <a class="card-header row" style="margin: 0;padding-left: 0px">
                        <div class="col-auto form-check">
                            <input type="checkbox" class="form-check-input h-100 " style="margin: 0" id="sewa_chk" name="isRentSelected" >
                        </div>
                        <h5 class="col-3">Data Penyewaan Property</h5>
                    </a>
                    <div id="sewa" style="display: none"  class="card-body">
                        <div class="form-group">
                            <label for="sub_district">Harga</label>
                            <input type="number" min="0.00" max="1000000000000.00" step="0.01" class="form-control" id="price" name="rentPrice" value="@if(isset($data->isRent)){{$data->isRent->price}}@endif">
                        </div>
                        <div class="form-group">
                            <label for="sub_district">Minimal Sewa</label>
                            <input type="number" class="form-control" id="minRent" name="minRent" value="@if(isset($data->isRent)){{$data->isRent->minRent}}@endif">
                        </div>
                        <div class="form-group">
                            <label for="sub_district">Jenis Sewa</label>
                            <input type="text" class="form-control" id="typeRent" name="typeRent" value="@if(isset($data->isRent)){{$data->isRent->timeType}}@endif">
                        </div>
                    </div>
                </div>

                <div class="card" style="margin-top: 24px">
                    <h5 class="card-header">Data Promosi</h5>
                    <div class="card-body">
                        <div class="form-group col-md-12">
                            <label class="w-100">Description
                                <textarea type="text" rows="12" class="form-control w-100" name="description">{{$data->description}}</textarea>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card" style="margin-top: 24px">
                    <div class="card-header">
                        <h5 class="card-title m-0">Image Property</h5>
                    </div>
                    <div class="card-body">
                        <div id="img-preview" class="row">
                            @foreach(explode(',',$data->image) as $image)
                                <div class="col-md-3" style="height: 200px;margin-bottom: 16px">
                                    <img id="img-preview" class="img-thumbnail h-100" src="{{asset($image)}}" style="object-fit: cover"/>
                                </div>
                            @endforeach

                        </div>
                        <div class="row">
                            <div class="col-md-3" style="height: 200px">
                                <div class="h-100 w-100 file btn btn-lg btn-primary" style="background: #073932">
                                    <input id="fileuploads" style="width: 100%;height: 100%" type="file" multiple name="image[]"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 48px">
                    <div class="col-3"></div>
                    <input class="col-md-6 btn btn-primary" type="submit" value="Update">
                    <div class="col-3"></div>
                </div>

            </div>
        </div>
    </form>
@endsection
<script>
    @push('scripts')
    $('#jual_chk').click(function() {
        if( $(this).is(':checked')) {
            $("#jual").show();
        } else {
            $("#jual").hide();
        }
    });

    $('#sewa_chk').click(function() {
        if( $(this).is(':checked')) {
            $("#sewa").show();
        } else {
            $("#sewa").hide();
        }
    });

    @endpush
</script>
