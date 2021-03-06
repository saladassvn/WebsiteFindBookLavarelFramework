<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('public/User/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('public/User/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/User/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('public/User/css/main.css')}}">
</head>

<body>
    <div id="main">
        <div class="dau">
            <div class="grid">
                <nav class="dau__navbar">
                    <ul class="dau__navbar-list">
                        <li class="dau__navbar-item dau__navbar-item--has-qr dau__navbar-item--separate">
                            Cửa hàng bán sách hàng đầu Findbook
                            <!-- Begin:dau QR Code -->
                            <div class="dau__qr">
                            
                                <img src="{{asset('public/User/img/qr_code.png')}}" alt="QR code" class="dau__qr-img">
                                <div class="dau__qr-apps">
                                    <a href="" class="dau__qr-link">                                  
                                        <img src="{{asset('public/User/img/google_play.png')}}" alt="Google Play"
                                            class="dau__qr-download-img">
                                    </a>
                                    
                                    <a href="" class="dau__qr-link">
                                        <img src="{{asset('public/User/img/app_store.png')}}" alt="App Store"
                                            class="dau__qr-download-img">
                                    </a>
                                </div>
                            </div>
                            <!-- End:dau QR Code -->

                        </li>
                        <li class="dau__navbar-item">
                            <span class="dau__navbar-title--no-pointer">Kết nối</span>
                            <a href="" class="dau__navbar-icon-link">
                                <i class="dau__navbar-icon fab fa-facebook"></i>
                            </a>
                            <a href="" class="dau__navbar-icon-link">
                                <i class="dau__navbar-icon fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="dau__navbar-list">
                        <li class="dau__navbar-item dau__navbar-item--has-notify">
                            <a href="" class="dau__navbar-item-link">
                                <i class="dau__navbar-icon far fa-bell"></i>
                                Thông báo
                            </a>
                            <div class="dau__notify">
                                <haeder class="dau__notify-dau">
                                    <h3>Thông Báo Mới Nhận</h3>
                                </haeder>
                                <ul class="dau__notify-list">
                                    <li class="dau__notify-item dau__notify-item--viewed">
                                        <a href="" class="dau__notify-link">
                                        
                                            <img src="{{asset('public/User/img/CleanCode.png')}}" alt=""
                                                class="dau__notify-img">
                                            <div class="dau__notify-info">
                                                <span class="dau__notify-name">Bạn đã đặt Clean Code</span>
                                                <span class="dau__notify-descriotion">Sách bán chạy nhất của
                                                    Findbook</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="dau__notify-list">
                                    <li class="dau__notify-item">
                                        <a href="" class="dau__notify-link">
                                        
                                            <img src="{{asset('public/User/img/the_clean_coder.jpg')}}" alt=""
                                                class="dau__notify-img">
                                            <div class="dau__notify-info">
                                                <span class="dau__notify-name">Bạn đã đặt The Clean Code</span>
                                                <span class="dau__notify-descriotion">Sách bán chạy nhất của
                                                    Findbook</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="dau__notify-list">
                                    <li class="dau__notify-item">
                                        <a href="" class="dau__notify-link">
                                        
                                            <img src="{{asset('public/User/img/CodeComplete2.jpg')}}" alt=""
                                                class="dau__notify-img">
                                            <div class="dau__notify-info">
                                                <span class="dau__notify-name">Bạn đã đặt Code Complete 2</span>
                                                <span class="dau__notify-descriotion">Sách bán chạy nhất của
                                                    Findbook</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <footer class="dau__notify-footer">
                                    <a href="" class="dau__notify-footer-btn">Xem tất cả</a>
                                </footer>
                            </div>
                        </li>
                        <li class="dau__navbar-item">
                            <a href="" class="dau__navbar-item-link">
                                <i class="dau__navbar-icon far fa-question-circle"></i>
                                Trợ giúp
                            </a>
                        @if (Session::has('userName'))
                            <li class="dau__navbar-user-item">
                                <a href="{{ URL::to('/user') }}">{{ Session::get('userName') }}</a>
                            </li>
                            <li class="dau__navbar-user-item">
                                <a href="{{ URL::to('/vieworder') }}">Xem đơn hàng</a>
                            </li>
                            <li class="dau__navbar-user-item dau__navbar-user-item--separate">
                                <a href="{{ URL::to('/logout') }}">Đăng xuất</a>
                            </li>
                        @elseif(Session::has('AdminName'))
                            <li class="dau__navbar-user-item">
                                <a href="{{ URL::to('admin/IndexAdmin')}}">Trang Admin</a>
                            </li>
                             <li class="dau__navbar-user-item">
                                <a href="{{ URL::to('admin/logout') }}">Đăng xuất</a>
                            </li>
 
                        @else
                            <li class="dau__navbar-item dau__navbar-user">
                            <li class="dau__navbar-user-item dau__navbar-user-item--separate  ;">
                                <a href="{{ URL::to('/login') }}"
                                    style="background-color: #4CAF50; color: white;">Login User</a>
                            </li>;
                            <li class="dau__navbar-user-item dau__navbar-user-item--separate  ;">
                                <a href="{{ URL::to('admin/login') }}"
                                    style="background-color: #4CAF50; color: white;">Login Admin</a>
                            </li>
                        @endif
                    </ul>
                    </li>
                    </ul>
                </nav>

                <div class="dau-with-search">
                    <div class="dau__logo">
                        <a href="{{ URL::to('/homepage') }}" class="dau__logo-link">
                            <h1 class="dau__logo-img">Findbook</h1>
                        </a>
                    </div>

                    <form action="{{ url('/search') }}" class="dau__search" type="get">
                        <div class="dau__search-input-wrap">
                            <input type="text" name="query" class="dau__search-input"
                                placeholder="Nhập tên sách để tìm kiếm">
                        </div>
                        <div class="dau__search-select">
                            <a href="{{ url('/newbook') }}" class="dau__search-select-label">FIND BOOK</a>
                            <i class="dau__search-select-icon fas fa-book"></i>
                        </div>
                        <button class="dau__search-btn">
                            <i class="dau__search-btn-icon fas fa-search"></i>
                        </button>
                    </form>

                    <!-- Cart layout -->
                    <div class="dau__cart">
                        <a href="{{ url('/viewcart') }}" class="dau__cart-wrap">
                            <i class="dau__cart-icon fas fa-shopping-cart"></i>
                            <span class= "badge">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
