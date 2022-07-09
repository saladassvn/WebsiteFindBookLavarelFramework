<?php
    session_start();
    include "../connect.php";
?>

<?php 
    if(isset($_GET['detele'])){
        $id= $_GET['detele'];
        $sql_xoa = mysqli_query($conn,"DELETE FROM donhang WHERE MaDH='$id'");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management</title>
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="stylesheet" href="../resources/css/base.css">
    <link rel="stylesheet" href="../resources/css/main.css">
    <!-- <link rel="stylesheet" href="../css/ThongTin_AD.css"> -->
    <link rel="stylesheet" href="../resources/css/user_order_history.css">
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
    <div id="main">
        <div class="dau">
            <div class="grid">
                <nav class="dau__navbar">
                    <ul class="dau__navbar-list">
                        <li class="dau__navbar-item dau__navbar-item--has-qr dau__navbar-item--separate">
                            Vào cửa hàng trên ứng dụng ShopIT

                            <!-- Begin:dau QR Code -->
                            <div class="dau__qr">
                                <img src="../img/qr_code.png" alt="QR code" class="dau__qr-img">
                                <div class="dau__qr-apps">
                                    <a href="#" class="dau__qr-link">
                                        <img src="../img/google_play.png" alt="Google Play" class="dau__qr-download-img">
                                    </a>
                                    <a href="#" class="dau__qr-link">
                                        <img src="../img/app_store.png" alt="App Store" class="dau__qr-download-img">
                                    </a>
                                </div>
                            </div>
                            <!-- End:dau QR Code -->

                        </li>
                        <li class="dau__navbar-item">
                            <span class="dau__navbar-title--no-pointer">Kết nối</span>
                            <a href="#" class="dau__navbar-icon-link">
                                <i class="dau__navbar-icon fab fa-facebook"></i>
                            </a>
                            <a href="#" class="dau__navbar-icon-link">
                                <i class="dau__navbar-icon fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                    
                    <ul class="dau__navbar-list">
                        <li class="dau__navbar-item dau__navbar-item--has-notify">
                            <a href="#" class="dau__navbar-item-link">
                                <i class="dau__navbar-icon far fa-bell"></i>
                                Thông báo
                            </a>
                            <div class="dau__notify">
                                <haeder class="dau__notify-dau">
                                    <h3>Thông Báo Mới Nhận</h3>
                                </haeder>
                                <footer class="dau__notify-footer">
                                    <a href="" class="dau__notify-footer-btn">Xem tất cả</a>
                                </footer>
                            </div>
                        </li>
                        <li class="dau__navbar-item">
                            <a href="#" class="dau__navbar-item-link">
                                <i class="dau__navbar-icon far fa-question-circle"></i>
                                Trợ giúp
                            </a></li>
                            <li class="dau__navbar-item dau__navbar-user">
                                <?php
                                    
                                    if(isset($_SESSION['admin'])){
                                ?>
                                       
                                        
                                <span class="dau__navbar-user-name"><?php echo "ADMIN: ".$_SESSION['admin']['admin_name']."";?></span>

                                <ul class="dau__navbar-user-menu">
                                    <li class="dau__navbar-user-item">
                                        <a href="CreateProducts.php">Tạo sản phẩm</a>
                                    </li>
                                    <li class="dau__navbar-user-item">
                                        <a href="IndexAdmin.php">Quản lý sản phẩm</a>
                                    </li>
                                    <li class="dau__navbar-user-item">
                                        <a href="OrderManagement.php">Quản lý đặt hàng</a>
                                    </li>
                                    
                                    <li class="dau__navbar-user-item dau__navbar-user-item--separate">
                                        <?php echo '<a href="LogoutAdmin.php">Đăng xuất</a>';?>
                                    </li>
                                    <?php
                                    }
                                   ?>
                                </ul>
                            </li>
                    </ul>
                </nav>

                <div class="dau-with-search">
                    <div class="dau__logo">
                        <a href="IndexAdmin.php" class="dau__logo-link">
                            <h1 class="dau__logo-img">ShopIT</h1>
                        </a>
                    </div>

                    <div class="dau__search">
                        <div class="dau__search-input-wrap">
                            <input type="text" class="dau__search-input" placeholder="Nhập tên sách để tìm kiếm dễ dàng hơn">
                        </div>
                        <div class="dau__search-select">
                            <a href="#" class="dau__search-select-label">BOOKS IT</a>
                            <i class="dau__search-select-icon fas fa-book"></i>
                        </div>
                        <button class="dau__search-btn">
                            <i class="dau__search-btn-icon fas fa-search"></i>
                        </button>
                    </div>

                    <!-- Cart layout -->
                    <div class="dau__cart">
                            <a href="#" class="dau__cart-wrap">
                                <i class="dau__cart-icon fas fa-shopping-cart"></i>
                            </a>
                    </div>
                </div>
            </div>  
    </div>

        <div class="page-admin">
            <div class="sidebar-admin">
                <div class="sidebar-title">DANH SÁCH CHỨC NĂNG</div>
                    <br><br>
                    <a class="sidebar-item" href="CreateProducts.php">
                        <span class="fas fa-tags" class="sidebar-item-title"style="color: #1c1c1d">Tạo sản phẩm</span>
                    </a>
                    <a class="sidebar-item" href="IndexAdmin.php">
                        <span class="fa fa-address-book" class="sidebar-item-title" style="color: #1c1c1d">Quản lý sản phẩm</span>
                    </a>
                    <a class="sidebar-item" href="OrderManagement.php">
                        <span class="fas fa-tasks" class="sidebar-item-title"style="color: #1c1c1d">Quản lý đặt hàng</span>
                    </a>
                </div>

               

            <div class="content-user">
                <div class="admin-title-account" style="font-size: 18px; padding: 0;">Quản lý đặt hàng</div>
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
                        <?php
                            // Chức năng phân trang
                            $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:5;
                            $current_page = !empty($_GET['page'])?$_GET['page']:1;
                            $offset = ($current_page - 1) * $item_per_page;
                            $query = "SELECT * FROM donhang ORDER BY MaDH ASC LIMIT ".$item_per_page." OFFSET ".$offset;
                            $totalRecords = mysqli_query($conn, "SELECT * FROM donhang");
                            $totalRecords = $totalRecords->num_rows;
                            $totalPages = ceil($totalRecords / $item_per_page)
                        ?>
                        <?php
                            $result=mysqli_query($conn,$query);
                            $i = 0;
                                while($row = mysqli_fetch_array($result))
                                {
                                    $i++;
                        ?>
                        <tbody>
                            <tr class="order-rows">
                                <td style="text-align: center;"><a href="Detail.php?MaDH=<?php echo $row['MaDH'] ?>"><?php echo $row['MaDH'] ?></a></td>
                                <td style="text-align: center;"><?php echo $row['TenKH'] ?></td>
                                <td style="text-align: center;"><?php echo $row['Phone'] ?></td>
                                <td style="text-align: center;"><?php echo $row['DiaChi'] ?></td>
                                <td style="text-align: center;"><?php echo $row['HTTT'] ?></td>
                                <td style="text-align: center;"><?php echo $row['TongTien'] ?></td>
                                <td style="text-align: center;">
                                    <a href="?detele=<?php echo $row['MaDH'] ?>" class="btn-ED-add">
                                        <button class="btn btn-danger">Delete</button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        <?php
                            }
                        ?>
                    </table>
                    <ul class="pagination home-product__pagination">
                                <li class="pagination-item">
                                    <a href="" class="pagination-item__link">
                                        <i class="pagination-item__icon fas fa-angle-left"></i>
                                    </a>
                                </li>
                                
                                <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
                                    <?php if ($num != $current_page) { ?>
                                    <li class="pagination-item">
                                        <a href="?per_page=<?=$item_per_page?>&page=<?=$num?>"
                                        class="pagination-item__link"><?=$num?></a>
                                    </li>
                                    <?php } else { ?>
                                    <li class="pagination-item pagination-item--active">
                                        <a href="" class="pagination-item__link"><?=$num?></a>
                                    </li>
                                    <?php } ?>
                                <?php } 
                                // pagination-item--active
                                ?>
                                
                                <li class="pagination-item">
                                    <a href="" class="pagination-item__link">
                                        <i class="pagination-item__icon fas fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Chăm sóc khách hàng</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Trung Tâm Trợ Giúp</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">ShopIT Mall</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Hướng dẫn mua hàng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Giới thiệu</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Giới thiệu</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Tuyển dụng</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Điều khoản</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Danh mục</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Sách tốt nhất</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Sách bán chạy</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Sách tìm kiếm nhiều nhất</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Theo dõi</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <i class="footer-item__icon fab fa-facebook"></i>
                                    Facebook
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <i class="footer-item__icon fab fa-instagram"></i>
                                    Instagram
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <i class="footer-item__icon fab fa-linkedin"></i>
                                    Linkedin
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Vào cửa hàng trên ứng dụng</h3>
                        <div class="footer__dowload">
                            <img src="../img/qr_code.png" alt="Download QR" class="footer__download-qr">
                            <div class="footer__download-apps">
                                <a href="" class="footer__dowload-app-link">
                                    <img src="../img/google_play.png" alt="Google play" class="footer__dowload-app-img">
                                </a>
                                <a href="" class="footer__dowload-app-link">
                                    <img src="../img/app_store.png" alt="App store" class="footer__dowload-app-img">
                                </a>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="footer__bottom">
                <div class="grid" >
                    <p class="footer__text">© 2015 - Bản quyền thuộc về Công ty TNHH ShopIT</p>
                </div>
            </div>
        </footer>

</body>
</html>