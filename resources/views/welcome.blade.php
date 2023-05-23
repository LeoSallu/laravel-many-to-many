@extends('layouts.app')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Portfolio Dashboard') }}</div>

                <div class="card-body d-flex justify-content-center p-3">
                    <a class="btn btn-danger" href="{{route('admin.projects.index')}}">Go to my Portfolio</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
