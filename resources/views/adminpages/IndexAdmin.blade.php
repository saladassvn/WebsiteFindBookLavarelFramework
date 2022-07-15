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
    <title>Index Admin</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="stylesheet" href="../resources/css/base.css">
    <link rel="stylesheet" href="../resources/css/main.css">   
    <link rel="stylesheet" href="../resources/css/user_order_history.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>

<body>
    @include('header')
    @include('sidebarAdmin')
    <div class="content-user">
        <div class="admin-title-account" style="font-size: 18px; padding: 0;">
            <h2>Quản lý đặt hàng</h2>
            <div class="search">
                <form class="search-form" action="" method="GET">
                    <input class="search-input" type="text" id="" name="show" placeholder="Nhập tên sách" required>
                    <button class="search-button" type="submit">Search</button>
                </form>   
            </div>
        </div>
        <div class="user-table" style="width: 100%;">
            <table class="table table-bordered">
                <tr>
                    <th>@sortablelink('MaSach','Mã Sách')</a></th>
                    <th>@sortablelink('TenSach','Tên Sản Phẩm')</th>
                    <th>@sortablelink('DanhMuc','Danh Mục')</th>
                    <th>@sortablelink('MoTa','Mô tả')</th>
                    <th>@sortablelink('HinhAnh','Hình Ảnh')</th>
                    <th>@sortablelink('DonGia','Giá Sản Phẩm')</th>
                    <th>Quản lý</th>
                </tr>
                @foreach ($sach as $sachs)
                    <tr>
                        <td>{{ $sachs['MaSach'] }}</td>
                        <td>{{ $sachs['TenSach'] }}</td>
                        <td>{{ $sachs['DanhMuc'] }}</td>
                        <td>{{ $sachs['MoTa'] }}</td>
                        <td><img src=../public/User/img/{{ $sachs['HinhAnh']}} height="100" width="80"></td>
                        <td>{{ $sachs['DonGia'] }}</td>
                        <td>
                            <a href={{ '/admin/edit/' . $sachs['MaSach'] }} class="btn-ED-add">
                                <button class="btn btn-warning">Edit</button>
                            </a>
                            <a href={{ '/admin/delete/' . $sachs['MaSach'] }} class="btn-ED-add">
                                <button class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div class="pagination-block">
                {{ $sach->links('adminpages.layouts.paginationlinks') }}
            </div>
        </div>
    </div>
    </div>
    @include('footer')
</body>
<style>
    .w-5{
        display: none;
    }
</style>
</html>
