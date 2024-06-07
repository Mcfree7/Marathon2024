@extends('layout.app')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/acceuil/bg3.jpg');">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-end justify-content-center">
<div class="col-md-9 mb-5 text-center">
<p class="breadcrumbs"><span class="me-2"><a href="index.html">Acceuil <i class="fas fa-arrow-right"></i></a></span> <span>Galerie <i class="fas fa-arrow-right"></i></span></p>
<h1 class="mb-0 bread">Notre Galerie de photos</h1>
</div>
</div>
</div>
</section>
<section class="ftco-section">
<div class="container-fluid">

<div class="row g-lg-4">
@if(!empty($galerie) && $galerie->count())
@foreach ($galerie as $key => $gal )
<div class="col-md-4" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="100">
@if ($firstImages[$key])
    <div class="classes-wrap img d-flex align-items-end" style="background-image: url('{{ asset('galerie_images/' . $firstImages[$key]->path) }}');">
    <div class="text">
    <span class="price">{{$gal->Date}}</span>
    <h2><a href="{{route('galerie.detail' ,$gal->id)}}">{{ucwords(strtolower(substr($gal->Titre,0,15)))}} ...</a></h2>
    </div>
    </div>
@endif
</div>
@endforeach
@else
<center><h5>Aucune image disponible pour l'instant</h5></center>
@endif
</div>
<div class="row mt-5">
<div class="col text-center">

{{ $galerie->links() }}

</div>
</div>
</div>
</section>
@endsection