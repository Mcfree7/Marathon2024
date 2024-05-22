@extends('layout.app')

@section('content')
<section class="slider-hero">
<div class="overlay"></div>
<div class="hero-slider">
<div class="item">
<div class="work">
<div class="img img2 d-flex align-items-center js-fullheight" style="background-image: url(images/acceuil/bg3.jpg);">
<div class="container-xl">
<div class="row">
<div class="col-md-12 col-lg-10">
<div class="row">
<div class="col-md-8 col-lg-6">
<div class="text mt-md-5" data-aos="fade-up" data-aos-duration="1000">
<h2>Shape Your Perfect Body</h2>
<p class="mb-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
<p><a href="#" class="btn btn-primary px-4 py-3">Make your Registration<span class="ion ion-ios-arrow-round-forward"></span></a></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="work">
<div class="img d-flex align-items-center justify-content-center js-fullheight" style="background-image: url(images/acceuil/bg2.jpg);">
<div class="container-xl">
<div class="row">
<div class="col-md-12 col-lg-10">
<div class="row">
<div class="col-md-8 col-lg-6">
<div class="text mt-md-5" data-aos="fade-up" data-aos-duration="1000">
<h2>Increase Your Muscle Power</h2>
<p class="mb-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
<p><a href="#" class="btn btn-primary px-4 py-3">Make your Registration <span class="ion ion-ios-arrow-round-forward"></span></a></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="work">
<div class="img d-flex align-items-center justify-content-center js-fullheight" style="background-image: url(images/acceuil/bg1.jpg);">
<div class="container-xl">
<div class="row">
<div class="col-md-10">
<div class="row">
<div class="col-md-6 col-xl-6">
<div class="text mt-md-5" data-aos="fade-up" data-aos-duration="1000">
<h2>You Only Fail, When You Stop Trying</h2>
<p class="mb-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
<p><a href="#" class="btn btn-primary px-4 py-3">Make your Registration <span class="ion ion-ios-arrow-round-forward"></span></a></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="ftco-section ftco-about-section ftco-no-pt ftco-no-pb mb-0">
<div class="container-xl">
<div class="row">
<div class="col-lg-6 col-xl-7 order-lg-last py-5 heading-section" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
<div class="py-md-5 px-lg-5">
<span class="subheading">A propos du Marathon</span>
<h2 class="mb-4">ABUJA <span>Marathon</span></h2>
<p>le marathon, est un, évènement sportif organisé annuellement par le CDJS/CEDEAO avec l'appui de la Commission de la CEDEAO. Son but est de promouvoir l'intégration régionale avec à la clé le sport comme outil de mobilisation pour le rassemblement des peuples.</p>
<ul>
<li><a href="#"><span class="ion-ios-arrow-round-forward"></span> Catégorie 5km </a></li>
<li><a href="#"><span class="ion-ios-arrow-round-forward"></span> Catégorie 10km</a></li>
<li><a href="#"><span class="ion-ios-arrow-round-forward"></span> Catégorie 20km</a></li>
</ul>
</div>
</div>
<div class="col-lg-6 col-xl-5 d-flex align-items-center">
<div class="img w-200 h-200 ">
<img src="{{url('images/logo.png')}}" class="img-fluid" alt data-aos="fade-up" data-aos-delay="500" data-aos-duration="500">
</div>
</div>
</div>
</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
<div class="container-fluid">
<div class="row justify-content-center pb-5">
<div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
<span class="subheading">photos</span>
<h2 class="mb-3"><span>Galérie</span> du Marathon</h2>
</div>
</div>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            
                <div class="carousel-item active">
                    <div class="row">
                        
                            <div class="col-md-4">
                                <img src="{{url('images/acceuil/bg2.jpg')}}" class="d-block w-100" alt="Image de l'article">
                            </div>
                            <div class="col-md-4">
                                <img src="{{url('images/acceuil/bg2.jpg')}}" class="d-block w-100" alt="Image de l'article">
                            </div>
                            
                       
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="row">
                        
                            <div class="col-md-4">
                                <img src="{{url('images/acceuil/bg2.jpg')}}" class="d-block w-100" alt="Image de l'article">
                            </div>
                            <div class="col-md-4">
                                <img src="{{url('images/acceuil/bg2.jpg')}}" class="d-block w-100" alt="Image de l'article">
                            </div>
                            <div class="col-md-4">
                                <img src="{{url('images/acceuil/bg2.jpg')}}" class="d-block w-100" alt="Image de l'article">
                            </div>
                       
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="row">
                        
                            <div class="col-md-4">
                                <img src="{{url('images/acceuil/bg2.jpg')}}" class="d-block w-100" alt="Image de l'article">
                            </div>
                            <div class="col-md-4">
                                <img src="{{url('images/acceuil/bg2.jpg')}}" class="d-block w-100" alt="Image de l'article">
                            </div>
                            <div class="col-md-4">
                                <img src="{{url('images/acceuil/bg2.jpg')}}" class="d-block w-100" alt="Image de l'article">
                            </div>
                       
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="row">
                        
                            <div class="col-md-4">
                                <img src="{{url('images/acceuil/bg2.jpg')}}" class="d-block w-100" alt="Image de l'article">
                            </div>
                            <div class="col-md-4">
                                <img src="{{url('images/acceuil/bg2.jpg')}}" class="d-block w-100" alt="Image de l'article">
                            </div>
                            <div class="col-md-4">
                                <img src="{{url('images/acceuil/bg2.jpg')}}" class="d-block w-100" alt="Image de l'article">
                            </div>
                       
                    </div>
                </div>
                   
                </div>
          
        </div>
    </div>

</div>
<div class="row mt-md-5">
<div class="col text-center">
<a href="#" class="btn-custom">Voir plus d'images<span class="ion-ios-arrow-round-forward"></span></a>
</div>
</div>
</div>
</section>

<section class="ftco-section ">
<div class="container-xl">
<div class="row justify-content-center mb-5">
<div class="col-md-7 heading-section text-center" data-aos="fade-up" data-aos-duration="1000">
<span class="subheading">Nos articles</span>
<h2>Articles récents</h2>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="owl-carousel owl-theme articles_recents">
@foreach ($articles as $key => $art)
<div class="item">
    <div class="card">
    @if($firstImages[$key])
      <img src="{{ asset('../article_images/' . $firstImages[$key]->path) }}" class="card-img-top" alt="...">
    @endif
      <div class="card-body">
        <h5 class="card-title">{{ucwords(strtolower(substr($art->Titre,0,25)))}}</h5>
        <p class="card-text">{{ucwords(strtolower(substr($art->Contenu,0,25)))}}</p>
      </div>
    </div>
</div>
@endforeach
</div>
</div>
</div>
</section>

<section class="ftco-section testimony-section bg-light">
<div class="container-xl">
<div class="row justify-content-center pb-4">
<div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
<span class="subheading">Testimonial</span>
<h2 class="mb-3">Happy People</h2>
</div>
</div>
<div class="row">
<div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
<div class="carousel-testimony">
<div class="item">
<div class="testimony-wrap">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
<div class="text">
<p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
<div class="ps-3 tx">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
<div class="text">
<p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
<div class="ps-3 tx">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
<div class="text">
<p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
<div class="ps-3 tx">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
<div class="text">
<p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
<div class="ps-3 tx">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
<div class="text">
<p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
<div class="ps-3 tx">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection
@section('extra-js')
<script>
    $('.articles_recents').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
    })
</script>
@endsection