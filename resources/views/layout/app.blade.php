<!DOCTYPE html>
<html lang="en">
<head>
<title>Site du Marathon CDJS/CEDEAO</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&amp;family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&amp;display=swap" rel="stylesheet">
 <!-- Bootstrap css  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/ionicons@5.5.2/dist/css/ionicons.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.0-0/css/ionicons.min.css" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/app.js'])
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.10-0/css/ionicons.min.css">
<link rel="stylesheet" href="../../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
<link rel="stylesheet" href="{{url('css/animate.css')}}">
<link rel="stylesheet" href="{{url('css/flaticon.css')}}">
<link rel="stylesheet" href="{{url('css/tiny-slider.css')}}">
<link rel="stylesheet" href="{{url('css/glightbox.min.css')}}">
<link rel="stylesheet" href="{{url('css/aos.css')}}">
<link rel="stylesheet" href="{{url('css/style.css')}}">
<!-- OWL carousel css  -->
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">

<link rel="icon" type="image/png" href="{{url('../images/icon.png')}}">
@yield('extra-css')
</head>
<body>
<div class="top-wrap">
<div class="container-xl">
<div class="row justify-content-end">
<div class="col-md topper d-flex align-items-xl-center">
<div class="text">
<p class="con"><span>Contact us</span> <span>+226 25000000</span></p>
</div>
</div>
<div class="col-md topper d-flex align-items-xl-center justify-content-end">


<ul class="ftco-social">
  
<li><a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a></li>
<li><a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a></li>
<li><a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a></li>


@guest
      @if (Route::has('login'))
      <li><a href="{{ route('login') }}" class="d-flex align-items-center justify-content-center"><i class="bi bi-person" ></i></a></li> 
      @endif
      @else
          <li class="nav-item dropdown">
          <a href="{{ route('login') }}" class="d-flex align-items-center justify-content-center"><i class="bi bi-person" ></i></a>
          </li>
  @endguest
</ul>
</div>
</div>
</div>
</div>
<nav class="navbar navbar-expand-lg  ftco-navbar-light">
<div class="container-xl">
<a class="navbar-brand d-flex align-items-center" href="{{route('acceuil')}}">
<div class="icon d-flex align-items-center justify-content-center"><img class="flaticon flaticon-weight" src="{{url('../images/logo.png')}}" alt="" width="80px" height="60px"></div>
<span class>Marathon</span>
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="fa fa-bars"></span> Menu
</button>
<div class="collapse navbar-collapse border-top-custom" id="navbarSupportedContent">
<ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-lg-5">
<li class="nav-item"><a class="nav-link active" href="{{route('acceuil')}}">Acceuil</a></li>
<li class="nav-item"><a class="nav-link" href="{{route('article.affiche')}}">Publications</a></li>
<li class="nav-item"><a class="nav-link" href="{{route('galerie.affiche')}}">Galérie</a></li>
<li class="nav-item"><a class="nav-link" href="#">A_propos</a></li>
<li class="nav-item"><a class="nav-link" href="#">News</a></li>
<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
</ul>
<a href="{{route('inscription.create')}}" class="btn-custom">Inscription</a>
</div>
</div>
</nav>

@yield('content')

<footer class="ftco-footer">
<div class="container-xl">
<div class="row mb-5 pb-5 justify-content-between">
<div class="col-md-6 col-lg">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2 logo d-flex">
<a class="navbar-brand d-flex align-items-center" href="index.html">
<div class="icon d-flex align-items-center justify-content-center"><img class="flaticon flaticon-weight" src="{{url('../images/logo.png')}}" alt="" width="80px" height="60px"></div>
<span class>Marathon</span>
</a>
</h2>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
<ul class="ftco-footer-social list-unstyled mt-2">
<li><a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a></li>
<li><a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a></li>
<li><a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a></li>
</ul>
</div>
</div>
<div class="col-md-6 col-lg-2">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Liens utiles</h2>
<ul class="list-unstyled">
<li><a href="#"><span class="fa ion-ios-arrow-round-forward me-3"></span>A propos</a></li>
<li><a href="#"><span class="fa ion-ios-arrow-round-forward me-3"></span>Publications</a></li>
<li><a href="#"><span class="fa ion-ios-arrow-round-forward me-3"></span>Galerie</a></li>
<li><a href="#"><span class="fa ion-ios-arrow-round-forward me-3"></span>Terms</a></li>
</ul>
</div>
</div>
<div class="col-md-6 col-lg-2">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Our Contacts</h2>
<div class="block-23 mb-3">
<ul>
<li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
<li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text"><span class="__cf_email__" data-cfemail="eb82858d84ab92849e998f84868a8285c5888486">[email&#160;protected]</span></span></a></li>
</ul>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="ftco-footer-widget mb-4">
<div class="row g-sm-2">
<div class="col-sm-3 col-md-3 col-lg-3">
<a href="#" class="img gallery" style="background-image: url(../images/gallery-1.jpg);"></a>
</div>
<div class="col-sm-3 col-md-3 col-lg-3">
<a href="#" class="img gallery" style="background-image: url(../images/gallery-2.jpg);"></a>
</div>
<div class="col-sm-3 col-md-3 col-lg-3">
<a href="#" class="img gallery" style="background-image: url(../images/gallery-3.jpg);"></a>
</div>
<div class="col-sm-3 col-md-3 col-lg-3">
<a href="#" class="img gallery" style="background-image: url(../images/gallery-4.jpg);"></a>
</div>
<div class="col-sm-3 col-md-3 col-lg-3">
<a href="#" class="img gallery" style="background-image: url(../images/gallery-5.jpg);"></a>
</div>
<div class="col-sm-3 col-md-3 col-lg-3">
<a href="#" class="img gallery" style="background-image: url(../images/gallery-6.jpg);"></a>
</div>
<div class="col-sm-3 col-md-3 col-lg-3">
<a href="#" class="img gallery" style="background-image: url(../images/gallery-7.jpg);"></a>
</div>
<div class="col-sm-3 col-md-3 col-lg-3">
<a href="#" class="img gallery" style="background-image: url(../images/gallery-8.jpg);"></a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid px-0 py-5 bg-darken">
<div class="container-xl">
<div class="row">
<div class="col-md-12 text-center">
<p class="mb-0" style="color: rgba(255,255,255,.5); font-size: 13px;">
Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank" rel="nofollow noopener">Colorlib</a>
</div>
</div>
</div>
</div>
</footer>
<script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('js/tiny-slider.js')}}"></script>
<script src="{{url('js/glightbox.min.js')}}"></script>
<script src="{{url('js/rellax.min.js')}}"></script>
<script src="{{url('js/aos.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
<script src="{{url('js/google-map.js')}}"></script>
<script src="{{url('js/main.js')}}"></script>
 <!-- Bootstrap JS  -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <!-- owl carousel JS  -->
 <script src="{{asset('assets/js/jquery.min.js')}}"></script>
 <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
 @yield('extra-js')
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"862ad1c278676917","b":1,"version":"2024.2.4","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>