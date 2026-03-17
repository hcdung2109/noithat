@extends('layouts.admin')

@section('title', 'Thêm dự án nội thất')
@section('page_title', 'Thêm dự án mới')

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
    <div class="card card-primary card-outline">
        <div class="card-body">
            <p class="text-muted">Nhập thông tin để tạo dự án nội thất mới cho website.</p>

            <form action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data">
                @include('admin.projects._form')
            </form>
        </div>
    </div>
@endsection
