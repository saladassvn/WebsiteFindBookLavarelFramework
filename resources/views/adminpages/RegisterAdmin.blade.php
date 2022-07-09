<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!-- Nhúng file CSS -->
    <link rel="stylesheet" href="../resources/css/Login_Register.css" />
    <title>Register Admin</title>
</head>
<body>
<?php
    include_once('../connect.php');
    if (isset($_POST["btn_submit"])) {
		$Email = $_POST["email"];
		$MatKhau = $_POST["matkhau"];
		$TenQT = $_POST["username"];
		$Phone = $_POST["sdt"];
		if ($Email == "" || $MatKhau == "" || $TenQT == "" || $Phone == "") {
			echo "Bạn vui lòng nhập đầy đủ thông tin";
		}else{
            $sql="select * from taikhoanqt where email='$Email'";
            $kt=mysqli_query($conn, $sql);

            if(mysqli_num_rows($kt)  > 0){
                echo "Tài khoản đã tồn tại";
            }else{
                $sql = "INSERT INTO taikhoanqt(
                    Email,
                    MatKhau,
                    TenQT,
                    Phone
                    ) VALUES (
                    '$Email',
                    '$MatKhau',
                    '$TenQT',
                    '$Phone'
                    )";
                    mysqli_query($conn,$sql);
                    echo "Chúc mừng bạn đã đăng ký thành công";
                }
            }
    }
?>
    <form action="RegisterAdmin.php" method="post">
        <div class="register">
        
            <h1>Đăng ký Admin</h1>
            <p>Vui lòng điền thông tin để đăng ký</p>
            <hr>
        
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Nhập địa chỉ email" name="email" id="email">
                <label for="matkhau"><b>Mật khẩu</b></label>
                <input type="password" placeholder="Nhập mật khẩu" name="matkhau" id="matkhau">
                <label for="username"><b>Họ và tên</b></label>
                <input type="text" placeholder="Họ và tên đầy đủ" name="username" id="username">
                <label for="sdt"><b>Số điện thoại</b></label>
                <input type="text" placeholder="Nhập số điện thoại" name="sdt" id="sdt">  
            <hr>
            <input type="checkbox" name="cbd2"> Để tạo tài khoản bạn đã là một quản trị viên của chúng tôi <br><br>
            <input type="submit" name="btn_submit" id="" class="submit" value="Đăng ký">
        </div>
        <div class="register login">
            <p>Bạn đã có tài khoản rồi? <a href="LoginAdmin.php">Đăng nhập</a>.</p>
        </div>
    </form>
</body>
</html>