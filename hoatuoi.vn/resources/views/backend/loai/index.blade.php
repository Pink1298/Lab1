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
    <table class="table table-striped table-hover">
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
            <div class="btn-group col-xs-3">
             
                <a href="{{ route('admin.loai.edit', ['id' => $loai->l_ma]) }}" class="btn btn-primary mr-1 rounded">Sửa</a>
            
                <form name="frmDelete" method="post" action="{{ route('admin.loai.destroy', ['id' => $loai->l_ma]) }}" class="frmDelete" data-id="{{ $loai->l_ma }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE" />
                    <button class="btn btn-danger rounded">Xóa</button>
                </form>
             
            </div>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
