@extends('admin.app')
@section('content')
<div class="pcoded-content">
        <div class="page-header card">
        <div class="row align-items-end">
        <div class="col-lg-8">
        <div class="page-header-title">
        <i class="feather icon-home bg-c-blue"></i>
        <div class="d-inline">
        <h5>Galerie</h5>
        <span>Gestion de la galérie  </span>
        </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="page-header-breadcrumb">
        <ul class=" breadcrumb breadcrumb-title">
        <li class="breadcrumb-item">
        <a href="{{route('home')}}"><i class="feather icon-home"></i></a>
        </li>
        <li class="breadcrumb-item"><a href="{{route('galerie.index')}}">Galerie</a> </li>
        </ul>
        </div>
        </div>
        </div>
        </div>
    </div>
    <div class="pcoded-content">



<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">

<div class="page-body">
<div class="row">
<center>
    <div class="col-sm-10">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="card">
    <div class="card-header">
    <h5>Modification de la galérie#{{$galerie->id}}</h5>
    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
    <div class="text-right">
        <a href="{{ route('galerie.index')}}" class="btn btn-dark mt-2">Afficher la galérie</a>
    </div>
    </div>
    <center>
    <div class="card-block  ">
    <form id="main" method="post" action="{{ route('galerie.update', $galerie) }}" novalidate enctype="multipart/form-data">
        @method('PUT')
        @csrf
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Titre</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="titre" id="titre" placeholder=" Tapez le titre de la galérie" value="{{  old('titre',$galerie->Titre ) }} ">
    @if ($errors->has('titre'))
        <span class="text-danger"> Champs obligatoire</span>
    @endif
    <span class="messages"></span>
    </div>
    </div>
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Date</label>
    <div class="col-sm-10">
    <input type="date" class="form-control" name="date" id="date" placeholder="de la galérie" value="{{ old('date',$galerie->Date) }}">
    @if ($errors->has('date'))
        <span class="text-danger">Champs obligatoire </span>
    @endif
    <span class="messages"></span>
    </div>
    </div> 
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Contenu</label>
    <div class="col-sm-10">
    <textarea class="form-control" rows="5"  name="contenu" id="contenu" placeholder="contenu de de la galérie" >{{ old('contenu',$galerie->Contenu) }}</textarea>
    @if ($errors->has('contenu'))
        <span class="text-danger"> Champs obligatoire</span>
    @endif
    <span class="messages"></span>
    </div>
    </div>
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Photos</label>
    <div class="col-sm-10">
    <input type="file" class="form-control" name="images[]" id="image"  multiple>
    @if ($errors->has('image'))
        <span class="text-danger"> la taille de l'image n'est pas valide, obligatoire(900x600)  </span>
    @endif
    <span class="messages"></span>
    </div>
    </div>
    </div>
    </center>
    <div class="form-group row">
    <label class="col-sm-2"></label>
    <div class="col-sm-2">
    <button type="submit" class="btn btn-info mb-2">modifier</button>
    </div>
    </div>
    </form>
    </div>
</div>
</center>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
@endsection