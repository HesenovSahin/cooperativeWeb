@extends('backend.layouts.header')
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="" class="nav-link">Main page</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
            <a href=""><i class="fa fa-sign-out-alt" style="font-size:24px">
                </i>
            </a>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="Admin Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fas fa-sitemap"></i>
                                <p>myProject</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.index')}}" class="nav-link">
                                <i class="fas fa-user-lock"></i>
                                <p>Admins</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link">
                                <i class="fa fa-cogs"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('chart.index')}}" class="nav-link">
                                <i class="fa fa-cogs"></i>
                                <p>Charts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('team.index')}}" class="nav-link">
                                <i class="fa fa-cogs"></i>
                                <p>Teams</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('blog.index')}}" class="nav-link">
                                <i class="fa fa-cogs"></i>
                                <p>Blogs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('section.index')}}" class="nav-link">
                                <i class="fa fa-cogs"></i>
                                <p>Sections</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('service.index')}}" class="nav-link">
                                <i class="fa fa-cogs"></i>
                                <p>Services</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('slider.index')}}" class="nav-link">
                                <i class="fa fa-cogs"></i>
                                <p>Sliders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('page.index')}}" class="nav-link">
                                <i class="fa fa-cogs"></i>
                                <p>Pages</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('portfolio.index')}}" class="nav-link">
                                <i class="fa fa-cogs"></i>
                                <p>Portfolios</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<!-- Content Wrapper. Contains page content -->


@extends('backend.layouts.footer')
