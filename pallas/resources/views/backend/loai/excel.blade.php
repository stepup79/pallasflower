<!DOCTYPE html>
<html>

<head>
    <title>Danh mục Loại</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        * {
            font-family: DejaVu Sans, sans-serif;
        }
    </style>
</head>

<body style="font-size: 10px">
    <div class="row">
        <table border="0" align="center" cellpadding="5" style="border-collapse: collapse;">
            <tr>
                <td colspan="4" align="center" style="font-size: 13px;" width="100">
                    <b>Công ty Hoa tươi Pallas</b></td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="font-size: 13px">
                    <b>http://pallas.vn/</b></td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="font-size: 13px">
                    <b>(0292)3.888.999 # 01.222.888.999</b></td>
            </tr>
            <tr>
                <td colspan="4" align="center">
                    {{-- Đây là khoảng trống dùng để chèn ảnh LOGO bằng Laravel Excel --}}
                    {{-- Khi hiển thị ảnh để xem trên WEB -> sử dụng đường dẫn URL bằng hàm asset() --}}
                    {{-- Khi xuất file Excel, muốn chèn hình ảnh phải sử dụng đường dẫn PATH bằng hàm public_path() --}}
                    
                    {{-- Nếu muốn debug để xem mẫu in, bỏ comment dòng dưới đây --}}
                    {{-- <img src="{{ asset('storage/img/pallas.png') }}" /> --}}
                </td>
            </tr>
            <tr>
                <td colspan="4" class="caption" align="center" style="text-align: center; font-size: 20px">
                    <b>Danh mục Loại</b>
                </td>
            </tr>
            <tr style="border: 1px thin #000">
                <th style="text-align: center">STT</th>
                <th style="text-align: center">Tên loại sản phẩm</th>
                <th style="text-align: center">Chủ đề</th>
            </tr>
            @foreach ($danhsachloai as $loai)
            <tr style="border: 1px thin #000">
                <td align="center" valign="middle" width="5">
                    {{ $loop->index + 1 }}
                </td>
                <td align="left" valign="middle" width="20">{{ $loai->l_ten }}</td>
                @foreach ($danhsachchude as $chude)
                    @if ($loai->cd_id == $chude->cd_id)
                    <td align="left" width="20" valign="middle">{{ $chude->cd_ten }}</td>
                    @endif
                @endforeach
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>