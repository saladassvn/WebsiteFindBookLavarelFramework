<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link href="{{ asset('resources/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('resources/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/ThongTin_AD.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/user_order_history.css') }}">
    <link rel="stylesheet" href="{{asset('public/User/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/User/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('public/User/css/main.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    <!-- Bootstrap Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>
    <style>
        table,
        td,
        th {
            border-bottom: 1px solid rgb(244, 244, 244);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 20px 10px;
        }
    </style>
    @include('header')
    <div class="content-user">
        <div class="admin-title-account" style="font-size: 18px; padding: 0;">CHI TIẾT ĐƠN HÀNG</div>
        <div class="user-table" style="width: 100%;">
            <form action="" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="from_row">
                    <label class="input__label" style="margin-right: 50px; font-weight:bold; font-size:13px">Mã Đơn Hàng</label>
                    <label class="from__input" name="MaDH" style="width: 300px">{{ $donhang['MaDH'] }}</label>
                </div>
                <div class="from_row">
                    <label class="input__label" style="margin-right: 50px; font-weight:bold; font-size:13px">Tên Khách Hàng</label>
                    {{-- <input type="text" class="from__input" name="DanhMuc" placeholder="Danh mục"
                        style="width: 300px;" value="{{$donhang['TenKH']}}" size="38" required> --}}
                    <label class="from__input" name="TenKH">{{ $donhang['TenKH'] }}</label>
                </div>
                <div class="from_row">
                <label class="input__label" style="margin-right: 50px; font-weight:bold; font-size:13px" >Tên sách</label>
                </div>
                @foreach ($chitiets as $chitiet)
                <div class="from_row">

                    
                    {{-- <input type="text" class="from__input" name="DanhMuc" placeholder="Danh mục"
                       
                        style="width: 300px;" value="{{ $chitiet['TenSach'] }}" size="38" required> --}}
                        <img id="chevron" src="../public/User/img/{{$chitiet['HinhAnh']}}">
                    <label class="from__input" name="TenKH" style = "font-size:11px">   {{ $chitiet['TenSach']}} - Số lượng: {{ $chitiet['DinhLuong']}} - Giá: {{ $chitiet['Gia']}}</label>
                </div>
                @endforeach
                <div class="from_row">
                    <label class="input__label" style="margin-right: 50px; font-weight:bold; font-size:13px">Số Điện Thoại</label>
                    <label class="from__input" name="Phone">{{ $donhang['Phone'] }}</label>
                </div>
                <div class="from_row">
                    <label class="input__label" style="margin-right: 50px; font-weight:bold; font-size:13px">Địa Chỉ</label>
                    <label class="from__input" name="DiaChi">{{ $donhang['DiaChi'] }}</label>
                </div>
                <div class="from_row">
                    <label class="input__label" style="margin-right: 50px; font-weight:bold; font-size:13px">HTTT</label>
                    <label class="from__input" name="HTTT">{{ $donhang['HTTT'] }}</label>
                </div>
                <div class="from_row">
                    <label class="input__label" style="margin-right: 50px; font-weight:bold; font-size:13px">Tổng Tiền</label>
                    <label class="from__input" name="TongTien">{{ $donhang['TongTien'] }} VNĐ</label>
                </div>
                <div class="from_row">
                    <label class="input__label" style="margin-right: 50px;">&nbsp;</label>
                    <a class="btn btn-warning" href="{{URL::to('/vieworder')}}">Trở về danh sách</a>
                </div>
            </form>

        </div>
    </div>
    </div>
    @include('footer')
</body>
</html>