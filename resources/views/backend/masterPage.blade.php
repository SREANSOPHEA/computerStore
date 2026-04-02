<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davy Computer @yield('title')</title>

    <link rel="icon" href="{{asset('assets/images/logo.png')}}">

    @yield('link')
    <link rel="stylesheet" href="{{asset('assets/css/backend.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<!-- TOP NAVBAR -->
<nav class="navbar navbar-expand shadow-sm px-3 mb-3 position-sticky w-100" style="top:0; background:#1a2634;">
    <div class="container-fluid">
        <div class="d-flex text-light">
            <div class="logo-sm d-flex justify-content-center align-items-center">
                <img src="{{asset('assets/images/logo.png')}}" alt="Logo" style="height: 30px;">
                <div ><b>Davy Computer</b></div>
            </div>
            <button class="menu-toggle" style="margin-left: 50px;background: none;border: none;" id="mobileMenuToggle">
                <i class="bi bi-list text-light"></i>
            </button>
        </div>
        <!-- Right: Profile Dropdown -->
        <div class="dropdown ms-auto">
            <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle"
               id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{asset('assets/images/logo.png')}}" class="rounded-circle me-2" width="35" height="35">
                <span class="fw-medium">Admin</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow">
                <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i> Edit Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-box-arrow-right me-2"></i> Logout</a></li>
            </ul>
        </div>

    </div>
</nav>

<div id="sidebarOverlay" class="sidebar-overlay"></div>

<aside class="sidebar" id="mainSidebar">
    <div class="sidebar-brand text-center">
        <a href="/admin" class="text-light" style="text-decoration: none;">
            <center>
                <img src="{{asset('assets/images/logo.png')}}" alt="Logo" style="height: 30px;">
            </center>
            <div><b>Davy Computer</b></div>
        </a>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="#">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-graph-up"></i> Analytics
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-people"></i> Users
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-gear-wide-connected"></i> Settings
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center"
            data-bs-toggle="collapse" href="#computerMenu" role="button">
                <span><i class="bi bi-pc-display"></i> Computer</span>
                <i class="bi bi-chevron-down small"></i>
            </a>

            <div class="collapse" id="computerMenu">
                <ul class="list-unstyled ms-4 mt-2">
                    <li>
                        <a href="#" class="nav-link py-1">
                            <i class="bi bi-plus-circle"></i> Add
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link py-1">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link py-1">
                            <i class="bi bi-eye"></i> View
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-file-earmark-bar-graph"></i> Reports
            </a>
        </li>

    </ul>
</aside>

<main class="main-content">
    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/js/backend.js')}}"></script>
@yield('script')
</body>
</html>