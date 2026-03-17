@extends('layouts.admin')

@section('title', 'Chỉnh sửa yêu cầu tư vấn')
@section('page_title', 'Chỉnh sửa yêu cầu tư vấn')

@section('content')
    <div class="card card-warning card-outline">
        <div class="card-body">
            <form action="{{ route('admin.consultations.update', $consultationRequest) }}" method="post">
                @method('put')
                @include('admin.consultations._form')
            </form>
        </div>
    </div>
@endsection

