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
        <?php if(isset($_GET["id"])){
            $id=$_GET["id"];
            $sql="select * from knowledge where id= $id";
            require_once("config.php");
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){ 
                while($row = mysqli_fetch_assoc($result)) {
        ?> <title><?php echo $row['title']?> </title>
           
    <style>
        body{
            background-color: #f3f6f4 !important;
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
        .wrap-knowledge-detail{
            margin: 3rem 0;
            background-color: white ;
            box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 4px 8px 0 rgba(0, 0, 0, 0.1);
        }
        .knowledge-content{
            padding: 2rem;
            border: 2px solid #f3f6f4 ;
            border-top: none;
            border-bottom: none;
            border-left: none;
        }
        .knowledge-content-title p{ 
            font-weight: 500;
            font-size:1.5rem;
        }
        .knowledge-content-title-img{
            padding: 1rem;
        }
        .knowledge-content-title-img img{
            width:100%;
        }
        .knowledge-content-date{
            display: flex;
        }
        .date{
            color: grey;
            padding-top:1px;
        }
        .date p{
            margin-bottom: 16px;
        }
        .date-img{
            padding-right:5px;
        }
        .knowledge-content-content{
            margin-top:0.5rem;
        }
        .highlight {
            font-weight: bold;
        }
        .caption{
            text-align: center;
        }
        .knowledge-detail-more{
            padding: 0 3rem 0 1rem;
        }

        .knowledge-detail-more-img img{
            width:100%;
            border-radius: 10px;
        }
        .knowledge-detail-more-caption{
            margin-top:2rem;
            width:100%;
            position:relative;
            left: -1.5rem;
        }
        .knowledge-detail-more-caption p{
            color: white;
            background-color:#489620;
            padding: 0.3rem 0 0.3rem 0.5rem;
        }
        .knowledge-detail-more-title{
            width:100%;
            margin-bottom: 0.5rem;
            margin-top:0.3rem;
            font-weight:500;
            border: 2px solid #f3f6f4 ;
            border-top: none;
            border-right: none;
            border-left: none;

        }
        .knowledge-detail-more-btn {
            position: relative; 
            left:15rem;
            bottom: 0.5rem;
        }
        .knowledge-detail-more-btn a{
            color: #E39E19;
        }
    </style>
</head>
<!--Navigation-->
    <?php require_once("navbar.php"); ?>
<!-- headerbottom -->
<div class="header-bottom">
    <div class="banner">
        <div class="banner-title">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="knowledge.php">Kiến thức</a></li>
                <li class="breadcrumb-item active">
                    <?php echo $row['title'];?>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- knowledgedetail -->
<div class="wrap-knowledge-detail container">
    <div class="knowlegde-row">
        <div class="row">
            <div class="col-lg-8">
                <div class="knowledge-content">
                    <div class="knowledge-content-date">
                        <?php
                        $date = strtotime($row["date"]);
                        $day = date('d', $date);
                        $month = date('m', $date);
                        $year = date('Y', $date);
                        $text = $row['content'];
                        $decoded_text = htmlspecialchars_decode($text);
                        $decoded_text_with_br = nl2br($decoded_text);
                        
                        ?>
                    
                        <div class="date-img "><img src="time.svg" alt=""></div>
                        <div class="date"><p><?php echo $day;?>/<?php echo $month;?>/<?php echo $year;?></p></div>
                    </div>
                    <div class="knowledge-content-title">
                        <p><?php echo $row['title'] ?></p>
                    </div>
                    <div class="knowledge-content-title-img">
                        <img src="img/knowledge/<?php echo $row['img'] ?>" alt="">
                        <span class="caption">Hình ảnh minh họa</span>
                    </div>
                    <div class="knowledge-content-content">
                        <p><?php echo $decoded_text_with_br;?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                        <div class="knowledge-detail-more-caption">
                            <p>Blog khác</p>
                        </div>
                    <?php
                        $sql2="select * from knowledge where id != $id limit 3";
                        $result2 = mysqli_query($conn, $sql2);
                        if(mysqli_num_rows($result2)>0){ 
                            while($row = mysqli_fetch_assoc($result2)) {
                    ?>
                    <div class="col-12">
                        <div class="knowledge-detail-more">
                            <div class="row">
                                <div class="knowledge-detail-more-img">
                                <a href="knowledgedetail.php?id=<?php echo $row['id'] ?>">
                                    <img src="img/knowledge/<?php echo $row['img'] ?>" alt="">
                                </a>
                                </div>
                                <div class="knowledge-detail-more-title">
                                    <p><?php echo $row['title']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    }
                    else {
                    echo "0 results";
                    }
                    ?>
                    <div class="knowledge-detail-more-caption mt-1">
                        <p>Các case cứu hộ </p>
                    </div>
                    <?php
                        $sql3="select * from rescue limit 1";
                        $result3 = mysqli_query($conn, $sql3);
                        if(mysqli_num_rows($result3)>0){ 
                            while($row = mysqli_fetch_assoc($result3)) {
                    ?>
                    <div class="col-12">
                        <div class="knowledge-detail-more">
                            <div class="row">
                                <div class="knowledge-detail-more-btn">
                                    <a href="rescue.php">Xem tất cả</a>
                                </div>
                                <div class="knowledge-detail-more-img">
                                <a href="rescuedetail.php?id=<?php echo $row['id'] ?>">
                                    <img src="img/cuuho/<?php echo $row['img'] ?>" alt="">
                                </a>
                                </div>
                                <div class="knowledge-detail-more-title">
                                    <p><?php echo $row['petname']?></p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    }
                    else {
                    echo "0 results";
                    }
                    ?>
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
<body>
 <!-- footer -->
<div>
    <?php require_once("footer.php"); ?>
</div>   
</body>
</html>