@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="header my-3 d-flex gap-2">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-danger">Back to the home</a>
            <a href="{{route('admin.types.create')}}" class="btn btn-primary">Add new Type</a>
        </div>
        <table class="table my-5">
            <thead>
                <tr>
                    <th>#</th>
                    <th colspan="4">Type</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <td>{{ $type->id}}</td>
                        <td>{{ $type->type }}</td>
                        <td><a href="{{ route('admin.types.show', $type->id) }}" class="btn btn-success">Info</a></td>
                        <td><a href="{{ route('admin.types.edit', $type->id) }}" class="btn btn-warning">Edit</a></td>
                        <td>
                            <form action="{{ route('admin.types.destroy', $type->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection