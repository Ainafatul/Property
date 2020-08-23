<div class="page-content">
    <nav class="navbar navbar-expand-lg navbar-dark " style="background: #343A40">
        <a class="navbar-brand font-weight-bold text-center" style="width: 260px" href="/"><i class="fas fa-home"></i>
            Shafrin Agency</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('PropertyFilter',['type'=>'Beli'])}}">Jual</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('PropertyFilter',['type'=>'Sewa'])}}">Sewa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('Articles')}}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('AgentList')}}">Agen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('Abouts')}}">Tentang Kami</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Lainnya</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="{{route('Guideline')}}">Panduan &amp; Referensi</a>
                        <a class="dropdown-item" href="#">Simulasi Kredit</a>
                        <a class="dropdown-item" href="#">Tanya Properti</a>
                    </div>
                </li>
            </ul>
            @if(!\Illuminate\Support\Facades\Auth::check())
                <a href="{{route('UserRegister')}}"
                   class="btn btn-outline-light btn-sm rounded-pill mr-1 px-4">Register</a>
                <a href="{{route('SignIn')}}" class="btn btn-nav btn-sm btn-light login px-5 my-2 my-sm-0 rounded-pill"
                   type="button">Login</a>
            @else
                <a href="{{route('Dashboard')}}"
                   class="btn btn-nav btn-sm btn-light login px-5 my-2 my-sm-0 rounded-pill"
                   type="button">{{explode(" ",\App\Http\Controllers\AuthController::getData()->user->name)[0]}}</a>
{{--                @if(\Illuminate\Support\Facades\Auth::user()->role == 'User')--}}
{{--                    <a href="{{route('Logout')}}"--}}
{{--                       class="btn btn-nav btn-sm btn-light login px-5 my-2 my-sm-0 rounded-pill btn-primary"--}}
{{--                       type="button">Log Out</a>--}}
{{--                @endif--}}
            @endif
        </div>
    </nav>
</div>
