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
    <title>Hồ sơ</title>
    <style>
        body{
            height:75vh;
            background-color:#F5F5F5 !important;
        }
        .wrap-profile{
            padding-top:8rem;
        }
        .profile{
            width:50%;
            height:50vh;
            margin:auto;
            padding:0 ;
        }
        .user-info{
            background-color: white;
            padding: 2rem 4rem 0 4rem;
            border-radius: 10px;
            box-shadow: rgba(36, 55, 78, 0.08) 0px 8px 40px;
        }
        form input{
            border:1px solid lightgrey;
            border-radius:5px;
            width: 100%;
            padding: 0.3rem;
            color: grey;
        }
        form label{
            margin: 1rem 0 0.5rem 0;
        }
        .btn-save-btn{
            margin: 2rem 4rem;
            width: 5rem;
            cursor: pointer;
            
        }
        .btn-save-btn:hover{
            background-color:#69594D;
            color:white;
        }

    </style>
</head>
<body>
<!--Navigation-->
<?php require_once("navbar.php"); ?>
<!-- profile -->
<div class="wrap">
    <div class="wrap-profile container">
        <div class="profile">
                    <div class="user-info">
                        <div class="icon_user text-center">
                            <img src="user_profile.svg" alt="">
                        </div>
                        <div class="title text-center mt-2 mb-0">
                            <h5>Thông tin cá nhân</h5>
                        </div>
                        <div class="form_user">  
                            <form action="update.php" method="POST">
                                <input type="hidden" name="id" value="<?php  echo $_SESSION["Id"] ?>" ><br>
                                <label for="name">Họ tên</label><br>
                                <input type="text" name="name" value="<?php  echo $_SESSION["User_name"] ?>" required><br>
                                <label for="email">Email</label><br>
                                <input type="email" name="email" value="<?php  echo $_SESSION["Email"] ?>" required><br>
                               
                                <label for="phone">Số điện thoại</label><br>
                                <input type="tel" name="phone" value="<?php  echo $_SESSION["Phone"] ?>" required><br>
                            
                                <label for="phone">Địa chỉ</label><br>
                                <input type="text" name="address" value="<?php  echo $_SESSION["Address"] ?>" required><br>
                                <input class="btn-save-btn " type="button" value="Hủy" onclick="window.location.href='profile.php';">
                                <input class="btn-save-btn" type="submit" name="submit" value="Lưu">
                                
                            </form>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div> 
</div>
</body>
</html>