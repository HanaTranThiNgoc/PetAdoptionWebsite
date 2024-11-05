<?php     
 session_start();   
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link hrel="./css/style.css" ref="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    <link rel="icon" href="logo.svg" type="image/icon type">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300;1,400&display=swap" rel="stylesheet">
    <title>Nhận nuôi thú cưng PURRFECT MATCH</title>
    <style>
        body{
            overflow-x:hidden;
            font-family: 'Barlow', sans-serif !important;
        }
        .carousel-item{
            height: 70vh;

        }
        .carousel-caption{
            background-color: rgb(0, 0, 0,0.4);
            border-radius:5px;
            width:520px;
            padding: 20px;
        }
        .carousel-caption h3{
            color: #EFE4DA !important;
            text-shadow: 2px 2px 2px rgb(0,0,0,0.5);
        }
        .carousel-caption h5{
            color: #EFE4DA!important;
            text-shadow: 2px 2px 2px rgb(0,0,0,0.5);
        }
        .carousel-caption p{
            color:#EFE4DA;
            font-size: 24px;
        }
        .carousel-button{
            width: 150px;
            margin:auto;
            border: 1px solid black;
            padding:auto;
            box-sizing:border-box;
            padding: 8px 8px;
            border-radius:10px;
        }
        .carousel-button:hover{
            background-color: #EFE4DA;
        }
        .carousel-button:hover a{
            text-decoration:none;
            color: #69594D;
        }
        .carousel-button a {
            text-decoration: none;
            color: #EFE4DA;
            font-weight: bold;
        }
     /* card */
        .container{
            margin:auto;
        }
        .cards {
            min-width:280px;
            height:280px;
            margin:8px;
            float: left;
            background-color: #fff;
            border-radius: 10px;
            position: relative;
        }
        .cards img{
            width: 100%;
            object-fit: cover;
            height: 280px;
            border-radius: 10px;
        
        }
        .meetyourpm-caption{
            text-align: center;
            padding-top:32px;
            font-size: 24px;
            font-weight: bold;
            color:#5C534B;
            margin-bottom:3rem;
        }
        .wrap_card{
            height:30rem;
            background-color: #5C534B ;

        }
        .container_card{
            display: flex;
            flex-direction: row;   
            height: 20rem;
            overflow-x: scroll;
            overflow-y: hidden; 
            border-radius: 11rem 10rem 0 0 ;
        }
        .pet_name{
            position: absolute;
            bottom: 0px;
            color: #f1f1f1; 
            width: 100%; 
            height:100%;
            background-image: linear-gradient(rgb(253, 255, 249,0.1),rgb(253, 255, 249,0.1),rgb(0, 0, 0,0.9)); 
            border-radius: 0px 0px 10px 10px;
        }
        .pet_name b{
            position: absolute;
            bottom: 20px;
            left: 20px;
        }
        .cards p{
            position: absolute;
            top: 30%;
            width: 100%;
            text-align: center;
            font-size: 1.5rem;
        }
        .cards:hover {
            transform: scale(1.05);
            box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
        }
        .card-content{
            position: absolute;
            font-size: 18px;
            color:  #69594D;
            font-weight:bold;
        }
        span{
            color: #69594D;
            text-shadow: 2px 2px 2px rgb(253, 255, 249,0.2);
            font-weight: bold;
        }

    /* about us */
        .jumbotron.container-fluid{
            background-color: white;
            padding:3rem 0 0 1rem;
        }

        .jumbotron{
            padding: 0.1rem  0.3rem;
        }
        h4.heading{
            font-size: 1.5rem;
            font-weight: 500;
            color: #69594D;
            text-align: left;
            padding-left: 2rem;
            margin-bottom: 1.5rem;
            border-left: 0.2rem solid #69594D; 
        }
        p.about-us-content{
            font-size: 1.3rem;
        }
        .about-us-img {
            width:100%;
            padding:0 6rem 6rem 6rem;
        }
        .about-us-img img{
            width:100%;
            object-fit: cover;
            height: 35rem;
        }
        .about-us-content-cover{
            padding: 3rem;
        }

        /* end about us */

        .wrap-plan{
            width:100%;
            background-image: url(img/bg-plan.png);
            background-size: auto; 
            background-position: bottom;
            border-bottom: 0.05rem solid #69594D;
        }
        .wrap-plan .row .col-lg-4{
            background: none;
        }
        .p-title{
            margin-left:48px;
            padding-left: 1rem;
            color: #69594D;
            font-size: 1rem;
            font-weight: 500;
            display: flex;
            border-left: 0.2rem solid #69594D;
            text-align:center;
            height:1.9rem;
            text-decoration:none;
        }
        .pm-plan .p-title{
            margin:40px;
            border-left:none;
            border-top: 5px solid #69594D;
            text-align:center;
            padding:0px;
        }
        .col-lg-4 {
            background-color: #fff;
            text-align: center;
            margin-top: 3rem;
        }
        .col-lg-4 .col-item-button{
            border: 2px solid #69594D;
            padding:8px 12px 8px 12px;
            border-radius:10px;
            color: #CCA16D;
            font-weight: bold;
        }
        .col-item-button:hover {
            background: #69594D;
            color: white;
        }
        .col-lg-4 a:hover{
            text-decoration: none;
        }

    /* navtabs */
        .wrap-knowledge {
            margin-top:3rem;
            margin-bottom: 3rem;
        }
        .wrap-knowledge .nav-item{
            padding: 0;
        }
        .wrap-knowledge .nav-link{
            color: #EDC69C;
            font-weight:500;
        }
        .wrap-knowledge .nav-link.active{
            color: #69594D;
        }
        .tab-pane{
            padding:1rem 0 1.5rem 0;
        }
        .tab-content{
            border: 0.01rem solid #D9D9D9;
            border-top: none;
            border-radius: 0 0 0.5rem 0.5rem;
        }
        .container-tab-nav{
            margin: 0 9rem 0 11rem ;
        }
        .A{
            width: 100%;
            margin: auto;
            padding-bottom: 0.5rem;
            background-color: #F6F5F5;
            border-radius:0.5rem;
        }
        .A .blog-img img{
            width: 100%;
            object-fit: cover;
            border-radius:0.9rem;
        }
        .B{
            margin: auto;
            padding-bottom: 0.5rem;
            width: 100%;
            background-color: #F6F5F5;
            border-radius:0.5rem;
            margin-bottom:1rem;
        }
        .B .blog-img img{
            width: 100%;
            height: 8rem;
            object-fit: cover;
            border-radius:0.9rem;
        }
        .blog-title p{
            font-size: 1.1rem;
            font-weight: bold;
            color: #333;
            margin: 1rem 1rem 0 1rem;
        }
        .blog-detail p{
            margin: 0 1rem 0 1rem;
            font-size: 1rem;
            font-weight: 200;
            color: #333;
        }
        .blog-btn{ 
            margin: 1rem 1rem 0.5rem 0;
        }
        .blog-btn a {
            display: inline-block;
            background-color: #69594D;
            color: white;
            font-weight: 500;
            font-size: 1rem;
            text-decoration: none;
            padding: 0.4rem 0.8rem;
            border-radius: 0.5rem;
            border: 0.1rem dotted #69594D;
            transition: all 0.3s ease-in-out;
        }

        .blog-btn a:hover {
            background-color: white;
            color:  #69594D;
            text-decoration: none;
        }
    </style>
    
