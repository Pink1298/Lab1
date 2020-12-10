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
<form method="post" action="{{ route('admin.loai.update', ['id' => $loai->l_ma]) }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label for="tenLoai"> Tên loại</label>
        <input type="text" class="form-control" name="l_ten" id="l_ten" value="{{ $loai->l_ten }}"/>
    </div>
    <div class="form-group">
        <label for="trangThai"> Trạng thái </label>
        <select name="l_trangThai" id="l_trangThai">
            <option value="1" {{ $loai->l_trangThai == 1 ? 'selected' : ''}}> Khóa </option>
            <option value="2" {{ $loai->l_trangThai == 2 ? 'selected' : ''}}> Mở </option>
        </select>
    </div>
    <button>Cập nhật</button>
</form>
@endsection
