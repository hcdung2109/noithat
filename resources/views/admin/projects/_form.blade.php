@csrf
<div class="row g-3">
    <div class="col-md-8">
        <label class="form-label">Tiêu đề dự án</label>
        <input
            type="text"
            name="title"
            class="form-control @error('title') is-invalid @enderror"
            value="{{ old('title', $project->title) }}"
            required
        >
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4">
        <label class="form-label">Slug (tùy chọn)</label>
        <input
            type="text"
            name="slug"
            class="form-control @error('slug') is-invalid @enderror"
            value="{{ old('slug', $project->slug) }}"
        >
        @error('slug')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <div class="form-text">
            Nếu bỏ trống hệ thống sẽ tự sinh từ tiêu đề.
        </div>
    </div>
    <div class="col-md-4">
        <label class="form-label">Địa điểm</label>
        <input
            type="text"
            name="location"
            class="form-control @error('location') is-invalid @enderror"
            value="{{ old('location', $project->location) }}"
        >
        @error('location')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4">
        <label class="form-label">Phong cách</label>
        <input
            type="text"
            name="style"
            class="form-control @error('style') is-invalid @enderror"
            value="{{ old('style', $project->style) }}"
        >
        @error('style')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4">
        <label class="form-label">Diện tích</label>
        <input
            type="text"
            name="area"
            class="form-control @error('area') is-invalid @enderror"
            value="{{ old('area', $project->area) }}"
        >
        @error('area')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4">
        <label class="form-label">Thời gian thực hiện</label>
        <input
            type="text"
            name="duration"
            class="form-control @error('duration') is-invalid @enderror"
            value="{{ old('duration', $project->duration) }}"
        >
        @error('duration')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6">
        <label class="form-label">Ảnh đại diện (URL)</label>
        <input
            type="text"
            name="thumbnail_url"
            class="form-control @error('thumbnail_url') is-invalid @enderror"
            value="{{ old('thumbnail_url', $project->thumbnail_url) }}"
            placeholder="https://... hoặc để trống nếu upload file"
        >
        @error('thumbnail_url')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6">
        <label class="form-label">Upload ảnh đại diện từ máy tính</label>
        <input
            type="file"
            name="thumbnail_file"
            accept=".jpg,.jpeg,.png,.webp"
            class="form-control @error('thumbnail_file') is-invalid @enderror"
        >
        @error('thumbnail_file')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <div class="form-text">Tối đa 4MB, ưu tiên ảnh ngang để hiển thị đẹp trên danh sách dự án.</div>
    </div>
    @if (!empty($project->thumbnail_url))
        <div class="col-12">
            <label class="form-label d-block">Ảnh hiện tại</label>
            <img src="{{ $project->thumbnail_url }}" alt="{{ $project->title }}" style="max-height: 100px; width: auto;" class="border rounded p-1 bg-light">
        </div>
    @endif
    <div class="col-12">
        <label class="form-label">Ảnh gallery (upload nhiều ảnh)</label>
        <input
            type="file"
            name="gallery_files[]"
            accept=".jpg,.jpeg,.png,.webp"
            class="form-control @error('gallery_files') is-invalid @enderror @error('gallery_files.*') is-invalid @enderror"
            multiple
        >
        @error('gallery_files')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        @error('gallery_files.*')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
        <div class="form-text">Chọn nhiều ảnh (JPG, PNG, WebP). Tối đa 4MB/ảnh. Ảnh sẽ hiển thị trong trang chi tiết dự án.</div>
    </div>
    @if ($project->exists && $project->images->isNotEmpty())
        <div class="col-12">
            <label class="form-label d-block">Ảnh gallery hiện tại</label>
            <div class="d-flex flex-wrap gap-2 align-items-start">
                @foreach ($project->images as $img)
                    <div class="position-relative border rounded p-1 bg-light" style="width: 100px;">
                        <img src="{{ $img->path }}" alt="" class="img-fluid rounded" style="height: 80px; width: 100%; object-fit: cover;">
                        <label class="position-absolute top-0 end-0 m-1 form-check mb-0">
                            <input type="checkbox" name="remove_image_ids[]" value="{{ $img->id }}" class="form-check-input bg-danger">
                            <span class="visually-hidden">Xóa</span>
                        </label>
                        <small class="d-block text-center text-muted">Xóa</small>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
    <div class="col-md-12">
        <label class="form-label">Mô tả ngắn</label>
        <textarea
            name="excerpt"
            rows="2"
            class="form-control @error('excerpt') is-invalid @enderror"
        >{{ old('excerpt', $project->excerpt) }}</textarea>
        @error('excerpt')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label class="form-label">Nội dung chi tiết</label>
        <textarea
            id="project-content-editor"
            name="content"
            rows="8"
            class="form-control @error('content') is-invalid @enderror"
        >{{ old('content', $project->content) }}</textarea>
        @error('content')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <div class="form-check">
            <input
                type="checkbox"
                name="is_featured"
                value="1"
                class="form-check-input"
                id="is_featured"
                {{ old('is_featured', $project->is_featured) ? 'checked' : '' }}
            >
            <label class="form-check-label" for="is_featured">
                Đánh dấu là dự án nổi bật (hiển thị ưu tiên trên website).
            </label>
        </div>
    </div>
    <div class="col-12 d-flex justify-content-end mt-3">
        <button type="submit" class="btn btn-primary px-4">
            Lưu dự án
        </button>
    </div>
</div>
