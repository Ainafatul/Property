@extends('layout.Admin')

@section('content')
    <div class="single-slider slider-height2 d-flex align-items-center" style="margin-bottom: 128px;min-height: 500px;background: #15AC97">
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
    <div class="container-fluid h-auto">
        <div class="row no-gutter">
            <div class="col-md-9 col-lg-8 px-0">
                <div class="card mx-4 m-md-0 card-login">
                    <div class="form-login d-flex align-items-center py-4 mx-0 " style="min-height: auto">
                        <div class="container-fluid">
                            <div class="row px-2">
                                <div class="col-md-10 mx-auto">
                                    <h3 class="login-heading mb-4">Register <span class="small form-tanya">Admin</span></h3>
                                    <form action="{{route('onAdminRegister')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-label-group">
                                            <input required type="text" id="nama" name="name" class="form-control form-tanya" placeholder="Name*">
                                            <label for="nama">Nama Lengkap</label>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="email" id="email" class="form-control form-tanya" name="email" placeholder="Email address" required>
                                            <label for="email">Email </label>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="password" id="Password" class="form-control form-tanya" name="password" placeholder="Password"
                                                   required>
                                            <label for="Password">Password </label>
                                        </div>
                                        <div class="form-label-group">
                                            <input required type="password" id="confirm_password" class="form-control form-tanya"
                                                   placeholder="Confirm Password *" value="" name="password_confirmation">
                                            <label for="confirm_password">Confirm Password </label>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="file" id="foto" class="form-control form-tanya pt-4" name="picture">
                                            <label for="foto">Foto Diri</label>
                                        </div>
                                        @if($errors->first()!='')
                                            <div class="alert alert-danger" role="alert">{{$errors->first()}}</div>
                                        @endif
                                        <button class="btn btn-lg btn-info btn-block btn-login text-uppercase font-weight-bold mb-3 mt-5" type="submit">
                                            Register
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-flex col-md-3 col-lg-4 bg-image-register"></div>
        </div>
    </div>
@endsection
