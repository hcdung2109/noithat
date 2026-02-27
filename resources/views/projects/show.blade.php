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
                        <div class="text-muted project-content">
                            {!! $project->content !!}
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
                            <img src="{{ asset($project->thumbnail_url) }}" alt="{{ $project->title }}" class="w-100 h-100 object-fit-cover">
                        </div>
                    @endif
                    @if ($project->images->isNotEmpty())
                        <h5 class="h6 text-uppercase text-muted mb-2 mt-3">Hình ảnh dự án</h5>
                        <div class="d-flex flex-wrap gap-2 mb-3" id="project-gallery">
                            @foreach ($project->images as $index => $img)
                                <div class="rounded overflow-hidden border border-secondary project-gallery-item" role="button" data-index="{{ $index }}" tabindex="0" style="width: 64px; height: 64px; cursor: pointer;">
                                    <img src="{{ asset($img->path) }}" alt="{{ $project->title }} - ảnh {{ $index + 1 }}" class="w-100 h-100 object-fit-cover">
                                </div>
                            @endforeach
                        </div>
                    @endif
                    <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary w-100">
                        Quay lại danh sách dự án
                    </a>
                </div>
            </div>
        </div>
    </section>

    @if ($project->images->isNotEmpty())
        {{-- Lightbox modal --}}
        <div class="modal fade" id="projectLightbox" tabindex="-1" aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content bg-transparent border-0">
                    <div class="modal-body p-0 position-relative">
                        <button type="button" class="btn btn-light btn-lg position-absolute top-50 start-0 translate-middle-y ms-2 rounded-circle shadow" id="lightboxPrev" aria-label="Ảnh trước">
                            <span aria-hidden="true">&lsaquo;</span>
                        </button>
                        <button type="button" class="btn btn-light btn-lg position-absolute top-50 end-0 translate-middle-y me-2 rounded-circle shadow" id="lightboxNext" aria-label="Ảnh sau">
                            <span aria-hidden="true">&rsaquo;</span>
                        </button>
                        <button type="button" class="btn btn-light position-absolute top-0 end-0 m-2 rounded-circle shadow" data-bs-dismiss="modal" aria-label="Đóng">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="text-center">
                            <img id="lightboxImage" src="" alt="" class="img-fluid rounded shadow" style="max-height: 90vh;">
                        </div>
                        <p class="text-white text-center mt-2 small" id="lightboxCounter"></p>
                    </div>
                </div>
            </div>
        </div>

        @push('scripts')
        <script>
            (function() {
                var galleryImages = @json($project->images->pluck('path')->map(fn($p) => asset($p))->values());
                var total = galleryImages.length;
                var currentIndex = 0;
                var modal = document.getElementById('projectLightbox');
                var lightboxImg = document.getElementById('lightboxImage');
                var lightboxCounter = document.getElementById('lightboxCounter');
                var prevBtn = document.getElementById('lightboxPrev');
                var nextBtn = document.getElementById('lightboxNext');

                function showImage(index) {
                    if (index < 0) index = total - 1;
                    if (index >= total) index = 0;
                    currentIndex = index;
                    lightboxImg.src = galleryImages[currentIndex];
                    lightboxImg.alt = 'Ảnh ' + (currentIndex + 1) + ' / ' + total;
                    lightboxCounter.textContent = (currentIndex + 1) + ' / ' + total;
                }

                document.querySelectorAll('.project-gallery-item').forEach(function(el, i) {
                    el.addEventListener('click', function() {
                        currentIndex = parseInt(el.getAttribute('data-index'), 10);
                        showImage(currentIndex);
                        var bsModal = new bootstrap.Modal(modal);
                        bsModal.show();
                    });
                    el.addEventListener('keydown', function(e) {
                        if (e.key === 'Enter' || e.key === ' ') {
                            e.preventDefault();
                            el.click();
                        }
                    });
                });

                if (prevBtn) prevBtn.addEventListener('click', function(e) { e.stopPropagation(); showImage(currentIndex - 1); });
                if (nextBtn) nextBtn.addEventListener('click', function(e) { e.stopPropagation(); showImage(currentIndex + 1); });

                modal.addEventListener('keydown', function(e) {
                    if (e.key === 'ArrowLeft') showImage(currentIndex - 1);
                    if (e.key === 'ArrowRight') showImage(currentIndex + 1);
                });
            })();
        </script>
        @endpush
    @endif
@endsection
