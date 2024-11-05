<?php     
 session_start();   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.svg" type="image/icon type">
    <title>PURRFECT MATCH | Ủng hộ</title>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300;1,400&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Barlow', sans-serif !important;
            overflow-x:hidden;
        }
        .banner{
            display: flex;
            width:100%;
            height: 28rem;
            background-image: url(img/banner/banner-ungho.jpg);
            background-size: cover; 
            background-position: center;
        }
        .banner-title{
            position: relative;
            top: 14rem;
            left: 17rem;
        }
        .breadcrumb{
            background-color: rgb(0, 0, 0,0.3) !important;
        }
        .breadcrumb-item {
            color: rgb(239, 228, 218, 0.8) !important;
            font-weight: 400;
        }
        .breadcrumb-item a{
            color:  #EFE4DA !important;
            font-weight: 500;
        }
        .donate-content{
            padding: 3rem 3rem 3rem 5rem !important;
        }
        .donate-content-img{
            width: 100%;
            padding-top: 4rem;
        }
        .donate-content-title h4{
            color: #D89543;
            font-weight:500;
            padding-bottom: 1rem;
            margin:0;
            border-bottom: 2px solid #f3f6f4;
        }
        .donate-content-title p{
            padding-top:1rem;
        }
        .donate{
            background-color: #f3f6f4;
        }
        .donate-info {
            margin: 1rem 2rem 2rem 4rem;
            padding: 2rem;
            background-color: white;
        }
        .donate-info p{
            margin-bottom:5px;
            font-weight:500;
        }
        .donate-title{
            width:21%;
            padding:0.5rem;
            position:relative;
            top: 2rem;
            left:3rem;
            z-index:10;
            background-color: #D89543;
            color:white;
            text-align:center;  
        }
        .donate-title h4{
            margin:0;
        }
        .donate-list-file{
            background-color: white;
            margin-right: 5rem;
            padding:2rem;
        }
        .donate-list-title h4{
            color: #D89543;
            font-weight:500;
            padding-bottom: 1rem;
            margin:0;
        }
        .file img{
            margin-bottom: 0.5rem;
            padding: 1rem 2.5rem;
        }
        .file p{
            font-weight:500;
        }
        .product{
            margin-bottom: 2rem;
        }
        .product-title h4{
            width:21%;
            padding:0.5rem;
            position:relative;
            top: 1rem;
            left:3rem;
            z-index:10;
            background-color: #D89543;
            color:white;
            text-align:center;
        }
        .col-lg-6{
            
        }
        .col-md-4 img{
            width: 100%;
            height: 100%;
            object-fit:cover;
        }
        .col-md-4{
            height:20rem;
            padding: 12px !important;
        }
        .col-md-4 .col-sm-12 {
            height:9rem;
        }
        .col-md-4 .col-sm-12 img{
            width: 100%;
            height: 100%;
            object-fit:cover;
        }
        .wrap-product-img{
            padding: 1rem 1rem 1rem 5rem;
            
        }
        .shop-link{
            margin:3rem 15rem;
            text-align: center;
            padding: 0.5rem;
            background-color: #acb7ff;
            border-radius:10px;
            
        }
        .shop-link-btn{
            padding: 1rem 4rem;
            color:white;
            font-weight:500;
            
        }
        .shop-link:hover{
            background-color: #D89543;
        }
        .shop-link:hover .shop-link-btn{
            text-decoration:none;
            color:white;
        }

    </style>
</head>
<body>
<!--Navigation-->
    <div class="header-top">
        <?php require_once("navbar.php");?>
    </div>
<!-- headerbottom -->
    <div class="header-bottom">
        <div class="banner">
            <div class="banner-title">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Ủng hộ</li>
                </ul>
            </div>
        </div>
    </div>
