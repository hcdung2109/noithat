@extends('layouts.admin')

@section('title', 'Thêm yêu cầu tư vấn')
@section('page_title', 'Thêm yêu cầu tư vấn')

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-body">
            <form action="{{ route('admin.consultations.store') }}" method="post">
                @include('admin.consultations._form')
            </form>
        </div>
    </div>
@endsection

