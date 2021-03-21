@extends('backend.layouts.master')

@section('title')
	Sản phẩm
@endsection

@section('custom-css')
	<style> 
    /* table {
       text-align: center
    } */
    </style>
@endsection

@section('content')
<a class = "btn btn-primary" href="{{ route('admin.sanpham.create')}}"> Thêm mới sản phẩm </a>
<a href="{{ route('admin.sanpham.print') }}" class="btn btn-primary">In ấn</a>
<a href="{{ route('admin.sanpham.excel') }}" class="btn btn-primary">Xuất Excel</a>
<a href="{{ route('admin.sanpham.pdf') }}" class="btn btn-primary">Xuất PDF</a>
    <table class="table table-striped table-hover">
        <tr>
            <td>Mã sản phẩm</td>
            <td>Tên sản phẩm</td>
            <td>Giá gốc</td>
            <td>Giá bán</td>
            <td>Hình ảnh</td>
            <td>Thông tin</td>
            <td>Đánh giá</td>
            <td>Ngày tạo mới</td>
            <td>Ngày cập nhật</td>
            <td>Trạng thái</td>
            <td>Loại sản phẩm</td>
            <td>Hành động</td>
        </tr>
        @foreach($dsSanPham as $sp)
        <tr>
            <td>{{ $sp->sp_ma }}</td>
            <td>{{ $sp->sp_ten }}</td>
            <td>{{ $sp->sp_giaGoc }}</td>
            <td>{{ $sp->sp_giaBan }}</td>
            <!-- <td>{{ $sp->sp_hinh }}</td> -->
            <td><img src="{{ asset('storage/photos/' . $sp->sp_hinh) }}" style="width:120px; height:120px"></img></td>
            <td>{{ $sp->sp_thongTin }}</td>
            <td>{{ $sp->sp_danhGia }}</td>
            <td>{{ $sp->sp_taoMoi }}</td>
            <td>{{ $sp->sp_capNhat }}</td>
            <td>{{ $sp->sp_trangThai }}</td>
            <td>{{ $sp->loaisanpham->l_ten }}</td>
            <td> 
            <div class="btn-group col-xs-3">
             
                <a href="{{ route('admin.sanpham.edit', ['id' => $sp->sp_ma]) }}" class="btn btn-primary mr-1 rounded">Sửa</a>
            
                <form name="frmDelete" method="post" action="{{ route('admin.sanpham.destroy', ['id' => $sp->sp_ma]) }}" class="frmDelete" data-id="{{ $sp->sp_ma }}">
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
