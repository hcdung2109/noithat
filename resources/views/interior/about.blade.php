@extends('layouts.app')

@section('title', 'Giới thiệu Studio Nội Thất')

@section('content')
    <section class="py-5 bg-white border-bottom">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6">
                    <p class="text-uppercase small letter-spacing mb-2 text-muted">Về chúng tôi</p>
                    <h1 class="h2 fw-semibold mb-3">Studio Nội Thất – Tạo bản sắc cho không gian sống.</h1>
                    <p class="text-muted mb-3">
                        Studio Nội Thất là đội ngũ kiến trúc sư và nhà thiết kế trẻ với nhiều năm kinh nghiệm
                        trong lĩnh vực thiết kế – thi công nội thất căn hộ, nhà phố, biệt thự và văn phòng.
                    </p>
                    <p class="text-muted mb-3">
                        Chúng tôi tập trung vào việc cân bằng giữa thẩm mỹ, công năng và ngân sách thực tế,
                        giúp khách hàng sở hữu không gian vừa đẹp, vừa tiện nghi, lại bền vững theo thời gian.
                    </p>
                    <div class="row g-3 mt-2">
                        <div class="col-sm-4">
                            <div class="p-3 rounded bg-light h-100">
                                <div class="fw-semibold">50+ dự án</div>
                                <div class="small text-muted">Căn hộ, nhà phố, văn phòng đã hoàn thiện.</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="p-3 rounded bg-light h-100">
                                <div class="fw-semibold">10+ năm</div>
                                <div class="small text-muted">Kinh nghiệm tổng hợp của đội ngũ kiến trúc sư.</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="p-3 rounded bg-light h-100">
                                <div class="fw-semibold">Cam kết</div>
                                <div class="small text-muted">Đúng tiến độ, minh bạch chi phí, bảo hành rõ ràng.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ratio ratio-4x3 rounded overflow-hidden shadow-sm">
                        <img src="https://images.pexels.com/photos/4475928/pexels-photo-4475928.jpeg?auto=compress&cs=tinysrgb&w=1200"
                             alt="Không gian làm việc của Studio Nội Thất"
                             class="w-100 h-100 object-fit-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-8">
                    <h2 class="section-title">Giá trị cốt lõi</h2>
                    <p class="text-muted">
                        Ba trụ cột định hình mọi thiết kế và quyết định trong mỗi dự án mà chúng tôi thực hiện.
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Tinh tế</h5>
                            <p class="card-text text-muted">
                                Chi tiết được nghiên cứu kỹ lưỡng, phối hợp hài hòa giữa màu sắc, vật liệu và ánh sáng
                                để tạo nên tổng thể sang trọng nhưng không phô trương.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Công năng</h5>
                            <p class="card-text text-muted">
                                Mỗi mét vuông đều được tối ưu về lưu trữ, giao thông và trải nghiệm sử dụng,
                                mang lại sự thoải mái trong sinh hoạt hàng ngày.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Bền vững</h5>
                            <p class="card-text text-muted">
                                Ưu tiên vật liệu bền, dễ bảo trì, hạn chế lãng phí và thiết kế có khả năng thích ứng
                                với nhu cầu thay đổi trong tương lai.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

