<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Info</title>
    <link rel="stylesheet" href="{{asset('public/User/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/User/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('public/User/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('public/User/css/ThongTin_AD.css')}}">
    <link rel="stylesheet" href="{{asset('public/User/css/user_order_history.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>

<body>
@include('header')
        <!-- content -->.
        <div class="page-admin">
            <div class="sidebar-admin">
                <div class="sidebar-title">DANH SÁCH CHỨC NĂNG</div>
                <a class="sidebar-item" href="{{(URL::to('/user'))}}">
                    <span class="fa fa-user-alt"></span>
                    <span class="sidebar-item-title">Thông tin tài khoản</span>
                </a>
                <a class="sidebar-item" href="ViewOrder.php">
                    <span class="fa fa-address-card"></span>
                    <span class="sidebar-item-title">Xem đơn hàng</span>
                </a>
            </div>
            <div class="content-user">
                <div class="user-account">    
                @if(isset($details))
                    <div class="user-title-account">THÔNG TIN TÀI KHOẢN</div>
                        <form action="" method="post">
                            <div class="from_row">
                                <label style="margin-right: 50px; font-size: 15px;">Họ và tên</label>
                                <input type="text" name="ten" value={{$details->TenKH}}  class = "from__input", size = "38", placeholder = "Họ Tên", style = "width: 300px; font-size: 15px;", required>
                            </div>
                            <div class="from_row">
                                <label style="margin-right: 50px; font-size: 15px;" for="email">Email</label>
                                <input type="email" name="email" value={{$details->Email}} class = "from__input", size = "38", placeholder = "Nhập địa chỉ email của bạn", style = "width: 300px; font-size: 15px;", required>
                            </div>
                            <div class="from_row">
                                <label style="margin-right: 50px; font-size: 15px;" for="sdt">Địa chỉ</label>
                                <input type="text" name="dc"  value={{$details->DiaChi}} class = "from__input", size = "38", placeholder = "Nhập địa chỉ của bạn", style = "width: 300px; font-size: 15px;", required>
                            </div>
                            <div class="from_row">
                                <label style="margin-right: 50px; font-size: 15px;" for="sdt">Số điện thoại</label>
                                <input type="text" name="sdt"  value={{$details->Phone}} class = "from__input", size = "38", placeholder = "Hãy nhập SĐT để trải nghiệm tốt hơn", style = "width: 300px; font-size: 15px;", required>
            </div>
            <div class="from_row">
                <label class="input__label">&nbsp;</label>
                <button class="btn__submit" type="submit" name="update">Cập nhật</button>
            </div>
                        </form>
                @endif
                </div>
            </div>
        </div>

@include('footer')
</body>
</html>