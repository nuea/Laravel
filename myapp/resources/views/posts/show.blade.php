@extends('layouts.app')

@section('content')
    <div class="card">
        <h5 class="card-header">{{$posts->title}}</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-md-2 col-sm-2">
                    <img src="/storage/cover_image/{{$posts->cover_image}}" alt="" style="width:100%;" class="rounded">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h5 class="card-title">{{$posts->title}}</h5>
                    <p class="card-text">{{$posts->body}}</p>
                    <p class="card-text"><small>Written on {{$posts->created_at}} by {{$posts->user->name}}</small></p>
                </div>
            </div>
            <br>
            <a href="/posts" class="btn btn-secondary">Go Back</a>
            @if(!Auth::guest())
               @if(Auth::user()->id == $posts->user_id)
                    {{ Form::open(['action' => ['PostsController@destroy', $posts->id],'method'=>'POST','class'=>'float-right']) }}
                        {{Form::hidden('_method','DELETE')}}
                        {{ Form::submit('Delete',['class'=>'btn btn-danger'])}}
                    {{ Form::close() }}
                    
                    <a href="/posts/{{$posts->id}}/edit" class="btn btn-warning float-right" style="margin-right: 20px;">Edit</a>    
                @endif
            @endif
        </div>
    </div>
@endsection