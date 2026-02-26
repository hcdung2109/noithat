@extends('layouts.admin')

@section('title', 'Thêm dự án nội thất')
@section('page_title', 'Thêm dự án mới')

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
