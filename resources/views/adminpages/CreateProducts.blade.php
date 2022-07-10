{{-- <?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: LoginAdmin.php');
}
?> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Products</title>
    <link href="../resources/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="stylesheet" href="../resources/css/base.css">
    <link rel="stylesheet" href="../resources/css/main.css">
    <link rel="stylesheet" href="../resources/css/user_order_history.css">
    <link rel="stylesheet" href="../resources/css/ThongTin_AD.css">
    <link rel="stylesheet" href="../resources/css/user_order_history.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>

<body>
    @include('header');
    @include('sidebarAdmin')
        <div class="content-user">
            <div class="admin-title-account" style="font-size: 18px; padding: 0;">Thêm sản phẩm</div>
            <div class="user-table" style="width: 100%;">
                <form action="" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="from_row">
                        <label class="input__label" style="margin-right: 50px;">Tên sản phẩm</label>
                        <input type="text" class="from__input" name="TenSach" placeholder="Tên sách"
                            style="width: 300px;" size="38">
                    </div>
                    <div class="from_row">
                        <label class="input__label" style="margin-right: 50px;">Danh mục</label>
                        <input type="text" class="from__input" name="DanhMuc" placeholder="Danh mục"
                            style="width: 300px;" size="38">
                    </div>
                    <div class="from_row">
                        <label class="input__label" style="margin-right: 50px;">Giá</label>
                        <input type="text" class="from__input" name="DonGia" placeholder="Giá sản phẩm"
                            style="width: 300px;" size="38">
                    </div>
                    <div class="from_row">
                        <label class="input__label" style="margin-right: 50px;">Hình ảnh</label>
                        <input type="file" class="from__input" name="HinhAnh" style="width: 300px;" size="38">
                    </div>
                    <div class="from_row">
                        <label class="input__label" style="margin-right: 50px;">Mô tả</label>
                        <textarea class="from__input" rows="10" name="MoTa" placeholder="Điền mô tả cần thiết" style="width: 300px;"
                            size="38"></textarea>
                    </div>
                    <div class="from_row">
                        <label class="input__label" style="margin-right: 50px;">&nbsp;</label>
                        <input type="submit" name="themsanpham" value="Thêm sản phẩm" class="btn btn-default">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('footer')


</body>

</html>
