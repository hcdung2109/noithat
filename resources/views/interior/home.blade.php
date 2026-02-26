@extends('layouts.app')

@section('title', 'Studio Thiết Kế Nội Thất')

@section('content')
    <section id="heroCarousel" class="hero-section carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="hero-slide" style="background-image: url('https://images.pexels.com/photos/6587832/pexels-photo-6587832.jpeg?auto=compress&cs=tinysrgb&w=1600');">
                    <div class="hero-overlay"></div>
                    <div class="container position-relative">
                        <div class="row">
                            <div class="col-lg-7">
                                <p class="text-uppercase small letter-spacing mb-2">Studio thiết kế nội thất</p>
                                <h1 class="display-4 fw-semibold mb-3">
                                    Biến không gian sống<br>thành tác phẩm nghệ thuật.
                                </h1>
                                <p class="lead mb-4">
                                    Chúng tôi thiết kế không gian hiện đại, tinh tế và tối ưu công năng
                                    cho căn hộ, nhà phố và văn phòng của bạn.
                                </p>
                                <div class="d-flex flex-wrap gap-3">
                                    <a href="#projects" class="btn btn-primary btn-lg px-4">Xem dự án</a>
                                    <a href="#contact" class="btn btn-outline-light btn-lg px-4">Đặt lịch tư vấn</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="hero-slide" style="background-image: url('https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=1600');">
                    <div class="hero-overlay"></div>
                    <div class="container position-relative">
                        <div class="row">
                            <div class="col-lg-7">
                                <p class="text-uppercase small letter-spacing mb-2">Thiết kế & thi công trọn gói</p>
                                <h2 class="display-4 fw-semibold mb-3">
                                    Không gian chuẩn gu,<br>công năng tối ưu.
                                </h2>
                                <p class="lead mb-4">
                                    Đội ngũ chuyên gia đồng hành cùng bạn từ ý tưởng, thiết kế 3D
                                    đến thi công hoàn thiện, đúng tiến độ.
                                </p>
                                <div class="d-flex flex-wrap gap-3">
                                    <a href="#process" class="btn btn-primary btn-lg px-4">Xem quy trình</a>
                                    <a href="#contact" class="btn btn-outline-light btn-lg px-4">Nhận báo giá</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="hero-slide" style="background-image: url('https://images.pexels.com/photos/1457842/pexels-photo-1457842.jpeg?auto=compress&cs=tinysrgb&w=1600');">
                    <div class="hero-overlay"></div>
                    <div class="container position-relative">
                        <div class="row">
                            <div class="col-lg-7">
                                <p class="text-uppercase small letter-spacing mb-2">Nội thất hiện đại</p>
                                <h2 class="display-4 fw-semibold mb-3">
                                    Nâng tầm thẩm mỹ<br>cho tổ ấm của bạn.
                                </h2>
                                <p class="lead mb-4">
                                    Mỗi dự án là một giải pháp cá nhân hóa theo nhu cầu sử dụng,
                                    ngân sách và phong cách sống riêng của gia đình bạn.
                                </p>
                                <div class="d-flex flex-wrap gap-3">
                                    <a href="{{ route('projects.index') }}" class="btn btn-primary btn-lg px-4">Dự án thực tế</a>
                                    <a href="#contact" class="btn btn-outline-light btn-lg px-4">Liên hệ ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev hero-control" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" aria-label="Previous">
            <span class="hero-control-icon"><i class="bi bi-chevron-left"></i></span>
        </button>
        <button class="carousel-control-next hero-control" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" aria-label="Next">
            <span class="hero-control-icon"><i class="bi bi-chevron-right"></i></span>
        </button>
    </section>

    <section id="services" class="py-5 bg-white">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-8">
                    <h2 class="section-title">Dịch vụ nổi bật</h2>
                    <p class="text-muted">
                        Đồng hành từ ý tưởng đến thi công, đảm bảo không gian đồng bộ, tối ưu chi phí và đúng tiến độ.
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <div class="service-icon mb-3">
                                <i class="bi bi-house-door"></i>
                            </div>
                            <h5 class="card-title mb-2">Thiết kế căn hộ</h5>
                            <p class="card-text text-muted">
                                Bố trí không gian tối ưu, lựa chọn vật liệu và màu sắc giúp căn hộ thoáng, sang và tiện nghi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <div class="service-icon mb-3">
                                <i class="bi bi-building"></i>
                            </div>
                            <h5 class="card-title mb-2">Nhà phố & biệt thự</h5>
                            <p class="card-text text-muted">
                                Tối ưu ánh sáng tự nhiên, tạo điểm nhấn kiến trúc và không gian xanh cho nhà phố, biệt thự.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <div class="service-icon mb-3">
                                <i class="bi bi-briefcase"></i>
                            </div>
                            <h5 class="card-title mb-2">Văn phòng & showroom</h5>
                            <p class="card-text text-muted">
                                Thiết kế không gian làm việc chuyên nghiệp, truyền cảm hứng và thể hiện rõ cá tính thương hiệu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4 align-items-end">
                <div class="col-lg-8">
                    <h2 class="section-title">Dự án nổi bật</h2>
                    <p class="text-muted">
                        Danh sách dự án nổi bật được cập nhật trực tiếp từ hệ thống quản trị.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary">
                        Xem thêm dự án
                    </a>
                </div>
            </div>

            <div class="row g-4">
                @forelse ($featuredProjects as $project)
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm project-card">
                            <img
                                src="{{ $project->thumbnail_url ?: 'https://images.pexels.com/photos/1571463/pexels-photo-1571463.jpeg?auto=compress&cs=tinysrgb&w=800' }}"
                                alt="{{ $project->title }}"
                                class="card-img-top img-fluid rounded-top-3"
                            >
                            <div class="card-body">
                                <h5 class="card-title">{{ $project->title }}</h5>
                                <a href="{{ route('projects.show', $project) }}" class="stretched-link" aria-label="Xem chi tiết {{ $project->title }}"></a>
                                @if ($project->style)
                                    <p class="card-text text-muted mb-1">{{ $project->style }}</p>
                                @endif
                                <p class="card-text">
                                    <small class="text-muted">
                                        {{ $project->area ?: 'Đang cập nhật diện tích' }}
                                        @if ($project->duration)
                                            · {{ $project->duration }}
                                        @endif
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-secondary mb-0">
                            Chưa có dự án nổi bật. Vui lòng vào trang quản trị để thêm và đánh dấu dự án nổi bật.
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="process" class="py-5 bg-white">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-8">
                    <h2 class="section-title">Quy trình làm việc</h2>
                    <p class="text-muted">
                        Quy trình rõ ràng giúp bạn nắm được từng bước triển khai, hạn chế phát sinh và đảm bảo chất lượng thi công.
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="h-100">
                        <div class="d-flex align-items-center mb-2">
                            <div class="process-step-number me-2">01</div>
                            <h6 class="mb-0">Tư vấn & khảo sát</h6>
                        </div>
                        <p class="text-muted mb-0">
                            Tìm hiểu nhu cầu, phong cách yêu thích và khảo sát hiện trạng không gian thực tế.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="h-100">
                        <div class="d-flex align-items-center mb-2">
                            <div class="process-step-number me-2">02</div>
                            <h6 class="mb-0">Lên concept 2D/3D</h6>
                        </div>
                        <p class="text-muted mb-0">
                            Đề xuất mặt bằng, moodboard, phối cảnh 3D để bạn dễ hình dung không gian.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="h-100">
                        <div class="d-flex align-items-center mb-2">
                            <div class="process-step-number me-2">03</div>
                            <h6 class="mb-0">Triển khai hồ sơ</h6>
                        </div>
                        <p class="text-muted mb-0">
                            Hoàn thiện bản vẽ kỹ thuật, bóc tách khối lượng và lập dự toán chi tiết.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="h-100">
                        <div class="d-flex align-items-center mb-2">
                            <div class="process-step-number me-2">04</div>
                            <h6 class="mb-0">Thi công & bàn giao</h6>
                        </div>
                        <p class="text-muted mb-0">
                            Giám sát thi công, nghiệm thu và bàn giao không gian hoàn thiện đúng cam kết.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm contact-card">
                        <div class="card-body p-4 p-lg-5">
                            <h2 class="section-title mb-3">Đặt lịch tư vấn</h2>
                            <p class="text-muted mb-4">
                                Hãy để lại thông tin, chúng tôi sẽ liên hệ trong vòng 24 giờ để tư vấn giải pháp phù hợp cho không gian của bạn.
                            </p>
                            @if (session('consultation_status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('consultation_status') }}
                                </div>
                            @endif

                            <form action="{{ route('consultations.store') }}" method="post">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Họ và tên</label>
                                        <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Nguyễn Văn A">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Số điện thoại</label>
                                        <input type="tel" name="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror" placeholder="0901 234 567">
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="email@domain.com">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Loại không gian</label>
                                        <select name="space_type" class="form-select @error('space_type') is-invalid @enderror">
                                            <option value="" {{ old('space_type') ? '' : 'selected' }}>Chọn loại không gian</option>
                                            <option value="Căn hộ" {{ old('space_type') === 'Căn hộ' ? 'selected' : '' }}>Căn hộ</option>
                                            <option value="Nhà phố / Biệt thự" {{ old('space_type') === 'Nhà phố / Biệt thự' ? 'selected' : '' }}>Nhà phố / Biệt thự</option>
                                            <option value="Văn phòng" {{ old('space_type') === 'Văn phòng' ? 'selected' : '' }}>Văn phòng</option>
                                            <option value="Khác" {{ old('space_type') === 'Khác' ? 'selected' : '' }}>Khác</option>
                                        </select>
                                        @error('space_type')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Nhu cầu của bạn</label>
                                        <textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="4" placeholder="Mô tả ngắn về hiện trạng và mong muốn của bạn">{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12 d-flex justify-content-end mt-2">
                                        <button type="submit" class="btn btn-primary px-4">
                                            Gửi yêu cầu
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

