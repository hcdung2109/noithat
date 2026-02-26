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
    <div class="col-md-8">
        <label class="form-label">Ảnh đại diện (URL)</label>
        <input
            type="text"
            name="thumbnail_url"
            class="form-control @error('thumbnail_url') is-invalid @enderror"
            value="{{ old('thumbnail_url', $project->thumbnail_url) }}"
        >
        @error('thumbnail_url')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <div class="form-text">
            Dán đường dẫn ảnh (có thể dùng ảnh từ Pexels trong giai đoạn demo).
        </div>
    </div>
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
            name="content"
            rows="6"
            class="form-control @error('content') is-invalid @enderror"
        >{{ old('content', $project->content) }}</textarea>
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
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

