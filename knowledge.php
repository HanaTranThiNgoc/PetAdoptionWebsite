<?php     
 session_start();   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PURRFECT MATCH | Kiến thức</title>
    <link rel="icon" href="logo.svg" type="image/icon type">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300;1,400&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Barlow', sans-serif !important;
        }
        .banner{
            display: flex;
            width:100%;
            height: 28rem;
            background-image: url(img/banner/banner-knowledge.jpg);
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
        .p-title{
            padding: 2rem 0 1rem 0;
            color:#729106;
            font-size:1.5rem;
            font-weight: 550;
            text-align: center;
        }
        .container-tab-nav{
            margin: 0 3rem 2rem 3rem;
        }
        .tab-content{
            padding:0 3rem 1.7rem 3rem;
            border: 0.01rem solid #D9D9D9;
            border-top: none;
        }
        .blog{
            margin:1rem;
            padding:1.5rem;
            background-color: #f3f6f4;
            overflow: hidden;
            border-radius:5px;
        }
        .blog .row{
            margin: 0 0.2rem;
        }
        .col-12 .blog-img {
            height: 15rem;
        }
        .col-12 .blog-content{
            height: 8rem;
            margin:1rem 0;
        }
        .blog-img{
            width:100%;
        }
        .col-12 img{
            width:100%;
            height:100%;
            object-fit: cover;
            border: 0.1px solid #489620;
            border-radius:5px;
        }
        .blog .blog-btn{
            position: absolute;
            bottom:0.2rem;
            right: 0.3rem;
        }
        .blog .blog-btn a{
            color: green;
            font-weight: 500;
        }
        .navtabs .nav-link{
            color: black;
        }
        .navtabs .nav-link:hover{
            color: #489620;
        }
        .blog-title{
            font-size:1.1rem;
            font-weight: 600;
        }
        .blog-detail{
            color:grey;
        }

    </style>
</head>
<body>
<!--Navigation-->
    <?php require_once("navbar.php"); ?>
<!-- headerbottom -->
<div class="header-bottom">
    <div class="banner">
        <div class="banner-title">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item active">Kiến thức</li>
            </ul>
        </div>
    </div>
</div>
 <!-- knowledge nav-tabs-->
<div class="wrap-knowledge container-fluid p-0">
        <div class="p-title">KIẾN THỨC</div>
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
                <div id="tuyentruyen" class=" tab-pane active"><br>
                    <div class="tab-content-row">
                        <div class="row p-0">
                                <?php
                                $sql = "SELECT * from knowledge where type='1'";
                                $sql2 = "SELECT * from knowledge where type ='2'";
                                require_once "config.php";
                                $result = mysqli_query($conn, $sql);
                                $result2 = mysqli_query($conn, $sql2);

                                if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                ?> 
                                <div class="col-lg-4 p-0">
                                    <div class="blog">
                                            <div class="row">
                                                <div class="col-12 p-0">
                                                    <div class="blog-img">
                                                        <img src="img/knowledge/<?php echo $row['img'] ?>" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-12 p-0">
                                                    <div class="blog-content">
                                                        <div class="blog-title">
                                                            <p><?php echo $row['title'] ?></p>
                                                        </div>
                                                        <div class="blog-detail">
                                                            <p><?php echo $row['detail'] ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="blog-btn">
                                                        <a href="knowledgedetail.php?id=<?php echo $row["id"] ?>">Chi tiết</a>
                                                    </div>
                                                </div>   
                                            </div>
                                        
                                    </div>
                                </div>
                                <?php
                                }                               
                                ?>
                            
                        </div>
                    </div>    
                </div>
                

                <div id="thuycoban" class="tab-pane fade"><br>
                    <div class="tab-content-row">
                        <div class="row p-0">
                            <?php
                            if (mysqli_num_rows($result2) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result2)) {
                            ?> 
                            <div class="col-lg-4 p-0">
                                <div class="blog">
                                        <div class="row">
                                            <div class="col-12 p-0">
                                                <div class="blog-img">
                                                    <img src="img/knowledge/<?php echo $row['img'] ?>" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 p-0">
                                                <div class="blog-content">
                                                    <div class="blog-title">
                                                        <p><?php echo $row['title'] ?></p>
                                                    </div>
                                                    <div class="blog-detail">
                                                        <p><?php echo $row['detail'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="blog-btn">
                                                    <a href="knowledgedetail.php?id=<?php echo $row["id"] ?>">Chi tiết</a>
                                                </div>
                                            </div>   
                                        </div>
                                    
                                </div>
                            </div>
                            <?php
                            }
                            }
                        }
                            else {
                            echo "0 results";
                            }
                            mysqli_close($conn);                                 
                            ?>

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
</html>