<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name', 'Studio Nội Thất'))</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="bg-light">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}">
                    <img src="{{ $siteSetting?->logo_url ?: asset('img/logo.svg') }}" alt="{{ $siteSetting?->brand_name ?: 'Studio Nội Thất' }}logo" class="brand-logo">
                    <span class="fw-bold text-uppercase d-none d-sm-inline">{{ $siteSetting?->brand_name ?: 'Studio Nội Thất' }}</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/#services') }}">Dịch vụ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/#projects') }}">Dự án</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/#process') }}">Quy trình</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/#contact') }}">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="mt-5 footer-main">
        <div class="container py-4 py-md-5">
            <div class="row gy-4">
                <div class="col-md-5">
                    <h6 class="footer-title mb-2">{{ $siteSetting?->company_name ?: 'CÔNG TY TNHH STUDIO NỘI THẤT BICSPACE' }}</h6>
                    <p class="footer-text mb-1">Thiết kế & thi công nội thất trọn gói cho căn hộ, nhà phố và văn phòng.</p>
                    <p class="footer-text mb-0">MST: {{ $siteSetting?->tax_code ?: '0312345678' }}</p>
                </div>
                <div class="col-md-4">
                    <h6 class="footer-title mb-2">Thông tin liên hệ</h6>
                    <p class="footer-text mb-1">Hotline: <a href="tel:{{ preg_replace('/\D+/', '', $siteSetting?->hotline ?: '0901 234 567') }}" class="footer-link">{{ $siteSetting?->hotline ?: '0901 234 567' }}</a></p>
                    <p class="footer-text mb-1">Email: <a href="mailto:{{ $siteSetting?->email ?: 'hello@studionoithat.vn' }}" class="footer-link">{{ $siteSetting?->email ?: 'hello@studionoithat.vn' }}</a></p>
                    <p class="footer-text mb-0">Địa chỉ: {{ $siteSetting?->address ?: '123 Nguyễn Văn A, P. Bến Nghé, Q.1, TP.HCM' }}</p>
                </div>
                <div class="col-md-3 text-md-end">
                    <h6 class="footer-title mb-2">Giờ làm việc</h6>
                    <p class="footer-text mb-1">{{ $siteSetting?->working_hours ?: 'Thứ 2 - Thứ 7: 08:00 - 18:00' }}</p>
                    <p class="footer-text mb-1">
                        <a href="{{ route('admin.login') }}" class="footer-link">Quản trị</a>
                    </p>
                    <p class="footer-text mb-0">© {{ date('Y') }}{{ $siteSetting?->brand_name ?: 'Studio Nội Thất' }}</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
