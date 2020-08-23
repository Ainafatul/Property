@extends('template.Sidebar')

@section('general')
    <li>
        <a href="{{route('Dashboard')}}">
            <i class="fa fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="sidebar-dropdown">
        <a><i class="fa fa-home"></i><span>Property</span></a>
        <div class="sidebar-submenu">
            <ul>
                <li><a href="{{route('MySellProperty')}}">Jual</a></li>
                <li><a href="{{route('MyRentProperty')}}">Sewa</a></li>
                <li><a href="{{route('NewProperty')}}">Tambah</a></li>
            </ul>
        </div>
    </li>
    <li class="sidebar-dropdown">
        <a><i class="fa fa-info"></i><span>Riwayat</span></a>
        <div class="sidebar-submenu">
            <ul>
                <li><a href="{{route('ListPropertySold')}}">Terjual</a></li>
                <li><a href="{{route('ListPropertyLeased')}}">Tersewa</a></li>
                <li><a href="{{route('AgentHistory')}}">Riwayat</a></li>
            </ul>
        </div>
    </li>
@endsection

@section('extra')
    <li>
        <a href="#">
            <i class="fa fa-book"></i>
            <span>Documentation</span>
            <span class="badge badge-pill badge-primary">Beta</span>
        </a>
    </li>
@endsection
