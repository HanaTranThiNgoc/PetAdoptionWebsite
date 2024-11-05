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
    <title>Yêu cầu nhận nuôi</title>
    <style>
        body{
            background-color:#F7F7FC !important;
            overflow-x:hidden;
        }
        .afadoption-cover{
            margin: 9rem 0;
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
        .afadoption-questions{
            margin:1rem 0 0 0; 
            padding:2rem 3rem;
            background-color:white !important;
            border-radius:10px;
            box-shadow: rgba(36, 55, 78, 0.08) 0px 8px 40px;
        }
        .afadopt-questions-form label {
            display: block;
        }
        .afadopt-questions-form label input{
            margin-right:5px;
        }
        .afadopt-questions-form p{
            font-size:1.1rem;
            font-weight:550;
        }   
        .afadopt-questions-form div{
            margin-bottom: 1rem;
        }
        .afadopt-questions-form textarea{
            width:70%;
            border-radius:5px;
        }
        .afadopt-questions-form select{
            padding:0.5rem;
            border-radius:5px;
            width:70%;
        }
        .btn-sent{
            width:10rem;
            margin-top:1.5rem; 
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
            margin-top:2rem; 
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
                
                <?php 
                    if(isset($_GET["id"])){
                        $id=$_GET["id"];
                        $sql="select * from pet where id= $id";
                        require_once("config.php");
                       
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result)>0){ 
                            while($row = mysqli_fetch_assoc($result)) {
                            
                                $_SESSION["Pet_id"] = $row["id"];
                                $_SESSION["Pet_img"] = $row["img"];
                                $_SESSION["Pet_name"] = $row["pet_name"];
                                mysqli_close($conn);
                               
                                ?>
                                

                    
                <img src="img/<?php echo $row["img"] ?>" alt="">
            </div>
            <div class="afadoption-pet-name">
                <p><?php echo $row['pet_name']?></p>
            </div>
                 <?php }
                        }
                     }
                    else {
                    echo "0 results";
                }
                ?>
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
                        <div class="step-icon " style="background-color: lightgrey; ">
                            <img style="width:20px; height:20px;"src="interview.svg" alt="">
                        </div>
                        <div class="step-title">
                            <p>Phỏng vấn</p>
                        </div>
                    </div>
                </div>
        </div>
        <div class="afadoption-questions">
            <div class="afadopt-questions-form">
            <?php if(isset($_SESSION["User_name"])) {
                    $pet_id = $_SESSION["Pet_id"]              ?>
            <form action="interview.php?id=<?php echo $pet_id;?>" method="post" >
            <?php
            }                                
            ?>    
                <div>
                    <p>Kinh nghiệm trong việc chăm sóc/nuôi chó/mèo của bạn?</p>
                    <label>
                    <input type="checkbox" name="answers1[]" value="Chưa từng chăm sóc/nuôi chó/mèo">Chưa từng chăm sóc/nuôi chó/mèo
                    </label>
                    <label>
                    <input type="checkbox" name="answers1[]" value="Đã từng nuôi chó/mèo">Đã từng nuôi chó/mèo
                    </label>
                    <label>
                    <input type="checkbox" name="answers1[]" value="Bạn bè và gia đình tôi đều đang nuôi chó/mèo" >Bạn bè và gia đình tôi đều đang nuôi chó/mèo
                    </label>
                </div>
                <div>
                    <p>Bạn đã nuôi một con chó/mèo trước đây?</p>
                    <label>
                    <input type="checkbox" name="answers2[]" value="Chưa từng, tôi đang tìm kiếm thú cưng đầu tiên">Chưa từng, tôi đang tìm kiếm thú cưng đầu tiên
                    </label>
                    <label>
                    <input type="checkbox" name="answers2[]" value="Khoảng gần 1 năm gần đây">Khoảng gần 1 năm gần đây
                    </label>
                    <label>
                    <input type="checkbox" name="answers2[]" value="Khoảng vài năm về trước">Khoảng vài năm về trước
                    </label>
                </div>
                <div>
                    <p>Nếu có thể, vui lòng liệt kê bất kỳ vật nuôi nào hiện đang sống trong nhà của bạn</p>
                    <textarea name="text3" placeholder="Tôi đang nuôi một con mèo..."></textarea>
                </div>
                <div>
                    <p>Bạn đang muốn nhận nuôi ở độ tuổi nào? </p>
                    <label>
                    <input type="checkbox" name="answers4[]" value="Dưới 6 tháng">Dưới 6 tháng
                    </label>
                    <label>
                    <input type="checkbox" name="answers4[]" value="6 tháng đến khoảng một năm">6 tháng đến khoảng một năm
                    </label>
                    <label>
                    <input type="checkbox" name="answers4[]" value="1 tuổi đến 8 tuổi">1 tuổi đến 8 tuổi
                    </label>
                </div>
                
                <div>
                    <p>Bạn nghĩ mèo có tính cách nào sẽ thích gia đình bạn nhất?</p>
                    <label>
                    <input type="checkbox" name="answers5[]" value="Một con chó/mèo tự tin, cởi mở ">Một con chó/mèo tự tin, cởi mở 
                    </label>
                    <label>
                    <input type="checkbox" name="answers5[]" value="Một con chó/mèo nhút nhát thích một môi trường yên tĩnh">Một con chó/mèo nhút nhát thích một môi trường yên tĩnh
                    </label>
                    <label>
                    <input type="checkbox" name="answers5[]" value="Một con chó/mèo thích sống với (những) con mèo/chó khác">Một con chó/mèo thích sống với (những) con mèo/chó khác
                    </label>
                    <label>
                    <input type="checkbox" name="answers5[]" value="Một con chó/mèo có thể thích ở gần trẻ em">Một con chó/mèo có thể thích ở gần trẻ em
                    </label>
                </div>
                <div>
                    <p>Chó/mèo có tính cách nào phù hợp nhất với những gì bạn đang tìm kiếm? </p>
                    <label>
                    <input type="checkbox" name="answers6[]" value="Một con chó/mèo năng động và tôi có thể chơi với vài lần một ngày">Một con chó/mèo năng động và tôi có thể chơi với vài lần một ngày
                    </label>
                    <label>
                    <input type="checkbox" name="answers6[]" value="Một con chó/mèo độc lập hơn sẽ làm việc của riêng mình">Một con chó/mèo độc lập hơn sẽ làm việc của riêng mình
                    </label>
                    <label>
                    <input type="checkbox" name="answers6[]" value="Một con chó/mèo thích nằm cạnh tôi trên đi văng và được vuốt ve">Một con chó/mèo thích nằm cạnh tôi trên đi văng và được vuốt ve
                    </label>
                    <label>
                    <input type="checkbox" name="answers6[]" value="Một con chó/mèo nhút nhát có thể cần một chút kiên nhẫn từ phía tôi để giúp chúng cảm thấy thoải mái khi ở trong nhà của tôi">Một con chó/mèo nhút nhát có thể cần một chút kiên nhẫn từ phía tôi để giúp chúng cảm thấy thoải mái khi ở trong nhà của tôi
                    </label>
                    <label>
                    <input type="checkbox" name="answers6[]" value="Một con chó/mèo đã ở nơi cứu hộ trong một thời gian dài">Một con chó/mèo đã ở nơi cứu hộ trong một thời gian dài 
                    </label>
                </div>
                <div>
                    <p>Điều gì đã thu hút bạn chọn nhận nuôi chó/mèo này?</p>
                    <textarea name="text7" placeholder="Tính cách năng động..."></textarea>
                </div>
                <div>
                    <p>Để giúp chúng tôi sắp xếp phù hợp nhất có thể, vui lòng cho chúng tôi biết ai khác sống trong nhà của bạn và mối quan hệ của bạn với họ? Nếu có thể, vui lòng bao gồm tuổi của trẻ em trong nhà của bạn*</p>
                    <textarea name="text8" placeholder="Sống với gia đình, hoặc bạn bè..."></textarea>
                </div>
                <div>
                    <p>Bạn biết đến PM như thế nào?</p>
                    <label>
                    <input type="checkbox" name="answers9[]" value="PM website">PM website
                    </label>
                    <label>
                    <input type="checkbox" name="answers9[]" value="Nền tảng mạng xã hội (facebook, instagram,...)">Nền tảng mạng xã hội (facebook, instagram,...)
                    </label>
                    <label>
                    <input type="checkbox" name="answers9[]" value="Gia đình/Bạn bè/Người quen..">Gia đình/Bạn bè/Người quen..
                    </label>
                    <label>
                    <input type="checkbox" name="answers9[]" value="Quảng cáo">Quảng cáo
                    </label>
                    <label>
                    <input type="checkbox" name="answers9[]" value="Khác">Khác
                    </label>
                </div>
                <p>Nhiều vật nuôi tại Trung tâm nhận nuôi PM có các nhu cầu về y tế và/hoặc hành vi và yêu cầu một loại nhà nhất định, được nêu chi tiết trong tiểu sử của vật nuôi. Nếu bạn chưa đọc tiểu sử của thú cưng này, vui lòng nhấn nút quay lại và đọc tiểu sử trước khi tiếp tục.</p>
                <div class="d-flex justify-content-center">
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
</div>
<?php
                   
        // $           
        // $user_id = $_SESSION['Id'];
        
        // if(isset($_POST["sent"])) {
            
        //     $answer1 = $_POST['answers1'][0];
        //     $answer2 = $_POST['answers2'][0];
        //     $answer3 = $_POST['text3'][0];
        //     $answer4 = $_POST['answers4'][0];
        //     $answer5 = $_POST['answers5'][0];
        //     $answer6 = $_POST['answers6'][0];
        //     $answer7 = $_POST['text7'][0];
        //     $answer8 = $_POST['text8'][0];
        //     $answer9 = $_POST['answers9'][0];
        // $sql2 = "INSERT INTO adoption (user_id, pet_id, answer1, answer2, answer3,answer4,answer5,answer6,answer7,answer8,answer9) 
        // VALUES ('$user_id', '$id', '$answer1', '$answer2', '$answer3', '$answer4', '$answer5', '$answer6', '$answer7', '$answer8', '$answer9')";
        //   if ($conn->query($sql2) === TRUE) {
        //     header("Location: interview.php?id=$id&user_id=$user_id");
        // } else {
        //     echo "Lỗi: " . $sql2 . "<br>" . $conn->error;
        // }
        
        // Đóng kết nối
        
    // } 
    // $conn->close(); 

?> 

              
<?php require_once("footer.php"); ?>
</body>
</html>