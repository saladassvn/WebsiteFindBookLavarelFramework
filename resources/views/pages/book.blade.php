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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    <!-- Bootstrap Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
</head>
<body>

    <?php
        session_start();
    ?>

@include('header')

<div class="app__container">
            <div class="grid">
                 <div class="grid__row app__content">
                     <div class="grid__column-2">
                         <nav class="category">
                             <h3 class="category__heading">
                                 <i class="category__heading-icon fas fa-list"></i>
                                 Danh mục
                             </h3>
             
                             <ul class="category-list">
                                 <li class="category-item">
                                     <a href="{{url('/book')}}" class="category-item__link">Tất cả sản phẩm</a>
                                 </li>
                                 <li class="category-item">
                                     <a href="{{url('/bestsellingbook')}}" class="category-item__link">Sản phẩm bán chạy</a>
                                 </li>
                                 <li class="category-item">
                                     <a href="{{url('/featurebook')}}" class="category-item__link">Sản phẩm nổi bật</a>
                                 </li>
                             </ul>
                         </nav>
                     </div>
 
                     <div class="grid__column-10">
                         <div class="home-filter">
                             <span class="home-filter__label">Sắp xếp theo</span>
                             <form action="{{url('/featurebook')}}"><button class="home-filter__btn btn">Mới nhất</button></form>    
                             <form action="{{url('/featurebook')}}"><button class="home-filter__btn btn">Phổ biến</button></form>    
                             <form action="{{url('/bestsellingbook')}}"><button class="home-filter__btn btn">Bán chạy</button></form>                           
                             <div class="select-input">
                                 <span class="select-input__label">Giá</span>
                                 <i class="select-input__icon fas fa-angle-down"></i>
                                 
                                 
                                 <ul class="select-input__list">
                                     <li class="select-input__item">
                                         <a href="" class="select-input__link">Giá: Thấp đến cao</a>
                                     </li>
                                     <li class="select-input__item">
                                         <a href="" class="select-input__link">Giá: Cao đến thấp</a>
                                     </li> 
                                 </ul>
                             </div>
 
                             <div class="home-filter__page">
                                 <span class="home-filter__page-num">
                                     <span class="home-filter__page-current">1</span>
                                     /14
                                 </span>
 
                                 <div class="home-filter__page-control">
                                     <a href="" class="home-filter__page-btn home-filter__page-btn--disabled">
                                         <i class="home-filter__page-icon fas fa-angle-left"></i>
                                     </a>
                                     <a href="" class="home-filter__page-btn">
                                         <i class="home-filter__page-icon fas fa-angle-right"></i>
                                     </a>
 
                                 </div>
                             </div>
                         </div>                     
                        <div>
                            @if(isset($details))
                                    <div class="grid__row">  
                                        @foreach($details as $sach)                                      
                                        <div class="grid__column-2-4">
                                               
                                        <form method="post" action="" class="home-product-item">
                                            <a class="home-product-item" href="public/resources/views/pages/bookDetail.blade.php?MaSach="{{$sach->MaSach}}>
                                                <img class="home-product-item__img" src="public/User/img/{{$sach->HinhAnh}}" style="margin-left: 20px;" width="150px">
                                                <h4 class="home-product-item__name">{{$sach->TenSach}}</h4>
                                                <div class="home-product-item__price">
                                                    
                                                    <span class="home-product-item__price-current">{{$sach->DonGia}}VNĐ</span>

                                                    <input type="hidden" name="hidden_name" value="{{$sach->TenSach}}" />

                                                    <input type="hidden" name="hidden_price" value="{{$sach->DonGia}}" />
                                                </div>
                                                <div class="home-product-item__action">
                                                    <span class="home-product-item__link home-product-item__link--linked">
                                                        <i class="home-product-item__link-icon-empty far fa-heart"></i>
                                                        <i class="home-product-item__link-icon-fill fas fa-heart"></i>
                                                    </span>
                                                    <div class="home-product-item__rating">
                                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="home-product-item__origin">
                                                    <span class="home-product-item__brand">NXB</span>
                                                    <span class="home-product-item__origin-name">Nhật Bản</span>
                                                </div>
                                                <div class="home-product-item__favourite">
                                                    <i class="fas fa-check"></i>
                                                    <span>Yêu thích</span>
                                                </div>
                                            </a>
                                                 
                                        </form>
                                         
                                        </div> 
                                        @endforeach                                   
                                    </div>               
                                @endif
                        </div>
                        
                            <ul class="pagination home-product__pagination">
                                <li class="pagination-item">
                                    <a href="" class="pagination-item__link">
                                        <i class="pagination-item__icon fas fa-angle-left"></i>
                                    </a>
                                </li>
                                
                                
                                <li class="pagination-item">
                                    <a href="" class="pagination-item__link">
                                        <i class="pagination-item__icon fas fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        
                     </div>
                 </div>
            </div>
        </div>
@include('footer')
</body>
</html>
