@csrf

<div class="form-group">
    <label for="name">Họ và tên</label>
    <input
        id="name"
        type="text"
        name="name"
        value="{{ old('name', $consultationRequest->name) }}"
        class="form-control @error('name') is-invalid @enderror"
        required
    >
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="phone">Số điện thoại</label>
    <input
        id="phone"
        type="text"
        name="phone"
        value="{{ old('phone', $consultationRequest->phone) }}"
        class="form-control @error('phone') is-invalid @enderror"
        required
    >
    @error('phone')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input
        id="email"
        type="email"
        name="email"
        value="{{ old('email', $consultationRequest->email) }}"
        class="form-control @error('email') is-invalid @enderror"
    >
    @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="space_type">Loại không gian</label>
    <input
        id="space_type"
        type="text"
        name="space_type"
        value="{{ old('space_type', $consultationRequest->space_type) }}"
        class="form-control @error('space_type') is-invalid @enderror"
        placeholder="Căn hộ / Nhà phố / Văn phòng..."
    >
    @error('space_type')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="message">Nhu cầu</label>
    <textarea
        id="message"
        name="message"
        rows="6"
        class="form-control @error('message') is-invalid @enderror"
    >{{ old('message', $consultationRequest->message) }}</textarea>
    @error('message')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">
        Lưu
    </button>
</div>
