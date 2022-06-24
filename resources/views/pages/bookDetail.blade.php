<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Findbook</title>
    <link rel="stylesheet" href="{{asset('public/User/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/User/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('public/User/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('public/User/css/product-detail.css')}}" type="text/css">
    <link rel="stylesheet" href="../css/ProductDetail.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    
    <!-- Bootstrap Jquery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
</head>

<body>
@include('header')
        <!-- content -->
        <main role="main">
            <div class="container mt-4">
    
                <div class="card">
                    <div class="container-fliud">
                    <?php
                        $query="SELECT * FROM sach where MaSach =".$_GET['MaSach'];
                        if (isset($_POST['key'])) {
                            $key=$_POST['key'];
                            $query="select * from sach where TenSach like '%$key%'";
                        }
                        $result=mysqli_query($conn,$query);
                        if(mysqli_num_rows($result) > 0)
                        {
                            $row = mysqli_fetch_array($result);
                            
                    ?>
                        <form method="post" action="Cart.php?action=add" class="home-product-item" 
                        name="frmsanphamchitiet" id="frmsanphamchitiet">
                                    
                            <div class="wrapper row detail">
                                <div class="previews col-md-6">
                                    <div class="">
                                        <div class="" id="pic-3">
                                            <img class="" src="../img/<?php echo $row["HinhAnh"]; ?>" height="450" width="500">
                                        </div>
                                    </div>  
                                </div>
                                <div class="details col-md-6 detail_in">
                                    <h3 class="product-title"><?php echo $row["TenSach"]; ?></h3>

                                    <input type="hidden" name="hidden_name" value="<?php echo $row["TenSach"]; ?>" />

                                    <div class="rating">
                                        <div class="stars">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <span class="review-no">999 reviews</span>
                                    </div>
                                    <h4 class="price">Giá: <span><?php echo $row["DonGia"]; ?> VNĐ</span></h4>
                                    
                                    <input type="hidden" name="hidden_price" value="<?php echo $row["DonGia"]; ?>"/>

                                    <p class="vote"><strong>100%</strong> hàng <strong>Chất lượng</strong>, đảm bảo
                                        <strong>Uy tín</strong>!</p>
                                    <div class="form-group">
                                        <label for="soluong">Số lượng đặt mua:</label>
                                        <input type="text" name="sl[<?=$row["MaSach"]?>]" value="1" class="form-control sl_ip" id="soluong" />
                                    </div>
                                    <div class="action">
                                        <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Thêm vào giỏ" />
                                        <a class="btn btn-success heart_btn" style="margin-top:5px;" href="#"><span class="fa fa-heart"></span></a>
                                    </div>
                                </div>
    
                            </div>
                        </form>
                        
                    </div>
                </div>
    
                <div class="card">
                    <div class="container-fluid">
                        <h3>Thông tin chi tiết về Sản phẩm</h3>
                        <div class="row">
                            <div class="col">
                                <?php echo $row["MoTa"]; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                                
                            }
                                ?>
            </div>
            <!-- End block content -->
        </main>
    @include('footer')
    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popperjs/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Custom script - Các file js do mình tự viết -->
    <script src="{{asset('public/User/js/app.js')}}"></script>
</body>
</html>