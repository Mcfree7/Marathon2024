@extends('layout.app')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/acceuil/bg2.jpg');">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-end justify-content-center">
<div class="col-md-9 mb-5 text-center">
<p class="breadcrumbs"><span class="me-2"><a href="index.html">Acceuil <i class="fas fa-arrow-right"></i>
</a></span> <span class="me-2"><a href="blog.html">Galérie <i class="fas fa-arrow-right"></i>
</a></span></p>
<h1 class="mb-0 bread">Details de la Galérie</h1>
</div>
</div>
</div>
</section>
<section class="ftco-section">
<div class="container">
<div class="row">
<div class="col-lg-8 blog-single">
<h2 class="mb-3">{{$galerie->Titre}}</h2>
<p>
@if($galerie->images->count() > 0)
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($galerie->images as $key => $image)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
             @foreach($galerie->images as $key => $image)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ url('galerie_images/' . $image->path) }}" class="d-block w-100 img-fluid" alt="Image">
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@else
    <p>No images available for this Galerie.</p>
@endif
</p>

<p>{{$galerie->Contenu}}</p>
</div>
<div class="col-lg-4 sidebar pl-md-4">
<div class="sidebar-box">
<h3>Galerie Récents</h3>
@foreach ($gal as $key => $gals)
<div class="block-21 mb-2 d-flex">
    @if(isset($firstImages[$key]))
    <a href="{{route('galerie.detail' ,$gals->id)}}" class="blog-img me-2"><img src="{{ asset('galerie_images/' . $firstImages[$key]->path) }}" class="square circle" height="60"  width="60"></a>
    @endif
    <div class="text">
        <div class="meta mb-1">
            <div><a href="#"><span class="fa fa-calendar"></span> {{ $gals->Date }}</a></div>
            <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
        </div>
        <h3 class="heading"><a href="{{route('galerie.detail' ,$gals->id)}}">{{ ucwords(strtolower(substr($gals->Titre, 0, 20))) }} ...</a></h3>
    </div>
</div>
@endforeach
</div>
</div>
</div>
</div>
</section> 
@endsection