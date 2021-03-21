@extends('print.layouts.paper')

@section('title')
Biểu mẫu Phiếu in danh sách loại sản phẩm
@endsection

@section('paper-size') A4 @endsection
@section('paper-class') A4 @endsection

@section('custom-css')
@endsection

@section('paper-toolbar-top')
    <a href={{ route('admin.loai.index') }}> Quay về trang chủ</a>
@endsection

@section('content')
<section class="sheet padding-10mm">
    <article>
        <table border="0" align="center">
            <tr>
                <td class="companyInfo" align="center">
                    Công ty TNHH Sunshine<br />
                    http://sunshine.com/<br />
                    (0292)3.888.999 # 01.222.888.999<br />
                    <img src="{{ asset('assets/storage/sunshine_wm64.png') }}" />
                </td>
            </tr>
        </table>
        <br />
        <br />
        <?php 
        $tongSoTrang = ceil(count($dsLoai)/5);
        ?>
        <table border="1" align="center" cellpadding="5">
            <caption>Danh sách loại sản phẩm</caption>
            <tr>
                <th colspan="6" align="center">Trang 1 / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th>STT</th>
                <th>Mã loại</th>
                <th>Tên loại</th>
                <th>Trạng thái</th>
            </tr>
            @foreach ($dsLoai as $loai)
            <tr>
                <td align="center">{{ $loop->index + 1 }}</td>
                <td align="center">{{ $loai->l_ma }}</td>
                <td align="left">{{ $loai->l_ten }}</td>
                <td align="center">{{ $loai->l_trangThai }}</td>
            </tr>
            @if (($loop->index + 1) % 5 == 0)
        </table>
        <div class="page-break"></div>
        <table border="1" align="center" cellpadding="5">
            <tr>
                <th colspan="6" align="center">Trang {{ 1 + floor(($loop->index + 1) / 5) }} / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th>STT</th>
                <th>Mã loại</th>
                <th>Tên loại</th>
                <th>Trạng thái</th>
            </tr>
            @endif
            @endforeach
        </table>
    </article>
</section>
@endsection