

<?php
if(session_start()) {
    session_destroy();
}
if(isset($_POST["login"])) {
     $email = $_POST["email"];
     $pass = $_POST["password"];
 
     $sql = "select * from user_info where email='$email' and password='$pass'";
     require_once("config.php");
     $result = mysqli_query($conn, $sql);
     if (mysqli_num_rows($result) > 0) {             
         $row = mysqli_fetch_assoc($result);
         session_start();

         $_SESSION["Email"] = $row["email"];
         $_SESSION["Pass"] = $row["password"];                                            
         $_SESSION["Id"] = $row["id"]; 
         $_SESSION["User_name"] = $row["user_name"]; 
         $_SESSION["Address"] = $row["address"];
                          
         $sql2 = "SELECT SUBSTRING_INDEX(user_name, ' ', -1) AS last_name FROM user_info";
    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {
        $row2 = mysqli_fetch_assoc($result2);
        $_SESSION["name"] = $row2["last_name"];
        mysqli_close($conn);
        header("Location: index.php");
        exit();
    } else {
        mysqli_close($conn);
        header("Location: login.php");
        exit();
    }
} else {
    mysqli_close($conn);
    header("Location: login.php");
    exit();
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.svg" type="image/icon type">
    <title>Login</title>
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
    .wrap-login{
        width:45%;
        height:46vh;
        background-color: rgb(255,255,255,0.7);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.2);
        padding: 1rem 3rem 0.5rem 3rem;
        border-radius: 20px;
    }
    .wrap-login h3{
        margin-top:1rem;
        font-size:1.5rem;
        font-weight:600;
        text-align: center;
        color: #69594D;
    }
    .btn-submit {
        margin:2rem 0 0.5rem 0;
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
    .label{
        font-weight:400;
    }

    .signup a{
        color: black;
        font-weight:300;
        font-size:0.9rem;
        
    }


</style>
<body>
<!--Navigation-->
<?php require_once("navbar.php"); ?>
<!-- login -->
<div class="wrap container">
    <div class="wrap-login">
        <h3>Đăng nhập</h3>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Nhập địa chỉ email" >
            </div>
            <div class="form-group">
                <label>Mật khẩu:</label>
                <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" >
            </div>
            <div class="btn-submit">
                <button type="submit" name="login" class="btn btn-primary">Đăng nhập</button>
            </div>
            <div style="display: flex; align-items: center; justify-content:center;">
                <div class="signup">
                    <a href="signup.php">Bạn chưa có tài khoản?</a>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html>