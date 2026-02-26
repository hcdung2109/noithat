@extends('layouts.app')

@section('title', 'Dự án nội thất đã thực hiện')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4 align-items-end">
                <div class="col-lg-8">
                    <h1 class="h2 fw-semibold mb-2">Dự án nội thất đã thực hiện</h1>
                    <p class="text-muted mb-0">
                        Danh sách các dự án tiêu biểu mà Studio Nội Thất đã thiết kế và thi công cho khách hàng.
                    </p>
                </div>
            </div>
            <div class="row g-4">
                @forelse ($projects as $project)
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm project-card">
                            @if ($project->thumbnail_url)
                                <img src="{{ $project->thumbnail_url }}" alt="{{ $project->title }}" class="card-img-top img-fluid rounded-top-3">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $project->title }}</h5>
                                @if ($project->style)
                                    <p class="card-text text-muted mb-1">{{ $project->style }}</p>
                                @endif
                                @if ($project->area || $project->duration)
                                    <p class="card-text">
                                        <small class="text-muted">
                                            @if ($project->area)
                                                {{ $project->area }}
                                            @endif
                                            @if ($project->area && $project->duration)
                                                ·
                                            @endif
                                            @if ($project->duration)
                                                {{ $project->duration }}
                                            @endif
                                        </small>
                                    </p>
                                @endif
                                @if ($project->excerpt)
                                    <p class="card-text text-muted small mb-0">
                                        {{ $project->excerpt }}
                                    </p>
                                @endif
                            </div>
                            <div class="card-footer bg-white border-0 pt-0">
                                <a href="{{ route('projects.show', $project) }}" class="btn btn-sm btn-outline-secondary">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-light border">
                            Hiện tại chưa có dự án nào trong hệ thống. Vui lòng thêm dự án trong trang quản trị.
                        </div>
                    </div>
                @endforelse
            </div>

            <div class="mt-4">
                {{ $projects->links() }}
            </div>
        </div>
    </section>
@endsection

