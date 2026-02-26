@extends('layouts.app')

@section('title', 'Thêm dự án nội thất')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-8">
                    <h1 class="h3 fw-semibold mb-1">Thêm dự án mới</h1>
                    <p class="text-muted mb-0">
                        Nhập thông tin để tạo dự án nội thất mới cho website.
                    </p>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body p-4 p-lg-5">
                    <form action="{{ route('admin.projects.store') }}" method="post">
                        @include('admin.projects._form')
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

