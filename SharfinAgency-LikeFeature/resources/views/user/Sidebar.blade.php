@extends('template.Sidebar')

@section('general')
    <li>
        <a href="{{route('Dashboard')}}">
            <i class="fa fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="sidebar-dropdown">
        <a href="{{route('PropertyChart')}}">
            <i class="fa fa-heart"></i>
            <span>Likes</span>
        </a>
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
    <li>
        <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Calendar</span>
        </a>
    </li>
    <li>
        <a href="#">
            <i class="fa fa-folder"></i>
            <span>Examples</span>
        </a>
    </li>
@endsection
