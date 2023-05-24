@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="header my-3">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-danger">Back to the Projects</a>
        </div>
        <h1>{{ $project->name }}</h1>
        <div class="img_thumb">
            <img src="{{ asset('storage/' . $project->image) }}" alt=" {{ $project->name }}">
        </div>
        <table class="table my-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Description</th>
                    <th>Owner</th>
                    <th>Contributors</th>
                    <th>Languages</th>
                    <th>Type</th>
                    <th>Technology</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>{{ $project->type_id }}</th>
                    <th>{{ $project->description }}</th>
                    <th>{{ $project->owner }}</th>
                    <th>{{ $project->contributors }}</th>
                    <th>{{ $project->languages }}</th>
                    <th>{{ $project->type?->type ?: 'None' }}</th>
                    @forelse ($project->technologies as $technology)
                        <th>{{ $technology->name }}</th>
                    @empty
                        <th>None technology</th>
                    @endforelse

                </tr>
            </tbody>
        </table>
    </div>
@endsection
