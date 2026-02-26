@extends('layouts.admin')

@section('title', 'Quản trị dự án nội thất')
@section('page_title', 'Quản trị dự án')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title mb-0">Danh sách dự án</h3>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus mr-1"></i> Thêm dự án mới
            </a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Tiêu đề</th>
                            <th>Phong cách</th>
                            <th>Diện tích</th>
                            <th>Nổi bật</th>
                            <th class="text-right">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                            <tr>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->style }}</td>
                                <td>{{ $project->area }}</td>
                                <td>
                                    @if ($project->is_featured)
                                        <span class="badge badge-success">Featured</span>
                                    @else
                                        <span class="badge badge-secondary">Normal</span>
                                    @endif
                                </td>
                                <td class="text-right">
                                    <a href="{{ route('projects.show', $project) }}" class="btn btn-sm btn-outline-secondary">Xem</a>
                                    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-outline-primary">Sửa</a>
                                    <form action="{{ route('admin.projects.destroy', $project) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Xóa dự án này?');">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted py-4">
                                    Chưa có dự án nào. Hãy bấm "Thêm dự án mới" để tạo dự án đầu tiên.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer clearfix">
            {{ $projects->links() }}
        </div>
    </div>
@endsection

