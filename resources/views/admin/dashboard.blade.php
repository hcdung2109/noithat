@extends('layouts.app')

@section('title', 'Trang quản trị')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
                <div>
                    <h1 class="h3 fw-semibold mb-1">Dashboard quản trị</h1>
                    <p class="text-muted mb-0">Xin chào {{ auth()->user()->name }}, chúc bạn một ngày làm việc hiệu quả.</p>
                </div>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">Đăng xuất</button>
                </form>
            </div>

            <div class="row g-3">
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <h2 class="h6 text-muted">Quản lý dự án</h2>
                            <p class="mb-3">Thêm, sửa, xóa các dự án nội thất trên website.</p>
                            <a href="{{ route('admin.projects.index') }}" class="btn btn-primary btn-sm">Đi đến dự án</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
