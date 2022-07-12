<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="{{asset('public/User/css/Login_Register.css')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    
    <form action="{{url('/store')}}" type="get">
    
        <div class="register">
            <h1 style= "text-align: center;">Đăng nhập</h1>
            <p style= "text-align: center;">Vui lòng điền thông tin để đăng nhập</p>

            <hr>
                <label for="email"><b>Tên đăng nhập</b></label>
                <input type="text" placeholder="Nhập địa chỉ email" name="email" id="email">
                <label for="matkhau"><b>Mật khẩu</b></label>
                <input type="password" placeholder="Nhập mật khẩu" name="password" id="password">
            <hr>
            @include('alert')
            <input type="submit" name="dangnhap" id="" class="submit" value="Đăng nhập">
        </div>
        <div class="register login">
            <p>Đăng ký tài khoản mới tại đây <a href="{{(URL::to('/register'))}}">Đăng ký</a>.</p>
        </div>
        @csrf
    </form>
</body>
</html>