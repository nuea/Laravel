@if(count($errors)>0)
    @foreach($errors->all() as $err)
        <div class="alert alert-danger" role="alert">
            {{$err}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger" role="alert">
        {{session('error')}}
    </div>
@endif