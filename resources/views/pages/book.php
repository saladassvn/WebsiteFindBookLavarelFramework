@section('content')
@extends('layout')
<?php
session_start();
include "../connect.php";
?>
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
                             <div class="grid__row">
                                <?php
                                    // Chức năng phân trang
                                    $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:5;
                                    $current_page = !empty($_GET['page'])?$_GET['page']:1;
                                    $offset = ($current_page - 1) * $item_per_page;
                                    $query = "SELECT * FROM sach ORDER BY MaSach ASC LIMIT ".$item_per_page." OFFSET ".$offset;
                                    $totalRecords = mysqli_query($conn, "SELECT * FROM sach");
                                    $totalRecords = $totalRecords->num_rows;
                                    $totalPages = ceil($totalRecords / $item_per_page)
                                ?>
                                
                                <?php
                                    // Chức năng Search
                                    if (isset($_POST['key'])) {
                                        $key=$_POST['key'];
                                        $query="select * from sach where TenSach like '%$key%'";
                                    }
                                    $result = mysqli_query($conn,$query);
                                    if(mysqli_num_rows($result) > 0)
                                    {
                                        while($row = mysqli_fetch_array($result))
                                        {
                                ?>
                                <div class="grid__column-2-4">
                                    <form method="post" action="" class="home-product-item">
                                        <a class="home-product-item" href="ProductDetail.php?MaSach=<?php echo $row["MaSach"]; ?>">
                                            <img class="home-product-item__img" src="../img/<?php echo $row["HinhAnh"]; ?>" style="margin-left: 20px;" width="150px">
                                            <h4 class="home-product-item__name"><?php echo $row["TenSach"]; ?></h4>
                                            <div class="home-product-item__price">
                                                
                                                <span class="home-product-item__price-current"><?php echo $row["DonGia"]; ?>VNĐ</span>

                                                <input type="hidden" name="hidden_name" value="<?php echo $row["TenSach"]; ?>" />

                                                <input type="hidden" name="hidden_price" value="<?php echo $row["DonGia"]; ?>" />
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
                                                <span class="home-product-item__brand">Whoo</span>
                                                <span class="home-product-item__origin-name">Nhật Bản</span>
                                            </div>
                                            <div class="home-product-item__favourite">
                                                <i class="fas fa-check"></i>
                                                <span>Yêu thích</span>
                                            </div>
                                        </a>
                                    </form>
                                    
                                </div>
                                <?php
                                }
                            }
                                ?>
                                
                             </div>
                             
                                
                            </div>
                                <div>
                        
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
        </div>

@endsection   