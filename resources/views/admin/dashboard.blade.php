@extends('layouts.admin')

@section('title', 'Trang quản trị')
@section('page_title', 'Dashboard quản trị')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <p class="mb-4">Xin chào <strong>{{ auth()->user()->name }}</strong>, chúc bạn một ngày làm việc hiệu quả.</p>

                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h4>Quản lý dự án</h4>
                                    <p>Thêm, sửa, xóa các dự án nội thất trên website.</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <a href="{{ route('admin.projects.index') }}" class="small-box-footer">
                                    Đi đến dự án <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
