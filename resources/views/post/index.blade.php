
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <div class="container">
        <div class="col-sm-6 col-sm-offset-3">
            <h2>Publicación</h2>
            @if(Session::has('success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                {{ Session::get('success') }}
            </div>
            @endif
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group {{$errors->has('body') ? 'has-error': ''}}">
                            
                            <textarea name="body" rows="8" cols="72" placeholder="Escribe aqui.."></textarea>
                            @if($errors->has('body'))
                            <small class="text-danger">{{ $errors->first('body') }}</small>
                            @endif
                            <input type="submit" value="Post" class="btn btn-primary btn-block"/>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                </div>
              
            </form>

            @foreach($posts as $post)
            <div class="card" style="width: 18rem; height: 350px;">
                @if($post->image != null)
                <img class="card-img-top" src="/images_post/{{$post->image}}" width="100%" height="250px" alt="Imagen">
                @endif
                <div class="card-body">
                    <h5 class="card-title">Card title - {{$post->user->dog->name}} ({{$post->user->name}})</h5>
                    <p class="card-text">{{$post->body}}</p>
                </div>
                
            </div>
            @endforeach
            

        </div>
    </div>
    
@endsection
