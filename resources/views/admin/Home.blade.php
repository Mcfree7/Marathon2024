
@extends('admin.app')

@section('content')

    <div class="pcoded-content">
        <div class="page-header card">
        <div class="row align-items-end">
        <div class="col-lg-8">
        <div class="page-header-title">
        <i class="feather icon-home bg-c-blue"></i>
        <div class="d-inline">
        <h5>Acceuil</h5>
        <span>Bienvenue sur le panneau d'administration du site du Marathon  </span>
        </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="page-header-breadcrumb">
        <ul class=" breadcrumb breadcrumb-title">
        <li class="breadcrumb-item">
        <a href="{{route('home')}}"><i class="feather icon-home"></i></a>
        </li>
        <li class="breadcrumb-item"><a href="{{route('home')}}">Acceuil</a> </li>
        </ul>
        </div>
        </div>
        </div>
        </div>
    </div>
  <center><div class="container col-md-9 mr-5 p-5">
  <h2><span>Bienvenue sur le panneau d'administration du site du Marathon </span></h2>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('images/acceuil/bg1.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/acceuil/bg2.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/acceuil/bg3.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
</div>
</center>
@endsection