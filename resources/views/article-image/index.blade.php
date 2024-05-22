
@extends('admin.app')
@section('content')
<center>
<div class="container col-md-9 p-5 mr-5 ">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Upload images
                        <a href="{{url('article')}}" class="btn btn-primary float-end">back</a>
                    </h4>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>

                    @endif
                    <h5>
                        Titre :  {{$art->Titre}}
                    </h5>
                    <hr>
                    @if ($errors->any())
                     <ul class="alert alert-warning">
                        @foreach ($errors->all() as $error )
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    @endif
                    <form action="{{url('articles/'.$art->id.'/upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Ajouter des images</label>
                            <input type="file" name="images[]" id="" multiple class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4">
            @foreach ( $artImages as $artImg )
                <img src="{{asset($artImg->image)}}" class=" p-1 m-2" style="width: 100px; height: 100px;" alt="Img">
                
                <a href="{{ url('article-image/'.$artImg->id.'/delete') }}">Delete</a>  
            @endforeach
        </div>
    </div>
</div>
</center>
@endsection