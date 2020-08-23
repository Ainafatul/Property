@extends('layout.Main')

@section('content')
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image-login"></div>
            <div class="col-md-8 col-lg-6 px-0">
                <div class="card mx-4 m-md-0 card-login">
                    <div class="form-login d-flex align-items-center py-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9 col-lg-8 mx-auto">
                                    <h3 class="login-heading mb-4">Log In</h3>
                                    <form action="{{route('onSignIn')}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-label-group">
                                            <input type="email" id="inputEmail" class="form-control form-tanya" name="email" placeholder="Email address"
                                                   required autofocus>
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="password" id="inputPassword" class="form-control form-tanya" name="password" placeholder="Password"
                                                   required>
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        @if($errors->first()!='')
                                            <div class="alert alert-danger" role="alert">{{$errors->first()}}</div>
                                        @endif
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Remember password</label>
                                        </div>
                                        <button class="btn btn-lg btn-info btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Log In
                                        </button>
                                        <div class="text-center">
                                            <a class="text-info" href="#">Forgot password ?</a></div>
                                        <p class="text-center ">Dont have an account ?
                                            <a class="text-info" href="{{route('UserRegister')}}">Register here</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
@endsection
