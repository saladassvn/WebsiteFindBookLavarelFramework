<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../resources/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="../resources/css/style.css" />
    <link rel="stylesheet" href="../resources/css/base.css" />
    <link rel="stylesheet" href="../resources/css/main.css" />
</head>

<body>
    <div class="page-admin">
        <div class="sidebar-admin">
            <div class="sidebar-title">DANH SÁCH CHỨC NĂNG</div>
            <br><br>
            <a class="sidebar-item" href={{ 'create' }}>
                <span class="fas fa-tags" class="sidebar-item-title"style="color: #1c1c1d">Tạo sản phẩm</span>
            </a>
            <a class="sidebar-item" href={{ '/admin/IndexAdmin' }}>
                <span class="fa fa-address-book" class="sidebar-item-title" style="color: #1c1c1d">Quản lý sản
                    phẩm</span>
            </a>
            <a class="sidebar-item" href={{ '/admin/OrderManagement' }}>
                <span class="fas fa-tasks" class="sidebar-item-title"style="color: #1c1c1d">Quản lý đặt hàng</span>
            </a>
        </div>

</body>

</html>
