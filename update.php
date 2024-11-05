<?php     
 session_start();   
?>
<?php require_once 'config.php';
    $user_id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    
    // Cập nhật thông tin của người dùng trong cơ sở dữ liệu
    $sql = "UPDATE user_info
            INNER JOIN contact_info ON user_info.id = contact_info.user_id
            SET user_info.user_name = '$name',
                user_info.email = '$email',
                user_info.address = '$address',
                contact_info.phonenumber = '$phone'
            WHERE user_info.id =$user_id";
    if ($conn->query($sql) === TRUE) {
        $message="Cập nhật thông tin thành công"; 
    } else {
        header("Location: updateprofile.php");
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cập nhật thông tin</title>
        <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300;1,400&display=swap" rel="stylesheet">
        <style>
            body{
                background-image: url(img/banner/banner-afadopt.png);
                background-size: cover; 
                background-position: center;
                font-family: 'Barlow', sans-serif;
            }
            .wrap-message{
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                height: 90vh;
            }
            .wrap-message .cover{
                padding: 3rem;
                background-color: white;
                border-radius:10px;
            }
            .message{
                display: flex;
            }
            .message h1{
                margin-left: 1rem;
                color:#6DC180;
            }
            .login-again{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .login-again p{

            }
        </style>
    </head>
    <body>
    <div class="wrap-message">
        <div class="cover">
            <div class="message">
                <img src="Check.svg" alt="">
                <h1><?php echo $message; ?></h1>
            </div>
            <div class="login-again">
                <h3>Vui lòng đăng nhập để tiếp tục</h3>   
                <a href="logout.php"><img src="Logout.svg" alt="" href="logout.php"></a>
            </div>
        </div>
    </div>
    </body>
    </html>