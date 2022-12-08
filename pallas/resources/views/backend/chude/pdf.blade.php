<!DOCTYPE html>
<html>

<head>
    <title>Danh mục Chủ đề</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        * {
            font-family: DejaVu Sans, sans-serif;
        }

        body {
            font-size: 10px;
        }

        table {
            border-collapse: collapse;
        }

        td {
            vertical-align: middle;
        }

        caption {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

        .companyInfo {
            font-size: 13px;
            font-weight: bold;
            text-align: center;
        }

        .companyImg {
            width: 200px;
            height: 200px;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
    <div class="row">
        <table border="0" align="center">
            <tr>
                <td class="companyInfo">
                    Công ty Hoa tươi Pallas<br />
                    http://pallas.vn/<br />
                    (0292)3.888.999 # 01.222.888.999<br />
                    <img src="{{ asset('storage/img/pallas.png') }}" class="companyImg" />
                </td>
            </tr>
        </table>
        <br />
        <br />
        <?php 
        $tongSoTrang = ceil(count($danhsachchude)/5);
        ?>
        <table border="1" align="center" cellpadding="5" width="50%">
            <caption>Danh mục Chủ đề</caption>
            <tr>
                <th colspan="2" align="center">Trang 1 / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th>STT</th>
                <th>Chủ đề sản phẩm</th>
            </tr>
            @foreach ($danhsachchude as $chude)
            <tr>
                <td align="center" width="20%">{{ $loop->index + 1 }}</td>
                <td align="left">{{ $chude->cd_ten }}</td>               
            </tr>
            
            @if (($loop->index + 1) % 5 == 0)
        </table>
        <div class="page-break"></div>
        <table border="1" align="center" cellpadding="5" width="50%">
            <tr>
                <th colspan="2" align="center">Trang {{ 1 + floor(($loop->index + 1) / 5) }} / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th>STT</th>
                <th>Chủ đề sản phẩm</th>
            </tr>
            @endif
            @endforeach
        </table>
    </div>
</body>

</html>