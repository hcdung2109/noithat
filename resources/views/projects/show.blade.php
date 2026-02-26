@extends('layouts.app')

@section('title', $project->title . ' - Dự án nội thất')

@section('content')
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-7">
                    <p class="text-uppercase small letter-spacing mb-2 text-muted">Dự án nội thất</p>
                    <h1 class="h2 fw-semibold mb-3">{{ $project->title }}</h1>
                    <ul class="list-unstyled mb-3 text-muted small">
                        @if ($project->location)
                            <li><strong>Địa điểm:</strong> {{ $project->location }}</li>
                        @endif
                        @if ($project->style)
                            <li><strong>Phong cách:</strong> {{ $project->style }}</li>
                        @endif
                        @if ($project->area)
                            <li><strong>Diện tích:</strong> {{ $project->area }}</li>
                        @endif
                        @if ($project->duration)
                            <li><strong>Thời gian thực hiện:</strong> {{ $project->duration }}</li>
                        @endif
                    </ul>

                    @if ($project->content)
                        <div class="text-muted">
                            {!! nl2br(e($project->content)) !!}
                        </div>
                    @else
                        <p class="text-muted">
                            Nội dung chi tiết dự án sẽ được cập nhật sau.
                        </p>
                    @endif
                </div>
                <div class="col-lg-5">
                    @if ($project->thumbnail_url)
                        <div class="ratio ratio-4x3 rounded overflow-hidden shadow-sm mb-3">
                            <img src="{{ $project->thumbnail_url }}" alt="{{ $project->title }}" class="w-100 h-100 object-fit-cover">
                        </div>
                    @endif
                    <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary w-100">
                        Quay lại danh sách dự án
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

