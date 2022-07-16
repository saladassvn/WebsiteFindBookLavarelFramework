
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../resources/css/Login_Register.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>
</head>

<body>
    <form action="{{ 'login' }}" method="post">
        {{ csrf_field() }}
        <div class="register">
            <h1 style="text-align:center;font-family:Blippo;">ADMIN SHOPIT</h1>
            <p style="text-align:center;">Vui lòng điền thông tin để đăng nhập</p>
            <hr>
            <label for="email"><b>Tên đăng nhập</b></label>
            <input type="text" placeholder="Nhập địa chỉ email" name="Email" id="Email">
            <label for="matkhau"><b>Mật khẩu</b></label>
            <input type="password" placeholder="Nhập mật khẩu" name="MatKhau" id="MatKhau">
            <?php //Hiển thị thông báo thành công
            ?>
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <strong>{{ Session::get('success') }}</strong>
                    {{--  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>  --}}
                </div>
            @endif
            <?php //Hiển thị thông báo lỗi
            ?>
            @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <strong>{{ Session::get('error') }}</strong>
                    {{--  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>  --}}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    {{--  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>  --}}
                </div>
            @endif
            <hr>
            <input type="submit" name="dangnhap" id="" class="submit" value="Đăng nhập">
        </div>
    </form>
</body>

</html>
