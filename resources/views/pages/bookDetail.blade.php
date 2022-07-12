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
    <link rel="stylesheet" href="{{asset('public/User/css/ProductDetail.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    
    <!-- Bootstrap Jquery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
</head>

<body>
@include('header')
        <!-- content -->
        <main role="main">
            @if(isset($details))
                @foreach($details as $sach) 
            <div class="container mt-4">
    
                <div class="card">
                    <div class="container-fliud">
                    
                        <form method="get"  class="home-product-item" 
                        name="frmsanphamchitiet" id="frmsanphamchitiet">
                                    
                            <div class="wrapper row detail">
                                <div class="previews col-md-6">
                                    <div class="">
                                        <div class="" id="pic-3">                                            
                                            <img class="home-product-item" src="public/User/img/{{$sach->HinhAnh}}" height="450" width="500">
                                        </div>
                                    </div>  
                                </div>
                                <div class="details col-md-6 detail_in">
                                    <h3 class="product-title">{{$sach->TenSach}}</h3>

                                    <input type="hidden" name="hidden_name" value="{{$sach->TenSach}}" />

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
                                    <h4 class="price">Giá: <span>{{$sach->DonGia}} VNĐ</span></h4>
                                    
                                    <input type="hidden" name="hidden_price" value="{{$sach->DonGia}}"/>

                                    <p class="vote"><strong>100%</strong> hàng <strong>Chất lượng</strong>, đảm bảo
                                        <strong>Uy tín</strong>!</p>
                                    <div class="form-group">
                                        <label for="soluong">Số lượng đặt mua:</label>
                                        <input type="text" name="sl{{$sach->MaSach}}" value="1" class="form-control sl_ip" id="soluong" />
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
                                {{$sach->MoTa}}
                            </div>
                        </div>
                    </div>
                </div>                           
            </div>
            @endforeach
            <!-- End block content -->
            @endif
        </main>
    @include('footer')
    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <!-- Custom script - Các file js do mình tự viết -->
    <script src="{{asset('public/User/js/app.js')}}"></script>
</body>
</html>

<script>
    function addToCart(){
        alert(123);
    }
    $(function(){
        $('.add_to_cart').on('click',addToCart);
    });
</script>