@extends('admin.app')
@section('content')
<div class="pcoded-content">
        <div class="page-header card">
        <div class="row align-items-end">
        <div class="col-lg-8">
        <div class="page-header-title">
        <i class="feather icon-home bg-c-blue"></i>
        <div class="d-inline">
        <h5>Articles</h5>
        <span>Gestion des articles  </span>
        </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="page-header-breadcrumb">
        <ul class=" breadcrumb breadcrumb-title">
        <li class="breadcrumb-item">
        <a href="#"><i class="feather icon-home"></i></a>
        </li>
        <li class="breadcrumb-item"><a href="#">Articles</a> </li>
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
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
        </div>
    @endif
<div class="col-sm-10">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="card">
    <div class="card-header">
    <h5>Céer un article</h5>
    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
    </div>
    <center>
    <div class="card-block  ">
    <form id="main" method="post" action="{{ route('article.store') }}" novalidate enctype="multipart/form-data">
        @csrf
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Titre</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="titre" id="titre" placeholder=" Tapez le titre de l'article" value="{{ old('titre') }}">
    @if ($errors->has('titre'))
        <span class="text-danger"> Champs obligatoire</span>
    @endif
    <span class="messages"></span>
    </div>
    </div>
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Date</label>
    <div class="col-sm-10">
    <input type="date" class="form-control" name="date" id="date" placeholder="Text Input Validation" value="{{ old('date') }}">
    @if ($errors->has('date'))
        <span class="text-danger">Champs obligatoire </span>
    @endif
    <span class="messages"></span>
    </div>
    </div> 
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Contenu</label>
    <div class="col-sm-10">
    <textarea class="form-control" rows="5"  name="contenu" id="contenu" placeholder="contenu de l'articles" >{{ old('contenu') }}</textarea>
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
    @if ($errors->has('images'))
        <span class="text-danger"> Champs obligatoire</span>
    @endif
    <span class="messages"></span>
    </div>
    </div>
    </div>
    </center>
    <div class="form-group row">
    <label class="col-sm-2"></label>
    <div class="col-sm-2">
    <button type="submit" class="btn btn-secondary mb-2">Ajouter</button>
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