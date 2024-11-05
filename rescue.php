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
    <title>PURRFECT MATCH | Cứu hộ</title>
</head>
<style>
    body{
            overflow-x:hidden;
            font-family: 'Barlow', sans-serif !important;
        }
        .banner{
            display: flex;
            width:100%;
            height: 28rem;
            background-image: url(img//banner/banner-rescue.jpg);
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
        .caserescue-title{
            color:#69594D;
        }
        .caserescue-card{
            background-color: #F6F5F5;
            border-radius:10px;
        }
        .caserescue-card-img img{
            width:100%;
            height:18rem;
            object-fit: cover;
            border-radius:10px 10px 0 0;
        }
        .caserescue-date{
            width: 22%;
            padding:0.5rem;
            position: absolute;
            z-index:100;
            bottom:10.9rem;
            left:1.2rem;
        }
        .caserescue-date-daymonth{
            background-color:white;
            color:black;
            font-weight:400;
            width:100%;
            padding:2px;
        }
        .caserescue-date-year{
            background-color:#E39E19;
            color:white;
            font-weight:500;
            padding:5px;
        }
        .caserescue-card-content{
            margin: 0 0 0.5rem 1.5rem;
        }
        .caserescue-card-content h4{
            padding-top: 2.4rem;
            font-weight:700;
        }
        .caserescue-card-content a{
            position: relative;
            bottom: 0.5rem;
            left:15rem;
            padding:0.5rem;
            font-weight:500;
            background-color:;
            color: #E39E19;
        }
        .caserescue-card-content a:hover{
            color: green;
        }
        .caserescue-card-content p{
            padding-right:1.5rem;
        }

</style>
<body>
<!--Navigation-->
<div class="header-top">
        <?php require_once("navbar.php"); 
        
        ?>
    </div>
<!-- headerbottom -->
    <div class="header-bottom">
        <div class="banner">
            <div class="banner-title">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Cứu hộ</li>
                </ul>
            </div>
        </div>
    </div> 
<!-- caserescue -->
    <div class="caserescue mb-4">
        <div class="wrap-caserescue container">
            <div class="caserescue-title mt-4 text-center">
                <h3>Case cứu hộ tiêu biểu</h3>
            </div>
            <div class="row mt-2">
            <?php
                $sql = "SELECT * from rescue ";
                require_once "config.php";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
            ?> 
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="caserescue-card m-3"> 
                    <div class="caserescue-date text-center">
                        <?php
                            $r_date = strtotime($row["r_date"]);
                            $day = date('d', $r_date);
                            $month = date('m', $r_date);
                            $year = date('Y', $r_date);
                        ?>
                        <p class="caserescue-date-daymonth m-0"><?php echo $day; ?> - <?php echo $month; ?></p>
                        <p class="caserescue-date-year m-0"><?php echo $year; ?></p>
                    </div>  
                    <div class="caserescue-card row">
                        <div class="caserescue-card-img col-lg-12 p-0">
                            <a href="rescuedetail.php?id=<?php echo $row["id"] ?>"><img src="img/cuuho/<?php echo $row["img"]; ?>"></a>
                        </div>
                        <div class="caserescue-card-content col-lg-12 p-0">
                            <h4><?php echo $row["petname"];?></h4>
                            <p><?php echo $row["content_title"];?></p>
                            <a href="rescuedetail.php?id=<?php echo $row["id"] ?>">Chi tiết</a>
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
                mysqli_close($conn);                                 
            ?>   
                
            </div>
        </div>
    </div>

<!-- footer -->
    <div>
        <?php require_once("footer.php"); ?>
    </div>
</body>
</html>