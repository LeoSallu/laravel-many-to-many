@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="header my-3 d-flex gap-2">
            <a href="{{ route('welcome') }}" class="btn btn-danger">Back to the home</a>
            <a href="{{route('admin.projects.create')}}" class="btn btn-primary">Add new Project</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Project Name</th>
                    <th>Description</th>
                    <th>Project owner</th>
                    <th>Project contributors</th>
                    <th colspan="4">Languages</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->owner }}</td>
                        <td>{{ $project->contributors }}</td>
                        <td>{{ $project->$technologies?->id->implode('name',',')?: 'None' }}</td>
                        <td><a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-success">Info</a></td>
                        <td><a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">Edit</a></td>
                        <td>
                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
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