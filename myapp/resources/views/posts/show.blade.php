@extends('layouts.app')

@section('content')
    <div class="card">
        <h5 class="card-header">{{$posts->title}}</h5>
        <div class="card-body">
            <h5 class="card-title">{{$posts->title}}</h5>
            <p class="card-text">{{$posts->body}}</p>
            <p class="card-text"><small>Written on {{$posts->created_at}}</small></p>
            <a href="/posts" class="btn btn-secondary">Go Back</a>
        </div>
    </div>
@endsection