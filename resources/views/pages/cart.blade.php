
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
<form action="Cart.php?action=submit" method="post" class="row">
    <div class="col col-md-12">
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">STT</th>
                    <th class="text-center">Tên sản phẩm</th>
                    <th class="text-center">Hình ảnh</th>
                    <th class="text-center">Số lượng</th>
                    <th class="text-center">Đơn giá</th>
                    <th class="text-center">Thành tiền</th>
                    <th class="text-center">Hành động</th>
                </tr>
            </thead>

            
            <tbody id="datarow">
            
                <tr>
                    <td class="text-center">a</td>
                    <td class="text-center">b</td>
                    <td class="text-center">c</td>
                    <td class="text-center">d</td>
                    <td class="text-center">e</td>
                    <td class="text-center">VNĐ</td>
                    <td class="text-center">
            
                        <!-- Nút xóa, bấm vào sẽ xóa thông tin dựa vào khóa chính `sp_ma` -->
                        <a id="delete_1" data-sp-ma="2" class="btn btn-danger btn-delete-sanpham" 
                        href="">
                            <i class="fa fa-trash" aria-hidden="true"></i> Xóa                           
                        </a>
                    </td>
                    </tr>
                    <tr>
                    <td colspan="5" class="text-center">Tổng Giá</td>
                    <td class="text-center">VNĐ</td>
                    <td class="text-center"> 
                    
                    </td>
                    
                </tr>             
                
            </tbody>
        </table>
        <input type="submit" name="capnhatsl" class="btn btn-success" value="Cập nhật">
        <div class="container mt-4">

    <div class="row">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Thông tin khách hàng</h4>

            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" class="form-control" name="kh_ten" 
                        value="Data" >
                </div>
                <div class="col-md-12">
                    <label for="kh_diachi">Địa chỉ</label>
                    <input type="text" class="form-control" name="kh_diachi" 
                        value="Data2">
                </div>
                <div class="col-md-12">
                    <label for="kh_dienthoai">Điện thoại</label>
                    <input type="text" class="form-control" name="kh_dienthoai" 
                        value="Shiba" >
                </div>
            </div>

            <h4 class="mb-3">Hình thức thanh toán</h4>

            <div class="d-block my-3">
                <div class="custom-control custom-radio">
                    <input id="httt-1" name="httt_ma" type="radio" class="custom-control-input"
                        value="Tiền mặt">
                    <label class="custom-control-label" for="httt-1">Tiền mặt</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input"
                        value="Chuyển khoản">
                    <label class="custom-control-label" for="httt-2">Chuyển khoản</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="httt-3" name="httt_ma" type="radio" class="custom-control-input"
                        value="Ship COD">
                    <label class="custom-control-label" for="httt-3">Ship COD</label>
                </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnDatHang">
                Đặt hàng</button>
                        
                       
        </div>
    </div>
</form>

</div>
</div>
</div>
<!-- End block content -->
</main>
@include('footer')
</body>
