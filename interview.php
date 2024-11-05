<?php     
 session_start();   
?>
<?php
                   require_once("config.php");
                   $id= $_SESSION['Pet_id'];        
                   $user_id = $_SESSION['Id'];
                   
                   if(isset($_POST["sent"])) {
                    if (empty($_POST['answers1'][0]) || empty($_POST['answers2'][0]) || empty($_POST['answers4'][0]) || empty($_POST['answers5'][0]) || empty($_POST['answers6'][0]) || empty($_POST['answers9'][0]) || empty($_POST['text3']) || empty($_POST['text7']) || empty($_POST['text8'])) {
                        
                        echo "bạn cần điền đầy đủ thông tin!";
                    } else {   
                       $answer1 = $_POST['answers1'][0];
                       $answer2 = $_POST['answers2'][0];
                       $answer3 = $_POST['text3'];
                       $answer4 = $_POST['answers4'][0];
                       $answer5 = $_POST['answers5'][0];
                       $answer6 = $_POST['answers6'][0];
                       $answer7 = $_POST['text7'];
                       $answer8 = $_POST['text8'];
                       $answer9 = $_POST['answers9'][0];
                    
                   $sql2 = "INSERT INTO adoption (user_id, pet_id, answer1, answer2, answer3,answer4,answer5,answer6,answer7,answer8,answer9) 
                   VALUES ('$user_id', '$id', '$answer1', '$answer2', '$answer3', '$answer4', '$answer5', '$answer6', '$answer7', '$answer8', '$answer9')";
                     if ($conn->query($sql2) === TRUE) {
                       echo "";
                   } else {
                       echo "Lỗi: " . $sql2 . "<br>" . $conn->error;
                   }
                   }    
                   // Đóng kết nối
                   
               } 
               $conn->close(); 
           
           ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.svg" type="image/icon type">
    <title>Yêu cầu nhận nuôi</title>
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
            width: 9rem;
            height: 9rem;
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
        }
        .afadoption-pet-name p{
            margin:0;
            padding:0;
            font-size:1.2rem;
            font-weight:600;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .afadoption-process{
            background-color: white !important;
            padding: 1.5rem;
            border-radius:10px;
            box-shadow: rgba(36, 55, 78, 0.08) 0px 8px 40px;

        }
        .process{
            display:flex;
        }
        .step{
            width:50%;
            display:flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .step-icon{
            width:40px;
            height:40px;
            position: relative;
            border-radius: 50%;
        }
        .step-icon img{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 100%;
            height: auto;
        }
        .step-title p{
            margin: 0.5rem 0 0 0;
        }
        .afadoption-form{
            padding: 0 9rem;
        }
        .afadoption-form-cover{
            margin-bottom: 2rem;
            background-color:white;
            padding: 3rem 6rem 1rem 6rem;
            border-radius:10px;
            box-shadow: rgba(36, 55, 78, 0.08) 0px 8px 40px;
        }
        .afadoption-form-cover input{
            border-radius:4px;
        }
        .afadoption-form-cover div{
            margin:0.5rem;
        }
        .btn-sent{
            width:10rem;
       
        }
        .btn-sent input{
            background-color: #FAEAE9 !important;
            padding: 0.5rem 2rem;
            border-radius:10px;
            box-shadow: rgba(36, 55, 78, 0.08) 0px 8px 40px;
            border:none;
            font-weight:500;
        }
        .btn-sent input:hover{
            background-color: #EEA19C !important;
            color: white;
        }
        .btn-back{
            margin-top: 1rem !important;
        }
        .btn-back a{
            background-color: #FAEAE9 !important;
            padding: 0.5rem 2rem;
            border-radius:10px;
            box-shadow: rgba(36, 55, 78, 0.08) 0px 8px 40px;
            border:none;
            font-weight:500;
            color:black;
        }
        .btn-back a:hover{
            background-color: #EEA19C !important;
            color: white;
            text-decoration:none;
        }
        input{
            border: 1px solid grey;
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
        <div class="afadoption-title">
            <h3>Bảng câu hỏi về việc nhận nuôi</h3>
            <h5>Hoàn thành bảng câu hỏi dưới đây để gửi yêu cầu nhận nuôi của bạn</h5>
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
        <div class="afadoption-process">
                <div class="process">
                    <div class="step">
                        <div class="step-icon" style="background-color: #EEA19C; ">
                            <img src="whitepaw.svg" alt="">
                        </div>
                        <div class="step-title">
                            <p>Bảng câu hỏi</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-icon " style="background-color: #EEA19C; ">
                            <img style="width:20px; height:20px;" src="interview.svg" alt="">
                        </div>
                        <div class="step-title">
                            <p>Phỏng vấn</p>
                        </div>
                    </div>
                </div>
        </div> 
    </div>
    <div class="afadoption-form">
        <div class="afadoption-form-cover">
            <form action="updateinfo.php" method="POST">
                <div>
                    <label for="name">Họ và tên:</label><br>
                    <input type="text" id="name" name="name" placeholder="Nhập họ và tên"  required><br>
                </div>
                <div>
                    <label for="address">Địa chỉ:</label><br>
                    <input type="text" id="address" name="address" placeholder="Nhập địa chỉ" required><br>
                </div>
                <div>
                    <label for="phone">Số điện thoại:</label><br>
                    <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại" required><br>
                </div>
                <div style ="display: flex; margin:0;">
                    <div style="margin-right: 3rem;">
                        <label for="id_card">Chứng minh nhân dân hoặc bằng lái xe:</label><br>
                        <input type="text" id="id_card" name="id_card" placeholder="vd:0703026***" required><br>
                    </div>
                    <div>
                        <label for="place">Nơi cấp:</label><br>
                        <input type="text" id="place" name="place" placeholder="Thủ Đức" required><br>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3 py-2">
                    <div class="btn-back mx-5">
                        <a href="javascript:void(0);" onclick="history.back();">Trở về</a>
                    </div>
                    <div class="btn-sent mx-5">
                        <input type="submit" name="sent" value="Gửi">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


</body>
</html>