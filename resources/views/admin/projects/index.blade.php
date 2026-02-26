@extends('layouts.app')

@section('title', 'Quản trị dự án nội thất')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4 align-items-center">
                <div class="col-md-6">
                    <h1 class="h3 fw-semibold mb-0">Quản trị dự án</h1>
                </div>
                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
                        Thêm dự án mới
                    </a>
                </div>
            </div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="table-responsive bg-white rounded shadow-sm">
                <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Phong cách</th>
                            <th scope="col">Diện tích</th>
                            <th scope="col">Nổi bật</th>
                            <th scope="col" class="text-end">Thao tác</th>
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
                                        <span class="badge text-bg-success">Featured</span>
                                    @else
                                        <span class="badge text-bg-secondary">Normal</span>
                                    @endif
                                </td>
                                <td class="text-end">
                                    <a href="{{ route('projects.show', $project) }}" class="btn btn-sm btn-outline-secondary">
                                        Xem
                                    </a>
                                    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-outline-primary">
                                        Sửa
                                    </a>
                                    <form action="{{ route('admin.projects.destroy', $project) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Xóa dự án này?');">
                                            Xóa
                                        </button>
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

            <div class="mt-3">
                {{ $projects->links() }}
            </div>
        </div>
    </section>
@endsection

