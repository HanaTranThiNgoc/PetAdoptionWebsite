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
            $sql="select * from rescue where id= $id";
            require_once("config.php");
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){ 
                while($row = mysqli_fetch_assoc($result)) {
        ?> <title><?php echo $row['petname']?> </title>
            <?php
            }
            }
                }
                else echo '0 Result';
            ?>
    <style>
        body{
            overflow-x:hidden;
            font-family: 'Barlow', sans-serif !important;
            background-color: #f3f6f4 !important;
        }
        .banner{
            display: flex;
            width:100%;
            height: 28rem;
            background-image: url(img/banner/banner-rescue.jpg);
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
        .wrap-rescue-detail {
            margin-top:3rem;
            background-color: white !important;
            border-radius:5px;
            box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 4px 8px 0 rgba(0, 0, 0, 0.1);
        }
        .rescue-detail-content-petimg{
            width: 15rem;
            height: 17rem;
            margin: 1rem 0 1rem 2.2rem;
            object-fit:cover;
            border: 2px solid lightgrey;
        }
        .rescue-detail-content-left{
            padding:2rem;
            border-radius:5px;
            box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }
        .content-health li{
            margin:0.5rem;
        }.rescue-detail-content-petname{
            color: #E39E19;
            font-weight: 700;
            font-size:1.3rem; 
        }
        .othercases-card-left img{
            width:100%;
            width:8.5rem;
            height:7rem;
            object-fit:cover;
        }
        .othercases-card-petlink{
            position:absolute;
            bottom:0rem;
            right:1rem;
        }
        .othercases-card-right a{
            color: #E39E19;
        }
        .othercases-card-right a:hover{
            color: green;
        }
        .othercases-card-col{
            background-color:
        }
        .othercases-card-list{
            border-bottom: 2px solid lightgrey;
            padding-bottom: 1rem;
        }
        .othercases-title{
            margin:1rem 0 0 0.5rem;
        }
        .othercases-title p{
            padding-left: 1rem;
            color: white;
            background-color:#E39E19;
            font-weight: 500;
            font-size:1.3rem;
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
                    <li class="breadcrumb-item"><a href="rescue.php">Cứu hộ</a></li>
                    <li class="breadcrumb-item active">
                        <?php if(isset($_GET["id"])){
                            $id=$_GET["id"];
                            $sql="select * from rescue where id= $id";
                            require_once("config.php");
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)>0){ 
                                while($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <?php echo $row['petname']?>
                       </li>
                </ul>
            </div>
        </div>
    </div>
<!-- rescuedetail   -->
<div class="rescue-detail mb-5">
    <div class="wrap-rescue-detail container">
        <div class="rescue-detail-content row">
            <div class="rescue-detail-content-left col-lg-8 col-md-12 p-4">
                <p class="rescue-detail-content-petname">
                <strong><?php echo $row["petname"];?></strong>
                </p>
                <p class="rescue-detail-content-petcode">
                <strong><?php echo $row["code"];?></strong>
                </p>
                <p class="rescue-detail-content-date"><strong>Ngày cứu hộ: </strong>
                    <?php echo $row["r_date"];?>
                </p>
                <ul class="content-health">
                    <li class="health-before"><strong>Tình trạng ban đầu:</strong>
                        <?php echo $row["r_before"];?>
                    </li>
                    <li class="health-after"><strong>Tình trạng hiện tại:</strong>
                        <?php echo $row["r_after"];?>
                    </li>
                </ul>
                <p class="rescue-detail-content-petgallery">
                    <strong>Hình ảnh: </strong>
                </p>
                <img src="img/cuuho/<?php echo $row["img"];?>" class="rescue-detail-content-petimg"> 
                
                                    
            </div>
            
            <div class="rescue-detail-content-right col-lg-4 col-md-12">
                <div class="othercases-title ">
                    <p>Các case khác</p>
                </div> 
                <div class="othercases row">      
                            <?php if(isset($_GET["id"])){
                                $id=$_GET["id"];
                                $sql="select * from rescue where id != $id";
                                require_once("config.php");
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result)>0){ 
                                    while($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="othercases-card-col col-lg-12">
                                <div class="othercases-card-list row my-3 mx-2">
                                    <div class="othercases-card-left col-lg-6 ">
                                        <img src="img/cuuho/<?php echo $row["img"];?>">
                                    </div>
                                    <div class="othercases-card-right col-lg-6 p-0 my-3">
                                        <p class="othercases-card-petname"><strong><?php echo $row["petname"];?></strong><br> 
                                        <a class="othercases-card-petlink" href="rescuedetail.php?id=<?php echo $row["id"] ?>">Chi tiết</a>
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

                        <?php
                                }
                                }
                            }
                                else {
                                echo "0 results";
                                }                                
                            ?> 
</div> 
<!-- footer -->
<div>
    <?php require_once("footer.php"); ?>
</div>   
</body>
</html>