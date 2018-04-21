@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary" href="/posts/create">Create Post</a>
                    <p><h3>Your Blog Posts</h3></p>
                    @if(count($posts)>0)
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $val)
                                    <tr>
                                        <td>{{$val->title}}</td>
                                        <td><a href="/posts/{{$val->id}}/edit" class="btn btn-warning">Edit</a></td>
                                        <td>
                                            {{ Form::open(['action' => ['PostsController@destroy', $val->id],'method'=>'POST','class'=>'float-right']) }}
                                                {{Form::hidden('_method','DELETE')}}
                                                {{ Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                    <p>You have no posts.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
