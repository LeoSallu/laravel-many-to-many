@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="header my-3">
            <a href="{{ route('admin.types.index') }}" class="btn btn-danger">Back to the Types</a>
        </div>
        <h1>{{ $type->type }}</h1>
       
        <ul>
            <li>ID: {{$type->id}}</li>
            <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident unde aspernatur ducimus dolor quae voluptatibus exercitationem expedita, quasi aliquid qui tempore at quibusdam molestias dolore autem facere eligendi voluptas reiciendis.</li>
        </ul>
    </div>
@endsection
