
@extends('admin.app')
@section('content')


<center>
@if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
        </div>
@endif
<div class="container col-md-9 p-5 mr-5 ">
    <div class="card table-card">
        <div class="card-header">
            <h5>Gestion des articles</h5>
            <div class="card-header-right">
            <ul class="list-unstyled card-option">
            <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
            <li><i class="feather icon-maximize full-card"></i></li>
            <li><i class="feather icon-minus minimize-card"></i></li>
            <li><i class="feather icon-refresh-cw reload-card"></i></li>
            <li><i class="feather icon-trash close-card"></i></li>
            <li><i class="feather icon-chevron-left open-card-option"></i></li>
            </ul>
            </div>
        </div>
        <div class="text-right">
            <a href="{{route('article.create')}}" class="btn btn-dark m-2 p-2">Nouveau article</a>
        </div>
        <div class="card-block p-b-0">
        <div class="table-responsive">
        <table class="table table-hover m-b-0 m-r-4" >
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Titre</th>
                <th scope="col">Contenu</th>
                <!-- <th style="width:5px; word-wrap:break-word" scope="col">Contenu</th> -->
                <th scope="col-1">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @if (!empty($articles) && $articles->count())
            @foreach ($articles as $article )
            <tr>
                <td scope="col">{{$loop->index+1}}</td>
                <td  scope="col">{{ucwords(strtolower(substr($article->Titre,0,25)))}}</td>
                <td  scope="col">{{ucwords(strtolower(substr($article->Contenu,0,30)))}}...</td>    
                <td scope="col">

                @foreach ($article->images as $image)
                <img src="article_images/{{$image->path}}" alt="Image" class="rounded-circle" width="40" height="40">
                @endforeach
                
                </td>
                <td scope="col">
                    <a href=""class="btn btn-info">Editer</a>

                    <form method="POST" class="d-inline" action="#" >
                                  <!-- CSRF token -->
                                  @csrf
                                  <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                  @method("DELETE")
                                  <button type="submit"class="btn btn-danger">supprimer</button>
                    </form> 
                    <form method="GET" class="d-inline" action="#" enctype="multipart/form-data" >
                                
                                  <!-- CSRF token -->
                                  <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                <button type="submit"class="btn btn-secondary">voir</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @else
                <tr>
                    <td colspan="6">liste vide. </td>
                </tr>
            @endif
        </tbody>
    </table>
    </div>
    </div>
    <div class="m-3">{{ $articles->links() }}</div>
</div>
</div>
</center>
@endsection