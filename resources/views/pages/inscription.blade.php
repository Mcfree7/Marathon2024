@extends('layout.app')
@section('extra-css')
<link rel="stylesheet" href="{{url('../formulaire/css/style.css')}}">
@endsection
@section('content')
<div class="main">
    <div class="container mb-5 mt-5 p-5 ">
       <div class="row">
            
        <div class="col-md-12 col-lg-12">
        <div class="signup-content">
            <center>
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                        <strong>{{ $message }}</strong>
                </div>
            @endif
            </center>
            <form method="POST" id="signup-form" class="signup-form" action="{{ route('inscription.store') }}" novalidate enctype="multipart/form-data">
                @csrf
                <h2 class="form-title">Inscription</h2>
                <div class="form-group">
                    <input type="text" class="form-input" name="nom" id="nom" placeholder="Nom" value="{{ old('nom') }}" required/>
                    @if ($errors->has('nom'))
                        <span class="text-danger">Champs obligatoire</span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" name="prenom" id="prenom" placeholder="Prenom(s)" required/>
                    @if ($errors->has('prenom'))
                        <span class="text-danger">Champs obligatoire </span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="email" class="form-input" name="email" id="email" placeholder="Email : exemple@gmail.com" required/>
                    @if ($errors->has('email'))
                        <span class="text-danger">Champs obligatoire </span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="phone" class="form-input" name="phone" id="phone" placeholder="Tel : +234 00 0000 000" required/>
                    @if ($errors->has('phone'))
                        <span class="text-danger">Champs obligatoire </span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" name="nationalite" id="nationalite" placeholder="Nationality: ex: Nigeria" required/>
                    @if ($errors->has('nationalite'))
                        <span class="text-danger">Champs obligatoire </span>
                    @endif
                </div>
                <div class="form-group">
                    <select class="form-input" name="genre" id="genre" required>
                        <option value="">Genre</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>  
                    @if ($errors->has('genre'))
                        <span class="text-danger">Champs obligatoire </span>
                    @endif
                </div>
                <div class="form-group">
                    <select class="form-input" name="categorie" id="categorie" required>
                        <option value="">Categorie de Course</option>
                        <option value="5km">5 km</option>
                        <option value="10km">10 Km</option>
                        <option value="21km">21 Km</option>
                    </select>
                    @if ($errors->has('categorie'))
                        <span class="text-danger">Champs obligatoire </span>
                    @endif
                </div>  
                <div class="form-group">
                    <label for=""photo>Photo d'identite</label> <br>
                    <input type="file" name="photo" id="photo" class="photo" required/>  
                    @if ($errors->has('photo'))
                        <span class="text-danger"> la taille de l'image n'est pas valide, maximum 4Mb  </span>
                    @endif                  
                </div>
                <div class="form-group">
                    <label for="passeport">Passeport</label> <br>
                    <input type="file" name="passeport" id="passeport" required />     
                    @if ($errors->has('photo'))
                        <span class="text-danger"> la taille du fichier n'est pas valide, maximum 4Mb  </span>
                    @endif               
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="form-submit" value="Valider"/>
                </div>
            </form>
            
        </div>
    </div>
    </div>
    </div>
</div>
@endsection
@section('extra-js')
    <script src="{{url('../formulaire/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('../formulaire/js/main.js')}}"></script>
@endsection