</head>
<body>
    <!--Navigation-->
    <?php require_once("navbar.php"); ?>
    <!--Slider-->
    <div id="slides" class="carousel slide" data-ride="carousel" data-interval="7000">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: url(img/banner/banner-slide1.jpg); background-size: cover; background-position: center;">
                    <div class="carousel-caption">
                        <h3>NHẬN NUÔI THÚ CƯNG <br><span> PURRFECT MATCH</span></h3>
                        <h5>Hãy yêu thương xin đừng xua đuổi</h5>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url(img/banner/banner-slide2.jpg); background-size: cover; background-position: center;" >
                    <div class="carousel-caption">
                        <h3>NHẬN NUÔI THÚ CƯNG</h3>
                        <p>Hãy trở thành một người bạn đồng hành cho các bé một mái ấm hạnh phúc</p>
                        <div class="carousel-button">
                            <a href="adopt.php" >NHẬN NUÔI</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url(img/banner/banner-slide3.jpg); background-size: cover; background-position: center;">
                    <div class="carousel-caption">    
                        <h3>TÌM KIẾM MÁI ẤM CHO CÁC BÉ</h3>
                        <p>Hãy đến và đóng góp cho chương trình nhận nuôi của chúng tôi</p>
                        <div class="carousel-button">
                        <a class="button" href="donate.php">ỦNG HỘ</a> 
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>
    <!--AboutUs-->
    <div class="jumbotron container-fluid">
        <h4 class="p-title">VỀ CHÚNG TÔI</h4>
        <div class="row px-5">
            <div class="col-lg-6 " >
                <div class="about-us-content-cover">
                    <p class="about-us-content"><span> NHẬN NUÔI THÚ CƯNG PURRFECT MATCH </span><br>
                        <br>Nhận nuôi thú cưng Purrfect Match được thành lập từ 09/2022 tại Thủ Đức
                        với mong muốn xây dựng một cộng đồng yêu thương động vật và thúc đẩy phúc lợi động vật
                        cho các con một mái ấm hạnh phúc và chăm sóc toàn diện.<br>
                        <br>Chúng tôi là một nhóm thiện nguyện bắt đầu từ tình yêu thương động vật, 
                        hoạt động tự phát và nhỏ lẻ. Luôn cố gắng hết mình để phát triển và hoàn thiện tổ chức</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-us-img">
                    <img src="img/about-us.jpeg">
                </div>
            </div>
        </div>
    </div>
    <!--Cards-->
    <div class="wrap_card container-fluid">
        <div class="container" style="background-color: white !important;">
            <div class="p-title">NHẬN NUÔI</div>
            <div class="meetyourpm-caption">
                <p>GẶP GỠ "PURRFECT MATCH" CỦA BẠN</p>
            </div>
            <div class="container_card">
                    <?php
                    $sql = "SELECT* from pet limit 7 ";
                        require_once "config.php";
                        $result = mysqli_query($conn, $sql);
            
                        if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                    ?> 
                        <div class="cards"><a href="petdetail.php?id=<?php echo $row["id"] ?>">           
                                <img src="img/<?php echo $row["img"];?>"/><br/>       
                                    <div class="pet_name">
                                        <b><?php echo $row["pet_name"];?></b>
                                    </div>   
                                  
                        </div>
                            <?php
                                    }
                                }
                                else {
                                    echo "0 results";
                                }
                                mysqli_close($conn);                                 
                            ?>   
                                    <div class="cards" style="background-color: transparent;margin:80px 20px 60px 20px; width:100px; height: 100px; align-item:center; border: 1px solid  #69594D">
                                        <a href="adopt.php">
                                                <p class="card-content" style="font-size: 1.2rem;">Gặp gỡ tất cả các bé</p></a>
                                    </div>
                                  
            </div> 
        </div>
    </div>
    <!--Plan-->
    <div class="wrap-plan">
        <div class="meetyourpm-caption" style="padding-top:80px">
            <p>BẠN CÓ KẾ HOẠCH NHẬN NUÔI ?</p>
        </div>
        <div class="row" style="margin-bottom: 10rem;">
            <div class="col-lg-4">
                <h5>Checklist cho ba mẹ mới bắt đầu</h5>
                <p>Chào đón thành viên mới.</p>
                <a href="checklist.php" class="col-item-button">Tìm hiểu</a>  
            </div>
            <div class="col-lg-4" style="margin-top:5rem">
                <h5>Quy trình nhận nuôi</h5>
                <p>Giúp quá trình nhận nuôi diễn ra suôn sẻ nhất có thể.</p>
                <a href="adopt.php" class="col-item-button">Tìm hiểu</a>  
            </div>
            <div class="col-lg-4">
                <h5>Câu hỏi thường gặp- FAQs</h5>
                <p>Những câu hỏi thường gặp.</p>
                <a href="faqs.php" class="col-item-button">Tìm hiểu</a>    
            </div>
        </div>
    </div> 
    <!-- knowledge nav-tabs-->
        <div class="wrap-knowledge container-fluid">
            <div class="p-title" style="margin-left: 3rem;">KIẾN THỨC</div>
                <br>
            <div class="container-tab-nav">                   
                <div class="navtabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tuyentruyen">Tuyên truyền</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#thuycoban">Thú y cơ bản</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="tuyentruyen" class="container tab-pane active"><br>
                        <div class="row" style=" margin: auto; width:100̀%;">
                            <div class="col-lg-7"> 
                                <div class="blog-content A">
                                    <div class="blog-img">
                                        <img src="img/knowledge/blog-trietsan-nuoikin.jpg">
                                    </div>
                                    <div class="blog-title">
                                        <p>Tại sao phải triệt sản và nuôi kín cho mèo</p>
                                    </div>
                                    <div class="blog-detail">
                                        <p>Việc triệt sản và nuôi kín chó mèo mang lại nhiều lợi ích hơn mọi người thưỡng nghĩ. Nuôi kín và triệt sản chó mèo là một vấn đề...</p>
                                    </div>
                                    <div class="blog-btn text-right">
                                        <a href="knowledgedetail.php?id=1">Đọc thêm</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 pr-0">
                                <div class="row" style="height:100%; width: 100%">
                                    <div class="col-sm-12 pr-0">
                                        <div class="blog-content B" >
                                            <div class="blog-img">
                                                <img src="img/knowledge/blog-choco.jpg">
                                            </div>
                                            <div class="blog-title">
                                                <p>Vì chó Ta xứng đáng được yêu thương</p>
                                            </div>
                                            <div class="blog-detail">
                                                <p>Chắc chắn không ít lần chúng ta đã nghe...</p>
                                            </div>
                                            <div class="blog-btn text-right">
                                                <a href="knowledgedetail.php?id=2">Đọc thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-sm-12 pr-0">
                                            <div class="blog-content B">
                                                <div class="blog-img">
                                                    <img src="img/knowledge/blog-fido.jpg">
                                                </div>
                                                <div class="blog-title">
                                                    <p>Chú chó Fido - biểu tượng của lòng trung thành</p>
                                                </div>
                                                <div class="blog-detail">
                                                    <p>Lòng trung thành vô hạn với chủ nhân...</p>
                                                </div>
                                                <div class="blog-btn text-right">
                                                    <a href="knowledgedetail.php?id=3">Đọc thêm</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>


                    <div id="thuycoban" class="container tab-pane fade"><br>
                        <div class="row" style=" margin: auto; width:100̀%;">
                                <div class="col-lg-7"> 
                                    <div class="blog-content A">
                                        <div class="blog-img">
                                            <img src="img/knowledge/blog-meo.jpg">
                                        </div>
                                        <div class="blog-title">
                                            <p>Bệnh giảm bạch cầu ở mèo</p>
                                        </div>
                                        <div class="blog-detail">
                                            <p>Bệnh giảm bạch cầu là một tình trạng khá phổ biến mà mèo mắc phải, khi mèo có số lượng hồng cầu...</p>
                                        </div>
                                        <div class="blog-btn text-right">
                                            <a href="knowledgedetail.php?id=4">Đọc thêm</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 pr-0">
                                    <div class="row" style="height:100%; width: 100%">
                                        <div class="col-sm-12 pr-0">
                                            <div class="blog-content B" >
                                                <div class="blog-img">
                                                    <img src="img/knowledge/blog-puppies.jpg">
                                                </div>
                                                <div class="blog-title">
                                                    <p>Phải làm gì nếu con chó con không ăn đủ</p>
                                                </div>
                                                <div class="blog-detail">
                                                    <p>Những chú chó con được biết đến vì tính hoạt bát...</p>
                                                </div>
                                                <div class="blog-btn text-right">
                                                    <a href="knowledgedetail.php?id=5">Đọc thêm</a>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="col-sm-12 pr-0">
                                                <div class="blog-content B">
                                                    <div class="blog-img">
                                                        <img src="img/knowledge/blog-phatban.jpg">
                                                    </div>
                                                    <div class="blog-title">
                                                        <p>Phát ban nhiệt ở chó</p>
                                                    </div>
                                                    <div class="blog-detail">
                                                        <p>Phát ban nhiệt-ban đỏ, là một bệnh da phổ biến ở chó...</p>
                                                    </div>
                                                    <div class="blog-btn text-right">
                                                        <a href="knowledgedetail.php?id=6">Đọc thêm</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
    

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>
</html>