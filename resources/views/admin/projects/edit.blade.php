@extends('layouts.admin')

@section('title', 'Chỉnh sửa dự án: ' . $project->title)
@section('page_title', 'Chỉnh sửa dự án')

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/tinymce@7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#project-content-editor',
            height: 380,
            menubar: false,
            plugins: 'link lists table code fullscreen',
            toolbar: 'undo redo | blocks | bold italic underline | bullist numlist | link table | alignleft aligncenter alignright | code fullscreen',
            branding: false,
            content_style: 'body { font-family: Source Sans Pro, sans-serif; font-size:14px }'
        });

        tinymce.init({
            selector: '#project-excerpt-editor',
            height: 160,
            menubar: false,
            plugins: 'link lists code',
            toolbar: 'undo redo | bold italic underline | bullist numlist | link | removeformat | code',
            branding: false,
            content_style: 'body { font-family: Source Sans Pro, sans-serif; font-size:14px }'
        });
    </script>
@endpush

@section('content')
    <div class="card card-warning card-outline">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title mb-0">{{ $project->title }}</h3>
            <a href="{{ route('projects.show', $project) }}" class="btn btn-outline-secondary btn-sm" target="_blank">
                Xem ngoài website
            </a>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.projects.update', $project) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                @include('admin.projects._form')
            </form>
        </div>
    </div>
@endsection
