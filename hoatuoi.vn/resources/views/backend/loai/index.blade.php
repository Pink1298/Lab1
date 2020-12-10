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
<a class = "btn btn-primary" href="{{ route('admin.loai.create')}}"> Thêm mới </a>
    <table>
        <tr>
            <td>Mã loại</td>
            <td>Tên loại</td>
            <td>Ngày tạo mới</td>
            <td>Ngày cập nhật</td>
            <td>Hành động</td>
        </tr>
        @foreach($dsLoai as $loai)
        <tr>
            <td>{{ $loai -> l_ma }}</td>
            <td>{{ $loai -> l_ten }}</td>
            <td>{{ $loai -> l_taoMoi }}</td>
            <td>{{ $loai -> l_capNhat }}</td>
            <td> 
                <a href="{{ route('admin.loai.edit', ['id' => $loai->l_ma]) }}"> Sửa </a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
