@extends('layout.app')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/acceuil/bg3.jpg');">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-end justify-content-center">
<div class="col-md-9 mb-5 text-center">
<p class="breadcrumbs"><span class="me-2"><a href="index.html">Acceuil <i class="fas fa-arrow-right"></i>
</a></span> <span>News <i class="fas fa-arrow-right"></i>
</span></p>
<h1 class="mb-0 bread">Publications</h1>
</div>
</div>
</div>
</section>
<section class="ftco-section">
<div class="container-xl">
@if(!empty($articles) && $articles->count())
<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach ($articles as $key => $art)
    <div class="col-md-4 mb-4">
    <div class="card">
    @if($firstImages[$key])
      <a href="{{route('article.detail' ,$art->id)}}"><img src="{{ asset('../article_images/' . $firstImages[$key]->path) }}" class="card-img-top" alt="..."></a>
    @endif
    <a href="{{route('article.detail' ,$art->id)}}">
      <div class="card-body">
        <h5 class="card-title">{{ucwords(strtolower(substr($art->Titre,0,35)))}} ...</h5>
        <p class="card-text">{{ucwords(strtolower(substr($art->Contenu,0,35)))}} ...</p>
      </div>
    </a>
    </div>
    </div>
@endforeach
</div>
@else
    <center><h5>Aucune activité disponible pour cette catégorie</h5></center>
@endif

<div class="row mt-5">
<div class="col text-center">
<div class="block-27">
{{ $articles->links() }}
</div>
</div>
</div>
</div>
</section>
@endsection