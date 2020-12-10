@extends('backend.layouts.master')

@section('title')
	Test Loai
@endsection

@section('custom-css')
	<style> 
    table {
       text-align: center
    }
    </style>
@endsection

@section('content')
<form method="post" action="{{ route('admin.loai.store') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="tenLoai"> Tên loại</label>
        <input type="text" class="form-control" name="l_ten" id="l_ten" value="{{ old('l_ten') }}"/>
    </div>
    <div class="form-group">
        <label for="trangThai"> Trạng thái </label>
        <select name="l_trangThai" id="l_trangThai">
            <option value="1" {{ old('l_trangThai') == 1 ? 'selected' : ''}}> Khóa </option>
            <option value="2" {{ old('l_trangThai') == 2 ? 'selected' : ''}}> Mở </option>
        </select>
    </div>
    <button>Thêm mới</button>
</form>
@endsection
