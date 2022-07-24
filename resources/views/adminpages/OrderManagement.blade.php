<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management</title>
    <link rel="stylesheet" href="{{asset('resources/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('resources/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('resources/css/main.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('resources/css/ThongTin_AD.css')}}"> -->
    <link rel="stylesheet" href="{{asset('resources/css/user_order_history.css')}}">
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

        .w-5 {
            display: none;
        }
    </style>

    @include('header')
    @include('sidebarAdmin')
    <div class="content-user">
        <h2>Quản lý đặt hàng</h2>
        <div class="search">
            <form class="search-form" action="">
                <input class="search-input" type="search" id="" name="search" placeholder="Nhập tên người đặt hàng"
                    value="{{ $search }}">
                <button class="search-button" type="submit">Tìm Kiếm</button>
            </form>
        </div>
        <div class="user-table" style="width: 100%;">
            <table>
                <thead>
                    <tr>
                        <th style="text-align: center;">Mã đơn hàng</th>
                        <th style="width: 150px;">Tên người nhận</th>
                        <th style="width: 150px;">Số điện thoại</th>
                        <th style="width: 150px;">Địa chỉ</th>
                        <th style="width: 150px;">Hình thức thanh toán</th>
                        <th style="width: 150px;">Giá tổng đơn hàng</th>
                        <th style="width: 150px;">Quản lý</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $donhang)
                        <tr class="order-rows">
                            <td style="text-align: center;">{{ $donhang['MaDH'] }}</td>
                            <td style="text-align: center;">{{ $donhang['TenKH'] }}</td>
                            <td style="text-align: center;">{{ $donhang['Phone'] }}</td>
                            <td style="text-align: center;">{{ $donhang['DiaChi'] }}</td>
                            <td style="text-align: center;">{{ $donhang['HTTT'] }}</td>
                            <td style="text-align: center;">{{ $donhang['TongTien'] }}</td>
                            <td style="text-align: center;">
                            
                                <a href="{{(URL::to('/admin/detailOrder' . $donhang['MaDH']))}}" class="btn-ED-add">
                                    <button class="btn btn-warning">Xem Chi Tiết</button>
                                </a>
                                
                                <a href="{{(URL::to('/admin/deleteOrder/' . $donhang['MaDH']))}}" class="btn-ED-add">
                                    <button class="btn btn-danger">Xóa</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if ($search == null)
                <div class="pagination-block">
                    {{ $data->links('adminpages.layouts.paginationlinks') }}
                </div>
            @endif
        </div>
    </div>
    </div>
</body>

</html>
