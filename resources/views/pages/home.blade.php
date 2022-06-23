<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JustBook</title>
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
<div id="content">
            <!-- About section -->
            <div id="band" class="content-section">
                <h2 class="section-heading">Just Book</h2>
                <p class="section-sub-heading"> We love book</p>
                <p class="about-text">
                     Khi bạn bán cho một người một cuốn sách, bạn không bán cho anh ta chỉ 1 xấp giấy, mực và keo - bạn bán cho anh ta một cuộc sống hoàn toàn mới. Tình yêu, tình bạn và sự hài hước và những con tàu trên biển vào ban đêm - có tất cả thiên đường và thế giới trong một cuốn sách, ý tôi là một cuốn sách thực sự.                    Tùy vào lĩnh vực mà bạn tìm hiểu hay công việc mà bạn sẽ lựa chọn cho mình những đầu sách công nghệ thông tin phù hợp.
                    Findbook sẽ gợi ý một số đầu sách hay mà bạn nên tìm đọc:</p>
                <div class="row members-list">
                    <div class="col col-third text-center">
                        <p class="member-name">Code Complete 2</p>
                        <img src="{{('public/User/img/CodeComplete2.jpg')}}" alt="Name" class="member-img">
                    </div>
                    <div class="col col-third text-center">
                        <p class="member-name">Clean Code</p>
                        <img src="{{('public/User/img/CleanCode.png')}}" alt="Name" class="member-img">
                    </div>
                    <div class="col col-third text-center">
                        <p class="member-name">The Clean Coder</p>                      
                        <img src="{{('public/User/img/the_clean_coder.jpg')}}" alt="Name" class="member-img">
                    </div>
                    
                </div>
            </div>

            <!-- Tuor section -->
            <div id="tuor" class="tour-section">
                <div class="content-section">
                    <h2 class="section-heading text-white">SELLING</h2>
                <!-- Tickets -->
                <ul class="tickets-list">
                    <li>Code dạo kí sự<span class="sold-out">Update</span></li>
                    <li>The Complete Book<span class="sold-out">Update</span></li>
                    <li>The Woman Code<span class="quantity">3</span></li>
                </ul>
                                                                                                                                    
                    <!-- Places -->
                    <div class="row places-list">
                        <div class="col col-third">
                       
                            <img src="{{('public/User/img/CodeDaoKiSu.png')}}" alt="New York" class="place-img">
                            <div class="place-body">
                                <h3 class="place-heading">Code dạo kí sự</h3>
                                <p class="place-desc">Bạn có thích cuốn sách này không?</p>
                                <a href="#" class="btn">Buy Book</a>
                            </div>
                        </div>
                        <div class="col col-third">
                            <img src="{{('public/User/img/CompleteBook.png')}}" alt="New York" class="place-img">
                            <div class="place-body">
                                <h3 class="place-heading">The Complete Book</h3>
                                <p class="place-desc">Bạn có thích cuốn sách này không?</p>
                                <a href="#" class="btn">Buy Book</a>
                            </div>
                        </div>
                        <div class="col col-third">                       
                            <img src="{{('public/User/img/mm.png')}}" alt="New York" class="place-img">
                            <div class="place-body">
                                <h3 class="place-heading">The Woman Code</h3>
                                <p class="place-desc">Bạn có thích cuốn sách này không?</p>
                                <a href="#" class="btn">Buy Book</a>
                            </div>
                        </div>
                        
                    </div>  
                </div>
            </div>
            <!-- Begin: Contact section -->
            <div id="contact" class="content-section">
                <h2 class="section-heading">CONTACT</h2>
            
                <div class="row contact-content">
                    <div class="col col-half contact-info">
                        <p><i class="fa fa-map-marker-alt"></i>Thành phố Hồ Chí Minh, Quận Tân Bình</p>
                        <p><i class="fa fa-phone"></i>Phone: 0913241057</p>
                        <p><i class="fa fa-envelope"></i>Email: buiquocdat321@gmail.com</p>
                        
                    </div>
                    <div class="col col-half contact-form">
                        <form action="">
                            <div class="row">
                                <div class="col col-half">
                                    <input type="text" name="" required id="" placeholder="Name" class="form-control">
                                </div>
                                <div class="col col-half">
                                    <input type="email" name="" id="" placeholder="Email" class="form-control">
                                </div>
                                
                            </div>
                            <div class="row mt-8">
                                <div class="col col-full">
                                    <input type="text" name="" id="" placeholder="Message" class="form-control">
                                </div>
                            </div>
                            <input class="btn pull-right mt-16" type="submit" value="SEND">
                        </form>
                    </div>
                </div>
            </div>
            <!-- End: Contact section -->
        
            <div class="map-section">           
                <img src="{{('public/User/img/acmong.jpg')}}" alt="Map">
            </div>
</div>
@include('footer')
</body>
</html>
