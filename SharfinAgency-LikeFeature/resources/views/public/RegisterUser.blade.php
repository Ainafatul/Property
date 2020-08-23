@extends('layout.Main')

@section('content')
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-md-9 col-lg-8 px-0">
                <div class="card mx-4 m-md-0 card-login">
                    <div class="form-login d-flex align-items-center py-4 mx-0 ">
                        <div class="container-fluid">
                            <div class="row px-2">
                                <div class="col-md-10 mx-auto">
                                    <h3 class="login-heading mb-4">Register <span class="small form-tanya">User</span></h3>
                                    <form action="{{route('onUserRegister')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-label-group">
                                                    <input id="nama"required type="text" name="name" class="form-control form-tanya" placeholder="Name*">
                                                    <label for="nama">Nama</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input required type="date" id="birth_date" name="birth_date" min="1900-1-1" max="2004-1-1"
                                                           class="form-control form-tanya">
                                                    <label for="tanggal">Tanggal Lahir</label>
                                                </div>
                                                <div class="form-group">
                                                    <div class="maxl mx-4">
                                                        <label class="radio inline mr-3">
                                                            <input type="radio" name="gender" value="1" checked>
                                                            <span> Male </span>
                                                        </label>
                                                        <label class="radio inline">
                                                            <input type="radio" name="gender" value="0">
                                                            <span>Female </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-label-group">
                                                    <textarea required type="text" id="address" name="address" class="form-control form-tanya"
                                                              placeholder="Alamat" value=""></textarea>
                                                </div>
                                                <div class="form-label-group">
                                                    <input required type="text" id="telp" minlength="0" maxlength="12" name="phone"
                                                           class="form-control form-tanya" placeholder="Your Phone *">
                                                    <label for="telp">No Telp </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-label-group">
                                                    <input type="email" id="Email" class="form-control form-tanya" name="email" placeholder="Email address"
                                                           required>
                                                    <label for="Email">Email </label>
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
                                                <div class="form-group form-label-group">
                                                    <input type="file" id="foto" class="form-control form-tanya pt-4" name="picture">
                                                    <label for="foto">Foto Diri</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            @if($errors->first()!='')
                                                <div class="alert alert-danger" role="alert">{{$errors->first()}}</div>
                                            @endif
                                            <button class="btn btn-lg btn-info btn-block btn-login text-uppercase font-weight-bold mb-3" type="submit">
                                                Register
                                            </button>
                                        </div>
                                        <div class="text-center">
                                            <p class="mb-2">Register as an
                                                <a class="text-info" href="{{route('AgentRegister')}}">Agent</a>
                                            </p>
                                            <p>Have an account ?
                                                <a class="text-info" href="{{route('SignIn')}}">Log In</a>
                                            </p>
                                        </div>
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
