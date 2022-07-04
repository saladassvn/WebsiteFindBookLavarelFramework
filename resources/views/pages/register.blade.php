<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!-- Nhúng file CSS -->    
    <link rel="stylesheet" href="{{asset('public/User/css/Login_Register.css')}}" />
    <title>Register</title>
</head>
<body>
    <form action="Register.php" method="post" >
        <div class="register">
            <h1 style= "text-align: center;">Đăng ký</h1>
            <p style= "text-align: center;">Vui lòng điền thông tin để đăng ký</p>
            <hr>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Nhập địa chỉ email" name="email" id="email">
                <label for="matkhau"><b>Mật khẩu</b></label>
                <input type="password" placeholder="Nhập mật khẩu" name="password" id="password">
                <label for="username"><b>Họ và tên</b></label>
                <input type="text" placeholder="Họ và tên đầy đủ" name="username" id="username">
                <label for="sdt"><b>Số điện thoại</b></label>
                <input type="text" placeholder="Nhập số điện thoại" name="sdt" id="sdt">
                <label for="diachi"><b>Địa chỉ</b></label>
                <input type="text" placeholder="Nhập địa chỉ" name="diachi" id="diachi">
                
            <hr>
            <p>Để tạo tài khoản vui lòng đồng ý với điều khoản của chúng tôi</p>
            <input type="submit" name="btn_submit" id="" class="submit" value="Đăng ký">
        </div>
        <div class="register login">
            <p>Bạn đã có tài khoản rồi? <a href="{{(URL::to('/login'))}}">Đăng nhập</a>.</p>
        </div>
        @csrf
    </form>
</body>
</html> 