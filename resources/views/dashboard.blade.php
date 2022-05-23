@extends('layouts.main')

@section('navbar')
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!--logo-->
                    </li>
                    <img src="style/dist/img/bmo.png" alt="AdminLTE Logo" class="brand-image mt-1" style="opacity: .8">
                    <!-- <div class="preloader flex-column justify-content-center align-items-center">
                        <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
                    </div> -->
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Restart
                            <i class="fa-solid fa-rotate-left"></i>
                        </a>
                    </li>
                </ul>
            </nav>
@endsection


<!--
@section('header-main')
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3>Home</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            </ol>
                        </div>
                        </div>
                    </div>
@endsection-->

@section('main-content')
<div class=" content-wrapper">
<section class="content-header">
<div class=" container-fluid">
<div class="row mb-2">
<div class="col-sm-12">
<center>
<h1 class="text-success" align="center" style="font-family:Roboto; font-weight: bold; ">BINGUNG PILIH MOBIL KARENA KEBANYAKAN PILIHAN?</h1>
<h1 class="text-success" align="center" style="font-family:Roboto; font-weight: bold; ">SINI B-MO BANTUIN!</h1>
<a href="/kriteria"><button type="button" class="btn btn-success ">MULAI</button></a>
</center>
</div>
</div>
</div>
</section>
</div> 


@endsection





