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
                    <div class="hero__img" data-animation="bounceIn" data-delay=".4s" style="animation-delay: 0.4s;">
                        <img src="assets/img/hero/watch.png" alt="" class=" heartbeat">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="container">
        <div class="container container-md">
            <div class="card" style="margin-top: 24px">
                <h5 class="card-header">Data Diri</h5>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-4">Agent ID <input type="text" class="form-control text-center" value="{{$data->account->id}}" disabled></label>
                        <label class="col-md-4">Email <input type="text" class="form-control text-center" value="{{$data->account->email}}" disabled></label>
                        <label class="col-md-4">Agency <input type="text" class="form-control text-center" value="{{$data->user->agency}}" disabled></label>
                    </div>
                </div>
            </div>

            <div class="card" style="margin-top: 24px">
                <h5 class="card-header">Data Property</h5>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label class="w-100">Kategori
                                <select class="form-control" id="category" name="category">
                                    <option value="Rumah">Rumah</option>
                                    <option value="Kos">Kos</option>
                                    <option value="Kontrakan">Kontrakan</option>
                                </select>
                            </label>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="form-group form-check">
                                <div class="row" style="padding: 12px 24px;">
                                    <div class="col-6">
                                        <input type="checkbox" class="form-check-input" id="isSell" name="isSell">
                                        <label class="form-check-label" for="exampleCheck1">Jual</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="checkbox" class="form-check-input" id="isRent" name="isRent">
                                        <label class="form-check-label" for="exampleCheck1">Sewa</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-left: 24px;padding-right: 24px">
                                <div class="col-6" id="detailPenjualan" hidden>
                                    <div class="card w-100">
                                        <div class="card-body">
                                            <h5 class="card-title">Harga Jual</h5>
                                            <div class="form-group">
                                                <label for="sub_district">Harga</label>
                                                <input type="number" min="0.00" max="1000000000000.00" step="0.01" class="form-control" id="price"
                                                       name="price">
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-6" id="detailPenyewaan" hidden>
                                    <div class="card w-100">
                                        <div class="card-body">
                                            <h5 class="card-title">Harga Sewa</h5>
                                            <div class="form-group">
                                                <label for="sub_district">Harga</label>
                                                <input type="number" min="0.00" max="1000000000000.00" step="0.01" class="form-control" id="price"
                                                       name="price">
                                            </div>
                                            <div class="form-group">
                                                <label for="sub_district">Minimal Sewa</label>
                                                <input type="number" class="form-control" id="minRent" name="minRent">
                                            </div>
                                            <div class="form-group">
                                                <label for="sub_district">Jenis Sewa</label>
                                                <input type="text" class="form-control" id="typeRent" name="typeRent">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="w-100">Nama
                                <input type="text" class="form-control w-100" name="name" value="">
                            </label>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="w-100">Jumlah Kamar Mandi
                                <input type="number" class="form-control w-100" name="bath_room" value="">
                            </label>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="w-100">Jumlah Kamar Tidur
                                <input type="number" class="form-control w-100" name="bed_room" value="">
                            </label>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="w-100">Jumlah Lantai
                                <input type="number" class="form-control w-100" name="stories" value="">
                            </label>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="w-100">Luas Tanah
                                <input type="number" class="form-control w-100" name="land_area" value="">
                            </label>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="w-100">Luas Bangunan
                                <input type="number" class="form-control w-100" name="building_land" value="">
                            </label>
                        </div>
                        <div class="row w-100">
                            <div class="col-3">
                                <label for="province">Province</label>
                                <select class="custom-select mr-sm-2" id="province" name="province"></select>
                            </div>
                            <div class="col-3">
                                <label for="city">City</label>
                                <select class="custom-select mr-sm-2" id="city" name="city"></select>
                            </div>
                            <div class="col-3">
                                <label for="district">District</label>
                                <select class="custom-select mr-sm-2" id="district" name="district"></select>
                            </div>
                            <div class="col-3">
                                <label for="sub_district">Sub District</label>
                                <select class="custom-select mr-sm-2" id="sub_district" name="sub_district"></select>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="w-100">Alamat Lengkap
                                <textarea type="text" class="form-control w-100" name="address" value=""></textarea>
                            </label>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="w-100">Deskripsi
                                <textarea type="text" class="form-control w-100" name="description" value=""></textarea>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title m-0">Image</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3" style="height:    200px;margin-bottom: 16px">
                            <img class="img-thumbnail h-100" src="http://placehold.jp/150x150.png" style="object-fit: cover"/>
                        </div>
                        <div class="col-md-3" style="height: 200px;margin-bottom: 16px">
                            <img class="img-thumbnail h-100" src="http://placehold.jp/150x150.png" style="object-fit: cover"/>
                        </div>
                        <div class="col-md-3" style="height: 200px;margin-bottom: 16px">
                            <img class="img-thumbnail h-100" src="http://placehold.jp/150x150.png" style="object-fit: cover"/>
                        </div>
                        <div class="col-md-3" style="height: 200px;margin-bottom: 16px">
                            <img class="img-thumbnail h-100" src="http://placehold.jp/150x150.png" style="object-fit: cover"/>
                        </div>
                        <div class="col-md-3" style="height: 200px;margin-bottom: 16px">
                            <img class="img-thumbnail h-100" src="http://placehold.jp/150x150.png" style="object-fit: cover"/>
                        </div>
                        <div class="col-md-3" style="height: 200px;margin-bottom: 16px">
                            <img class="img-thumbnail h-100" src="http://placehold.jp/150x150.png" style="object-fit: cover"/>
                        </div>
                        <div class="col-md-3" style="height: 200px;margin-bottom: 16px">
                            <img class="img-thumbnail h-100" src="http://placehold.jp/150x150.png" style="object-fit: cover"/>
                        </div>
                        <div class="col-md-3" style="height: 200px;margin-bottom: 16px">
                            <div class="h-100 w-100 file btn btn-lg btn-primary" style="background: #073932"><input id="fileuploads" style="width: 100%;height: 100%" type="file" name="image"/></div>
                        </div>
                    </div>
                </div>
            </div>
@endsection