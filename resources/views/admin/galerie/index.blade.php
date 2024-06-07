
@extends('admin.app')
@section('content')


<center>
    <div class="container col-md-9 p-5 mr-5 ">
        @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                        <strong>{{ $message }}</strong>
                </div>
        @endif
        <div class="card table-card">
        <div class="card-header">
            <h5>Gestion de la Galérie </h5>
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
            <a href="{{route('galerie.create')}}" class="btn btn-dark m-2 p-2">Nouvelle galerie</a>
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
        @if (!empty($galeries) && $galeries->count())
        @foreach ($galeries as $key => $galerie)
            <tr>
                <td scope="col">{{$loop->index+1}}</td>
                <td  scope="col">{{ucwords(strtolower(substr($galerie->Titre,0,25)))}}</td>
                <td  scope="col">{{ucwords(strtolower(substr($galerie->Contenu,0,30)))}}...</td>    
                <td scope="col">

                @if($firstImages[$key])
                <img src="galerie_images/{{$firstImages[$key]->path}}" alt="Image" class="rounded-circle" width="40" height="40">
                @endif
                
                </td>
                <td scope="col">
                    <a href="{{ route('galerie.edit', $galerie->id)}}" class="btn btn-info">Editer</a>

                    <form method="POST" class="d-inline" action="{{ route('galerie.destroy', $galerie->id)}}" >
                                  <!-- CSRF token -->
                                  @csrf
                                  <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                  @method("DELETE")
                                  <button type="submit"class="btn btn-danger">supprimer</button>
                    </form> 
                    <form method="GET" class="d-inline" action="{{ route('galerie.show', $galerie->id)}}" enctype="multipart/form-data" >
                                
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
    <div class="m-3">{{ $galeries->links() }}</div>
</div>
</div>
</center>
@endsection