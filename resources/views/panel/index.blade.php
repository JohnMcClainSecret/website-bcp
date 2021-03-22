
@extends('layouts.template')

@section('content')

   <div id="wrapper">
    <div class="container-fluid">
        @yield('panel')
    </div>
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <div class="sidebar-brand-icon rotate-n-15">
            </div>
            <div class="sidebar-brand-text mx-3">Brokers Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Options
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('register_view')}}"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-users"></i>
                <span>Users List</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('liveOffer')}}"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-users"></i>
                <span>Live Offer Feed</span>
            </a>
        </li>

        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('loiworksheet')}}"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-users"></i>
                <span>L.O.I. WORKSHEET</span>
            </a>
        </li>


        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('subscriptions')}}"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-users"></i>
                <span>Subscriptions</span>
            </a>
        </li>
    </ul>
    <!-- End of Sidebar -->
 </div>
@endsection
