@extends('template.Sidebar')

@section('general')
    <li>
        <a href="{{route('Dashboard')}}">
            <i class="fa fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="sidebar-dropdown">
        <a href="#">
            <i class="fa fa-users"></i>
            <span>Agents</span>
        </a>
        <div class="sidebar-submenu">
            <ul>
                <li><a href="{{route('MyApproveAgent')}}">Daftar</a></li>
                <li><a href="{{route('ApproveAgent')}}">Approval</a></li>
            </ul>
        </div>
    </li>
    <li class="sidebar-dropdown">
        <a href="#">
            <i class="fa fa-archive"></i>
            <span>Article</span>
        </a>
        <div class="sidebar-submenu">
            <ul>
                <li><a href="{{route('MyArticle')}}">Daftar</a></li>
                <li><a href="{{route('NewArticle')}}">Tambah</a></li>
            </ul>
        </div>
    </li>
    <li class="sidebar-dropdown">
        <a href="#">
            <i class="fa fa-ruler"></i>
            <span>Guideline</span>
        </a>
        <div class="sidebar-submenu">
            <ul>
                <li><a href="{{route('Guidelines')}}">Daftar</a></li>
                <li><a href="{{route('NewGuideline')}}">Tambah</a></li>
            </ul>
        </div>
    </li>
    <li class="sidebar-dropdown">
        <a href="#">
            <i class="fa fa-info"></i>
            <span>About</span>
        </a>
        <div class="sidebar-submenu">
            <ul>
                <li><a href="{{route('About')}}">Daftar</a></li>
                <li><a href="{{route('NewAbout')}}">Tambah</a></li>
            </ul>
        </div>
    </li>
    <li class="sidebar-dropdown">
        <a href="#">
            <i class="fa fa-user"></i>
            <span>Testimoni</span>
        </a>
        <div class="sidebar-submenu">
            <ul>
                <li><a href="{{route('MyReview')}}">Daftar</a></li>
                <li><a href="{{route('NewReview')}}">Tambah</a></li>
            </ul>
        </div>
    </li>
    <li class="sidebar-dropdown">
        <a><i class="fa fa-home"></i><span>Property</span></a>
        <div class="sidebar-submenu">
            <ul>
                <li><a href="{{route('AdminSellProperty')}}">Jual</a></li>
                <li><a href="{{route('AdminRentProperty')}}">Sewa</a></li>
            </ul>
        </div>
    </li>
    <li class="sidebar-dropdown">
        <a><i class="fa fa-info"></i><span>Riwayat</span></a>
        <div class="sidebar-submenu">
            <ul>
                <li><a href="{{route('PropertySold')}}">Terjual</a></li>
                <li><a href="{{route('PropertyLeased')}}">Tersewa</a></li>
                <li><a href="{{route('AdminHistory')}}">Riwayat</a></li>
            </ul>
        </div>
    </li>
    <li>
        <a href="{{route('NewsLetterSubscriber')}}">
            <i class="fa fa-envelope"></i>
            <span>Email Subscriber</span>
        </a>
    </li>
    <li>
        <a href="{{route('AdminRegister')}}">
            <i class="fa fa-user"></i>
            <span>Register Admin</span>
        </a>
    </li>
@endsection

