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
    <title>Yêu cầu được gửi</title>
    <style>
         body{
            background-color:#F7F7FC !important;
            overflow-x:hidden;
        }
        .afadoption-cover{
            margin: 9rem 0 1rem 0 ;
            padding: 0 9rem;
        }
        .afadoption-pet{
            margin: 2rem 0 1rem 0;
            padding: 2rem 0;
            background-image: url(img/banner/banner-afadopt.png) ;  
            background-size: cover; 
            background-position: center;
            border-radius:10px;
            box-shadow: rgba(36, 55, 78, 0.08) 0px 8px 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .afadoption-pet-img{
            margin:0;
            width: 12rem;
            height: 12rem;
            border-radius: 50%;      
        }
        .afadoption-pet-img img{
            width:100%;
            height:100%;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid white;
        }
        .afadoption-pet-name{
            margin:1rem 0 0 0;
        }
        .afadoption-title h3{
            margin-bottom:12px;
            color: #EB726A;
        }
        .afadoption-title h5{
            color: #EB726A;
        }
        .afadoption-title span{
            font-weight:600;
            font-size:1.4rem;
            letter-spacing: 2px;
        }
        .afadoption-pet-name p{
            margin:0;
            padding:0;
            font-size:1.2rem;
            font-weight:600;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .btn-back{
            margin-top:2rem; 
        }
        .btn-back a{
            background-color: #EEA19C !important;
            padding: 1rem 2rem;
            border-radius:10px;
            box-shadow: rgba(36, 55, 78, 0.08) 0px 8px 40px;
            border:none;
            font-weight:500;
            color:white;
        }
        .btn-back a:hover{
            background-color: white !important;
            color: #EEA19C;
            text-decoration:none;
        }
    </style>
</head>
<body>
<!--Navigation-->
<div class="header-top">
    <?php require_once("navbar.php");?>
</div>
<div class="wrap-afadoption container">
    <div class="afadoption-cover">
        <div class="afadoption-title text-center">
            <h3>Yêu cầu nhận nuôi của bạn đã hoàn thành</h3>
            <h5>Cảm ơn bạn đã dành yêu thương cho <span><?php echo $_SESSION["Pet_name"]; ?></span></h5>
        </div>
        <div class="afadoption-pet">
            <div class="afadoption-pet-img ">
            <?php if(isset($_SESSION["Pet_id"])) {
                ?>                                     
                <img src="img/<?php echo $_SESSION["Pet_img"]; ?>" alt="">
            </div>
            <div class="afadoption-pet-name">
                <p><?php echo $_SESSION["Pet_name"]; ?></p>
            </div>
            <?php                                              
            }?>
        </div>
        <div class="text-center">
            <div class="btn-back">
                <a href="index.php">Trang chủ</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>