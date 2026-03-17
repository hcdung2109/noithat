@extends('layouts.admin')

@section('title', 'Yêu cầu tư vấn')
@section('page_title', 'Quản lý yêu cầu tư vấn')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title mb-0">Danh sách yêu cầu tư vấn</h3>
            <a href="{{ route('admin.consultations.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Thêm mới
            </a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Thời gian</th>
                            <th>Họ tên</th>
                            <th>SĐT</th>
                            <th>Email</th>
                            <th>Loại không gian</th>
                            <th>Nhu cầu</th>
                            <th style="width: 130px;" class="text-right">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($consultationRequests as $request)
                            <tr>
                                <td>{{ $request->created_at?->format('d/m/Y H:i') }}</td>
                                <td>{{ $request->name }}</td>
                                <td>{{ $request->phone }}</td>
                                <td>{{ $request->email ?: '-' }}</td>
                                <td>{{ $request->space_type ?: '-' }}</td>
                                <td style="max-width: 320px;">{{ $request->message ?: '-' }}</td>
                                <td class="text-right">
                                    <a href="{{ route('admin.consultations.edit', $request) }}" class="btn btn-sm btn-outline-secondary">
                                        Sửa
                                    </a>
                                    <form action="{{ route('admin.consultations.destroy', $request) }}" method="post" class="d-inline" onsubmit="return confirm('Xóa yêu cầu tư vấn này?');">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            Xóa
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted py-4">Chưa có yêu cầu tư vấn nào.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer clearfix">
            {{ $consultationRequests->links() }}
        </div>
    </div>
@endsection
