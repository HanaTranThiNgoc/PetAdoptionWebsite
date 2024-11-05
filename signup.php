<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.svg" type="image/icon type">
    <title>Signup</title>
</head>
<style>
    body{
        background-image: linear-gradient(rgb(54,118,132,0.4),rgb(54,118,132,0.4)), url(img/banner/bg-login.jpg);
        background-position: center;
        background-size: cover;

    }
    .wrap{
        height:100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .wrap-signup{
        margin-top:3rem;
        width:45%;
        height:70vh;
        background-color: rgb(255,255,255,0.7);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.2);
        padding: 1rem 3rem 0.5rem 3rem;
        border-radius: 20px;
    }
    .wrap-signup h3{
        margin-top:1rem;
        font-size:1.5rem;
        font-weight:600;
        text-align: center;
        color: #69594D;
    }
    .btn-submit {
        margin:2rem 0 1rem 0;
        position: relative;
        text-align:center; 
    }
    .btn-submit button{
        background-color: white !important;
        border: 2px solid #69594D;
        color: #69594D;
    }
    .btn-submit button:hover{
        color: white;
        background-color: #69594D !important;
        border: 2px solid #69594D;
    }
    .form-group{
        margin: 0;
    }
    .label{
        font-weight:400;
    }
    .signup a{
        color: black;
        font-weight:300;
        font-size:0.9rem;
    }
    .passworderorr{
        position: absolute;
        left:43%;
        bottom:7.5rem;
        color: red;
    }
    .connect-sucessfully{
       	position: absolute;
        left:45%;
        display:flex;
        align-items: center;
        justify-content: center;
        bottom: 10.5rem;
        color: green;
    }
    .email{
        position:absolute;
        top:39%;
        left:53%;
        color:red;
    }
    


</style>
<body>
<!--Navigation-->
<?php require_once("navbar.php"); ?>
<!-- login -->
<div class="wrap container">
    <div class="wrap-signup">
        <h3>Đăng ký</h3>
        <form action="" method="post">
            <div class="form-group">
                <label for="uname">Họ và tên:</label>
                <input type="text" class="form-control" id="username" placeholder="Nhập họ và tên" name="username" required>
               
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" placeholder="Nhập địa chỉ email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ:</label>
                <input type="address" class="form-control" placeholder="Nhập địa chỉ" id="address"  name="address" required>
        
            </div>
            <div class="form-group">
                <label for="pwd">Mật khẩu:</label>
                <input type="password" class="form-control" placeholder="Nhập mật khẩu" id="pwd" name="password" required>
        
            </div>
            <div class="btn-submit">
                <button type="submit" class="btn btn-primary" name ="submit">Đăng ký</button>
            </div>
            <div style="display: flex; align-items: center; justify-content:center;">
                <div class="signup">
                    <a href="login.php">Đã có tài khoản?</a>
                </div>
            </div>
        </form>
    </div>
</div>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "purrfect_match";
    
        //Create connection 
        $conn = mysqli_connect ($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, 'UTF8');
        //Check connection
        if (!$conn) {
            die ("Connection failed: ". mysqli_connect_error());
        }    
        if(isset($_POST["submit"])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $password = $_POST["password"];
        
        // Kiểm tra xem tên đăng nhập đã được sử dụng chưa
        $sql = "SELECT email FROM user_info WHERE email = '$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {?> 
        <div class="email">
            <?php
            echo "Email này đã tồn tại!";
            ?>
            </div>
        <?php    
            exit();
        }
        // ... Viết mã lưu dữ liệu vào cơ sở dữ liệu...
        $sql = "INSERT INTO user_info (user_name, email, address, password) VALUES ('$username', '$email', '$address', '$password')";
        
        if ($conn->query($sql) === TRUE) {
            ?> 
            
            <div class="connect-sucessfully"><div><center><p><?php echo "Đăng ký thành công!";?></p></center></div> </div>
            
            <?php
            
        } else {
            echo "Lỗi: " . $sql . "<br>" . $conn->error;
        }
        
        // Đóng kết nối
        $conn->close();
    }   
        ?>

</body>
</html>