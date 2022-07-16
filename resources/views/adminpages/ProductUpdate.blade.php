<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product Update</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/resources/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('resources/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/user_order_history.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/ThongTin_AD.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/user_order_history.css') }}">
    <link rel="stylesheet" rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

</head>

<body>
    @include('header')
    @include('sidebarAdmin')
    <div class="content-user">
        @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
        <div class="admin-title-account" style="font-size: 18px; padding: 0;">Cập nhật sản phẩm</div>
        <div class="user-table" style="width: 100%;">       
            <form action="{{(URL::to('/admin/edit/'))}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" class="from__input" name="MaSach" value="{{ $sach['MaSach'] }}" />
                <div class="from_row">
                    <label class="input__label" style="margin-right: 50px;">Tên sản phẩm</label>
                    <input type="text" class="from__input" name="TenSach" value="{{ $sach['TenSach'] }}"
                        style="width: 300px;" size="38" />
                </div>
                <div class="from_row">
                    <label class="input__label" style="margin-right: 50px;">Danh Mục</label>
                    <input type="text" class="from__input" name="DanhMuc" value="{{ $sach['DanhMuc'] }}"
                        style="width: 300px;" size="38">
                </div>
                <div class="from_row">
                    <label class="input__label" style="margin-right: 50px;">Mô tả</label>
                    <textarea class="from__input" rows="10" name="MoTa" style="width: 300px;" size="38"
                        value="{{ $sach['MoTa'] }}">{{ $sach['MoTa'] }}</textarea>
                </div>
                <div class="from_row">
                    <label class="input__label" style="margin-right: 50px;">Hình ảnh</label>
                    <input type="file" class="from__input" style="width: 300px;" size="38" name="HinhAnh">
                </div>
                <div class="from_row">
                    <label class="input__label">&nbsp;</label>
                    <img src="../public/User/img/{{ $sach['HinhAnh'] }}" height="100" width="100" />
                </div>
                <div class="from_row">
                    <label class="input__label" style="margin-right: 50px;">Giá</label>
                    <input type="text" class="from__input" name="DonGia" value="{{ $sach['DonGia'] }}"
                        style="width: 300px;" size="38" />
                </div>
                <div class="from_row">
                    <label class="input__label">&nbsp;</label>
                    <input type="submit" style="text-align: center;" name="capnhatsanpham" value="Cập nhật"
                        class="btn__submit">
                    <button class="btn__submit" type="button" style="text-align: center;margin-left: 50px">
                        <a href="{{URL::to('/admin/IndexAdmin')}}">Trở về danh sách</a>
                    </button>

                </div>
            </form>
        </div>
    </div>

    </div>

    @include('footer')
    </div>


</body>

</html>
