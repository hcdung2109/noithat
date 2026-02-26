@extends('layouts.admin')

@section('title', 'Cài đặt website')
@section('page_title', 'Cài đặt thông tin website')

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title mb-0">Thông tin công ty, footer và logo</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.settings.update') }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')

                <div class="col-md-6">
                    <label class="form-label">Tên công ty (footer)</label>
                    <input type="text" name="company_name" value="{{ old('company_name', $siteSetting->company_name) }}" class="form-control @error('company_name') is-invalid @enderror" required>
                    @error('company_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label">Tên thương hiệu</label>
                    <input type="text" name="brand_name" value="{{ old('brand_name', $siteSetting->brand_name) }}" class="form-control @error('brand_name') is-invalid @enderror" required>
                    @error('brand_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12">
                    <label class="form-label">Logo URL</label>
                    <input type="text" name="logo_url" value="{{ old('logo_url', $siteSetting->logo_url) }}" class="form-control @error('logo_url') is-invalid @enderror" placeholder="https://...">
                    @error('logo_url')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label">Mã số thuế</label>
                    <input type="text" name="tax_code" value="{{ old('tax_code', $siteSetting->tax_code) }}" class="form-control @error('tax_code') is-invalid @enderror">
                    @error('tax_code')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label">Hotline</label>
                    <input type="text" name="hotline" value="{{ old('hotline', $siteSetting->hotline) }}" class="form-control @error('hotline') is-invalid @enderror">
                    @error('hotline')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label">Email liên hệ</label>
                    <input type="email" name="email" value="{{ old('email', $siteSetting->email) }}" class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label">Giờ làm việc</label>
                    <input type="text" name="working_hours" value="{{ old('working_hours', $siteSetting->working_hours) }}" class="form-control @error('working_hours') is-invalid @enderror" placeholder="Thứ 2 - Thứ 7: 08:00 - 18:00">
                    @error('working_hours')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12">
                    <label class="form-label">Địa chỉ</label>
                    <input type="text" name="address" value="{{ old('address', $siteSetting->address) }}" class="form-control @error('address') is-invalid @enderror">
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Lưu cài đặt</button>
                </div>
            </form>
        </div>
    </div>
@endsection
