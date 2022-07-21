
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('public/User/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/User/vendor/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>
@include('header')   
<main role="main">
<!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
<div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <p></p>
            <h4 style = "font-size: 26px;">Tổng tiền: ${{ $total }} VND</h4>
            <br>
            <br>
            <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''  }}">
                {{ Session::get('error') }}
            </div>
            <form action="{{ route('checkout') }}" method="post" id="checkout-form" style="min-height: 500px">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name" style = "font-size: 15px;">Tên khách hàng:</label>
                            <input type="text" name="name" id="name" style = "font-size: 13px;" class="form-control" value="{{ Session::get('userName') }}" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="address" style = "font-size: 15px;">Địa chỉ:</label>
                            <input type="text" name="dc" id="address" style = "font-size: 13px;"   class="form-control" value="{{ Session::get('userDC') }}" required>
                        </div>
                    </div>
                    <hr>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-name" style = "font-size: 15px;">Số điện thoại:</label>
                            <input type="text" name="sdt" id="card-name" style = "font-size: 13px;"  class="form-control" value="{{ Session::get('userPhone') }}" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-number" style = "font-size: 15px;">Phương thức thanh toán:</label>
                            <select id="pttt" style = "width: 250px; font-size: 13px;" name="pttt">
  <option value="Tiền mặt">Tiền mặt</option>
  <option value="Chuyển khoản">Chuyển khoản</option>
</select>
                        </div>
                    </div>
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary btn-lg btn-block" style ="text-align: center;">Đặt mua</button>
                
            </form>
            <p></p>
        </div>
    </div>
</main>
@include('footer')
</body>