<!-- donate -->
<div class="about-donate">
    <div class="donate-content container-fluid">
        <div class="row">
            <div class="col-md-7">
                <div class="donate-content-title">
                <h4>
                    Ủng hộ chúng tôi
                </h4>
                <p>Mọi hoạt động cứu trợ, nhận nuôi của Nhận nuôi thú cưng Purrfect Match đều dựa trên khoản quyên góp và hỗ trợ của mọi người. 
                    Để duy trì hoạt động hàng tháng, nhóm phải đối mặt với các chi phí lớn bao gồm tiền thuê nhà, 
                    viện phí, thức ăn, thuốc men và đồ dùng, lương hỗ trợ các bạn tình nguyện viên dọn dẹp. Nhóm mong 
                    muốn nhận được sự giúp đỡ từ cộng đồng bằng cách quyên góp tài chính hàng tháng. Một món quà nhỏ nhưng ý nghĩa,
                    chỉ cần cố định 50k - 100k hàng tháng, bạn đã đóng góp cho nhóm và giúp đỡ các bé thú cưng cần được cứu hộ. 
                    <br><br>Bên cạnh đó, Nhóm cũng tiếp nhận quyên góp bằng hiện vật như quần áo cũ, bỉm, găng tay y tế,
                    thức ăn, cát vệ sinh để giúp cho các bé thú cưng có một môi trường sống tốt hơn.<br><br> Chi phí
                    sẽ được chia đều cho các bé khác đang còn nằm viện và cùng gây dựng nhà chung.
                    Mọi sự đóng góp của cộng đồng sẽ giúp nhóm tiếp tục hoạt động và cứu 
                    giúp nhiều bé thú cưng khác trong tương lai.</p>
                </div>
            </div>
            <div class="col-md-5">
                <img class="donate-content-img" src="img/donate-img.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<div class="donate">
    <div class="donate-title">
        <h4>Các kênh nhận quyên góp</h4>
    </div>
    <div class="wrap-donate row">
        <div class="col-lg-7 col-md-12 col-sm-12">
            <div class="donate-info ">
                <div class="bank row m-3">
                    <div class="bank-img col-lg-2 d-flex align-items-center pl-2">
                        <img src="nganhang.svg" alt="">
                    </div>
                    <div class="bank-info col-lg-10">
                        <p>Trần Thị Ngọc Hân</p>
                        <p>5600 2277 8890</p>
                    </div>  
                </div>
                <div class="paypal row m-3">
                    <div class="paypal-img col-lg-2 d-flex align-items-center pl-2">
                        <img src="paypal.svg" alt="">
                    </div>
                    <div class="paypal-info col-lg-10">
                        <p>Nhan nuoi thu cung Purrfect Match</p>
                        <p>nhannuoithucungPurrfectMatch@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="donate-list col-lg-5 col-md-12 col-sm-12 p-0">
            <div class="donate-list-title d-block">
                    <h4>Quyên góp</h4>
                </div>
            <div class="donate-list-file d-flex align-items-center">
                <div class="file mx-5">
                    <a href=""><img src="file.svg" alt=""></a>
                    <p>DS QUYÊN GÓP 2022</p>
                </div>
                <div class="file">
                    <a href=""><img src="file.svg" alt=""></a>
                    <p>DS QUYÊN GÓP 2023</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- space -->
<div class="product ">
    <div class="product-title">
        <h4>Sản phẩm gây quỹ</h4>
    </div>
    <div class="row">
        <div class="wrap-product col-lg-6 p-0">
            <div class="wrap-product-img">
                <div class="product-row row ">
                    <div class="col-md-4 ">
                        <img src="img/product/cat.jpg" alt="">
                    </div>
                    <div class="col-md-4 ">
                        <img src="img/product/cup.png" alt="">
                    </div>
                    <div class="col-md-4 ">
                        <img src="img/product/t-shirt.png" alt="">
                    </div>
                </div>

                <div class="product-row row">
                    <div class="col-md-4 ">
                        <img src="img/product/choangco.png" alt="">
                    </div>
                    <div class="col-md-4 ">
                        <div class="row">
                            <div class="wrapper">
                                <div class="col-sm-12 mb-2">
                                    <img src="img/product/mt.jpg" alt="">
                                </div>
                                <div class="col-sm-12 ">
                                    <img src="img/product/sticker.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <img src="img/product/hoa.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="wrap-product col-lg-6 p-3">
            <div class="wrap-product-content">
                <div class="product-content-title p-3 mr-3 ">
                    <h2>The Purrfect Match - cửa hàng gây quỹ của Purrfect Match</h2> 
                    <p>Chúng tôi tin rằng mỗi con vật xứng đáng được yêu thương,
                        chăm sóc và có một mái ấm ổn định. Vì vậy, chúng tôi đã 
                        quyết định mở cửa hàng của mình để gây quỹ cho các hoạt động
                        cứu hộ, chăm sóc và tìm kiếm mái ấm cho các con vật 
                        vô gia cư và bị bỏ rơi.<br><br>
                        Với mỗi sản phẩm bạn mua tại The Purrfect Match,
                        tất cả sẽ được phục vụ cho công tác cứu hộ và bảo vệ động vật.
                        Chúng tôi cũng sẽ có các chương trình đặc biệt và 
                        sự kiện để gây quỹ cho các tổ chức động vật, 
                        vì chúng tôi muốn đóng góp cho cộng đồng của chúng ta và tạo ra một 
                        sự khác biệt tích cực cho cuộc sống của các con.
                    </p>
                    <div class="shop-link">
                        <a class="shop-link-btn" href="https://shp.ee/gdjkp2u" target="_blank">Mua hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<div>
        <?php require_once("footer.php"); ?>
    </div>
</body>
</html>