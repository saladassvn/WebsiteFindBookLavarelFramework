<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JustBook</title>
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/main.css')}}">
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
                                 <li class="category-item category-item--active">
                                     <a href="Book.php" class="category-item__link">Tất cả sản phẩm</a>
                                 </li>
                                 <li class="category-item">
                                     <a href="BestSellingBook.php" class="category-item__link">Sản phẩm bán chạy</a>
                                 </li>
                                 <li class="category-item">
                                     <a href="FeaturedBook.php" class="category-item__link">Sản phẩm nổi bật</a>
                                 </li>
                             </ul>
                         </nav>
                     </div>
 
                     <div class="grid__column-10">
                         <div class="home-filter">
                             <span class="home-filter__label">Sắp xếp theo</span>
                             <button class="home-filter__btn btn">Phổ biến</button>
                             <button class="home-filter__btn btn btn--primary">Mới nhất</button>
                             <button class="home-filter__btn btn">Bán chạy</button>
 
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
                        <div class="home-product">
                            <div>
                                @if(isset($details))
                                <table class ="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th>Ảnh</th>                                         
                                            <th>Tên</th>
                                            <th>Danh Mục</th>
                                            <th>Đơn Giá</th>
                                            <th>Mô Tả</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($details as $sach)
                                        <tr>
                                            <td><img class="home-product-item__img" src="public/User/img/{{$sach->HinhAnh}}" style="margin-left: 20px;" width="150px"></td>                                   
                                            <td>{{$sach->TenSach}}</td>
                                            <td>{{$sach->DanhMuc}}</td>                                            
                                            <td>{{$sach->DonGia}}</td>                                    
                                            <td>{{$sach->MoTa}}</td>                                                                 
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>


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
