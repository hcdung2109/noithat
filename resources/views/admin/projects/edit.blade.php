@extends('layouts.app')

@section('title', 'Chỉnh sửa dự án: ' . $project->title)

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-8">
                    <h1 class="h3 fw-semibold mb-1">Chỉnh sửa dự án</h1>
                    <p class="text-muted mb-0">
                        {{ $project->title }}
                    </p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <a href="{{ route('projects.show', $project) }}" class="btn btn-outline-secondary">
                        Xem ngoài website
                    </a>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body p-4 p-lg-5">
                    <form action="{{ route('admin.projects.update', $project) }}" method="post">
                        @csrf
                        @method('put')
                        @include('admin.projects._form')
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

