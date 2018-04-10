@extends('layouts.app')
@section('content')
    <h1>{{$title}}</h1>
    <p>{{$detail}}</p>
    @if(count($services)>0)
        <ul class="list-group">
            @foreach($services as $val)
                <li class="list-group-item">{{$val}}</li>
            @endforeach
        </ul>
    @endif
@endsection