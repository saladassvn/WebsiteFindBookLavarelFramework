
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="{{asset('public/User/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/User/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('public/User/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('public/User/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('public/User/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/User/vendor/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>
@include('header')   
<main role="main">
<!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
<div class="container mt-4">
<h1 class="text-center">Giỏ hàng</h1>
@if(Session::has('loginRequired'))
                <div>
                <h6 class="alert alert-warning" style ="font-size:20px;">{{ Session::get('loginRequired') }}</h6>
                </div>
@endif
@if(Session::has('cart'))
<form action="Cart.php?action=submit" method="post" class="row">
    <div class="col col-md-12">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center" style="font-size:15px">Tên sản phẩm</th>
                    <th class="text-center" style="font-size:15px">Số lượng</th>
                    <th class="text-center" style="font-size:15px">Đơn giá</th>
                    <th class="text-center" style="font-size:15px">Hành động</th>
                </tr>
            </thead>

            
            <tbody id="datarow">
                @foreach($products as $product)
                <tr>
                    <td class="text-center" style="font-size:15px">{{ $product['item']['TenSach'] }}</td>
                    <td class="text-center" style="font-size:15px">{{ $product['qty'] }}</td>
                    <td class="text-center" style="font-size:15px">{{ $product['price'] }}VNĐ</td>
                    <td class="text-center">
            
                        <!-- Nút xóa, bấm vào sẽ xóa thông tin dựa vào khóa chính `sp_ma` -->
                        <a id="delete_1" data-sp-ma="2" class="btn btn-danger btn-delete-sanpham" 
                        href="{{route('bookremove',['id'=>$product['item']['MaSach']])}}"}}>
                            <i class="fa fa-trash" aria-hidden="true"></i> Xóa                           
                        </a>
                    </td>
                    </tr>
                    @endforeach
                    <tr>
                    <td colspan="5" class="text-center" style="font-size:15px; font-weight: bold;">Tổng Giá</td>
                    <td class="text-center" style="font-size:15px; font-weight: bold;">{{ $totalPrice }} VNĐ</td>
                    
                    </td>

                </tr>             
                
            </tbody>
        </table>
        <div class="container mt-4">

        <a class="btn btn-primary btn-lg btn-block" href ="{{route('checkout')}}" type="submit" name="btnDatHang">
                Đặt hàng</a>
                        
                <p></p>  <p></p>  <p></p>  <p></p>  <p></p>  <p></p>  
        </div>
    </div>
</form>
    @else
    <p></p>
    <br>
    <h2 style="font-size:20px; text-align: center;">Bạn không có sản phẩm nào trong giỏ hàng</h2>
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3" style="min-height: 500px;">               
            </div>

    @endif
<!-- End block content -->
</main>
@include('footer')
</body>
