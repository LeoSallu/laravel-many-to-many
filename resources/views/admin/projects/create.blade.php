@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data"
            class="form-input-image my-3">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Project Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description">{{ old('description') }}
            </div>
            <div class="mb-3">
                <label for="owner" class="form-label">Project owner</label>
                <input type="text" class="form-control" id="owner" name="owner" value="{{ old('owner') }}">
            </div>
            <div class="mb-3">
                <label for="contributors" class="form-label">Project contributors</label>
                <input type="text" class="form-control" id="contributors" name="contributors"
                    value="{{ old('contributors') }}">
            </div>
            <div class="mb-3">
                <label for="languages" class="form-label">Languages</label>
                <input type="text" class="form-control" id="languages" name="languages" value="{{ old('languages') }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="type_id" class="form-label">Type</label>
                <select class="form-select" name="type_id" id="type_id">
                    <option value="">Select type</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>
                            {{ $type->type }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                @foreach ($technologies as $technology)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="technologies" value="{{ $technology->id }}" name="technologies[]">
                    <label class="form-check-label" for="technologies">{{ $technology->name }}</label>
                  </div>
                @endforeach
            </div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
@endsection
