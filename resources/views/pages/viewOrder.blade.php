<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Order</title>
    <link rel="stylesheet" href="{{asset('public/User/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/User/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('public/User/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('public/User/css/user_order_history.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>
<style>
    table, td, th {
        border-bottom: 1px solid rgb(244, 244, 244);
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 20px 10px;
    }
</style>
@include('header')
<div class="dau__cart">
                            <a href="Cart.php" class="dau__cart-wrap">
                                <i class="dau__cart-icon fas fa-shopping-cart"></i>
                            </a>
                    </div>
                </div>
            </div>  
        </div>

        <div class="page-admin">
            <div class="sidebar-admin">
                <div class="sidebar-title">DANH SÁCH CHỨC NĂNG</div>
                <a class="sidebar-item" href="{{(URL::to('/user'))}}">
                    <span class="fa fa-user-alt"></span>
                    <span class="sidebar-item-title">Thông tin tài khoản</span>
                </a>
                <a class="sidebar-item" href="{{ URL::to('/vieworder') }}">
                    <span class="fa fa-address-card"></span>
                    <span class="sidebar-item-title" >Xem đơn hàng</span>
                </a>
            </div>
            <div class="content-user">
                <div class="admin-title-account" style="font-size: 25px; padding: 0; font-weight: bold;">Xem đơn hàng của tôi</div>
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
                                <th style="width: 150px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                    @foreach ($details as $donhang)
                        <tr class="order-rows">
                            <td style="text-align: center;">{{ $donhang['MaDH'] }}</td>
                            <td style="text-align: center;">{{ $donhang['TenKH'] }}</td>
                            <td style="text-align: center;">{{ $donhang['Phone'] }}</td>
                            <td style="text-align: center;">{{ $donhang['DiaChi'] }}</td>
                            <td style="text-align: center;">{{ $donhang['HTTT'] }}</td>
                            <td style="text-align: center;">{{ $donhang['TongTien'] }}</td>
                            <td style="text-align: center;">                           
                                <a href="{{(URL::to('/detailOrder/' . $donhang['MaDH']))}}" class="btn-ED-add">
                                    
                                    <button class="btn btn-warning" href="{{(URL::to('/detailOrder/' . $donhang['MaDH']))}}">Xem Chi Tiết</button>
                                </a>                            
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                        </tbody>

                    </table>
                                
                                <li class="pagination-item">
                                    <a href="" class="pagination-item__link">
                                        <i class="pagination-item__icon fas fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                </div>
            </div>
        </div>


@include('footer')
</body>