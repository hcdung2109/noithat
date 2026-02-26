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
                        Một vài không gian gần đây chúng tôi thực hiện cho khách hàng tại TP.HCM và Hà Nội.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary">
                        Xem thêm dự án
                    </a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm project-card">
                        <img src="https://images.pexels.com/photos/1571463/pexels-photo-1571463.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Phòng khách căn hộ hiện đại" class="card-img-top img-fluid rounded-top-3">
                        <div class="card-body">
                            <h5 class="card-title">Căn hộ 2 phòng ngủ Vinhomes</h5>
                            <p class="card-text text-muted mb-1">Phong cách Modern Luxury</p>
                            <p class="card-text"><small class="text-muted">Diện tích 75m² · Thời gian 45 ngày</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm project-card">
                        <img src="https://images.pexels.com/photos/6587898/pexels-photo-6587898.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Bếp và bàn ăn" class="card-img-top img-fluid rounded-top-3">
                        <div class="card-body">
                            <h5 class="card-title">Nhà phố Family Home</h5>
                            <p class="card-text text-muted mb-1">Phong cách Scandinavian ấm áp</p>
                            <p class="card-text"><small class="text-muted">Diện tích 120m² · Thời gian 60 ngày</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm project-card">
                        <img src="https://images.pexels.com/photos/2747901/pexels-photo-2747901.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Không gian làm việc" class="card-img-top img-fluid rounded-top-3">
                        <div class="card-body">
                            <h5 class="card-title">Văn phòng Creative Studio</h5>
                            <p class="card-text text-muted mb-1">Không gian mở, đa chức năng</p>
                            <p class="card-text"><small class="text-muted">Diện tích 180m² · Thời gian 40 ngày</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-1">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm project-card">
                        <img src="https://images.pexels.com/photos/2528118/pexels-photo-2528118.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Phòng ngủ hiện đại, tối giản" class="card-img-top img-fluid rounded-top-3">
                        <div class="card-body">
                            <h5 class="card-title">Phòng ngủ Minimal Cozy</h5>
                            <p class="card-text text-muted mb-1">Phong cách Minimalism ấm áp</p>
                            <p class="card-text"><small class="text-muted">Diện tích 20m² · Thời gian 25 ngày</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm project-card">
                        <img src="https://images.pexels.com/photos/3965515/pexels-photo-3965515.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Không gian phòng khách và bếp liên thông" class="card-img-top img-fluid rounded-top-3">
                        <div class="card-body">
                            <h5 class="card-title">Căn hộ City View</h5>
                            <p class="card-text text-muted mb-1">Phong cách Contemporary</p>
                            <p class="card-text"><small class="text-muted">Diện tích 90m² · Thời gian 55 ngày</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm project-card">
                        <img src="https://images.pexels.com/photos/1457842/pexels-photo-1457842.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Quầy lễ tân văn phòng sáng tạo" class="card-img-top img-fluid rounded-top-3">
                        <div class="card-body">
                            <h5 class="card-title">Reception Creative Hub</h5>
                            <p class="card-text text-muted mb-1">Điểm nhấn thương hiệu ấn tượng</p>
                            <p class="card-text"><small class="text-muted">Diện tích 40m² · Thời gian 30 ngày</small></p>
                        </div>
                    </div>
                </div>
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
                            <form action="#" method="post">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Họ và tên</label>
                                        <input type="text" class="form-control" placeholder="Nguyễn Văn A">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Số điện thoại</label>
                                        <input type="tel" class="form-control" placeholder="0901 234 567">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" placeholder="email@domain.com">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Loại không gian</label>
                                        <select class="form-select">
                                            <option value="" selected>Chọn loại không gian</option>
                                            <option value="apartment">Căn hộ</option>
                                            <option value="house">Nhà phố / Biệt thự</option>
                                            <option value="office">Văn phòng</option>
                                            <option value="other">Khác</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Nhu cầu của bạn</label>
                                        <textarea class="form-control" rows="4" placeholder="Mô tả ngắn về hiện trạng và mong muốn của bạn"></textarea>
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

